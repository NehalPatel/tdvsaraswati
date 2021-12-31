<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;
use App\Models\Configuration_model;
use App\Models\Contact_model;
use App\Models\Course_model;
use App\Models\Course_video_model;
use App\Models\Hit_count_model;
use App\Models\Payments_model;
use App\Models\Pending_payment_model;
use App\Models\Student_course_model;
use App\Models\Student_model;
use App\Models\Support_messages_model;
use App\Models\Support_model;
use App\Models\Teacher_model;
use App\Models\Transactions_model;

class Dashboard extends BaseController
{
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['my3skill'])){
            header('location:'.base_url().'/clogin');
            exit();
        }
    }
    function index()
	{
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
//        $data['student']=$menu->query("select count(*) as total from student where day(registered)=".date('d')." and month(registered)=".date('m')." and year(registered)=".date('Y'))->getResult('array');
//        $data['students']=$menu->query("select count(*) as total from student")->getResult('array');
//        $data['courses']=$menu->query("select count(*) as total from course where day(inserted)=".date('d')." and month(inserted)=".date('m')." and year(inserted)=".date('Y'))->getResult('array');
//        $data['teachers']=$menu->query("select count(*) as total from teacher")->getResult('array');
//        $data['visit']=$menu->query("select count(*) as total from hit_count where `date`='".date('Y-m-d')."'")->getResult('array');
//        $data['course']=$menu->query("select count(*) as total from course")->getResult('array');
        $data['visitor']=$menu->query("select count(*) as total from hit_count")->getResult('array');
	    return view('admin/dashboard',$data);
	}
	function teachers(){
        $model=new Teacher_model();
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['teacher']=$model->query("select * from teacher where status='y' order by `id` desc")->getResult('array');
        $cnt=0;
        foreach ($data['teacher'] as $t){
            $res=$model->query("select count(*) as total from course where inserted_by=".$t['id'])->getResult('array');
            $data['teacher'][$cnt++]['courses']=intval($res[0]['total']);
        }
        return view('admin/teacher',$data);
    }
    function pending_teachers(){
        $model=new Teacher_model();
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['teacher']=$model->query("select * from teacher where status='n' order by `id` desc")->getResult('array');
        return view('admin/pending_teacher',$data);
    }
    function web_hits(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        return view('admin/hits',$data);
    }
    public function get_hits(){
        $model=new Hit_count_model();
        $from=$this->request->getVar('from');
        $to=$this->request->getVar('to');
        $data['hits']=$model->query("select * from hit_count where `date` >= '$from' and `date` <= '$to'")->getResult('array');
        return view('admin/feed_hits',$data);
    }
    function status_change()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ];
        $model=new Teacher_model();
        $model->save($data);
        echo 'yes';
    }
    function courses($teacher){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Course_model();
        $data['course']=$model->query("select * from course where inserted_by=$teacher")->getResult('array');
        $cnt=0;
        foreach ($data['course'] as $c){
            $res=$model->query("select count(*) as total from student_course where course_id=".$c['id'])->getResult('array');
            $data['course'][$cnt++]['enrolled']=$res[0]['total'];
        }
        return view('admin/course',$data);
    }
    function course_student($course){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Course_model();
        $data['student']=$model->query("select s.* from student s,student_course sc where sc.student_id=s.id and sc.course_id=$course")->getResult('array');
        return view('admin/enrolled_student',$data);
    }
    function students(){
        $model=new Course_model();
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['student']=$model->query("select * from student order by `id` desc")->getResult('array');
        return view('admin/student',$data);
    }
    public function modify_student($id = null)
    {
        $model=new Student_model();
        $data['modify'] = $model->where('id', $id)->first();
        echo json_encode($data['modify']);
    }
    public function modify_teacher($id = null)
    {
        $model=new Teacher_model();
        $data['modify'] = $model->where('id', $id)->first();
        echo json_encode($data['modify']);
    }
    public function insert_student()
    {
        $model=new Student_model();
        $data = array(
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile'),
            'gender'  => $this->request->getVar('gender'),
            'dob'  => $this->request->getVar('dob'),
            'image'  => 'assets/images/noimage.png',
            'password'  => $this->request->getVar('password'),
            'registered'  => date('Y-m-d H:i:s'),
            'registered_ip'  => $_SERVER['REMOTE_ADDR'],
            'status'  => 'y'
        );
        if($_FILES['image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
        }
        if($model->where('mobile',$data['mobile'])->countAllResults()==0){
            $save = $model->save($data);
            $_SESSION['inserted']=1;
        }
        else{
            $_SESSION['already']=1;
        }
        return redirect()->to( base_url()."/dashboard/students" );
        exit;
    }
    public function insert_teacher()
    {
        $model=new Teacher_model();
        $data = array(
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile'),
            'gender'  => $this->request->getVar('gender'),
            'dob'  => $this->request->getVar('dob'),
            'image'  => 'assets/images/noimage.png',
            'password'  => $this->request->getVar('password'),
            'registered'  => date('Y-m-d H:i:s'),
            'registered_ip'  => $_SERVER['REMOTE_ADDR'],
            'status'  => 'y'
        );
        if($_FILES['image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
        }
        if($model->where('mobile',$data['mobile'])->countAllResults()==0){
            $save = $model->save($data);
            $_SESSION['inserted']=1;
        }
        else{
            $_SESSION['already']=1;
        }
        return redirect()->to( base_url()."/dashboard/teachers" );
        exit;
    }
    public function update_student()
    {
        $model=new Student_model();
        $data = array(
            'id' => $this->request->getVar('id'),
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile'),
            'gender'  => $this->request->getVar('gender'),
            'dob'  => $this->request->getVar('dob'),
            'password'  => $this->request->getVar('password'),
            'status'  => $this->request->getVar('status')
        );
        if($_FILES['image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
        }
        $save = $model->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/dashboard/students" );
        exit;
    }
    public function update_teacher()
    {
        $model=new Teacher_model();
        $data = array(
            'id' => $this->request->getVar('id'),
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile'),
            'gender'  => $this->request->getVar('gender'),
            'dob'  => $this->request->getVar('dob'),
            'password'  => $this->request->getVar('password'),
            'status'  => $this->request->getVar('status')
        );
        if($_FILES['image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
        }
        $save = $model->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/dashboard/teachers" );
        exit;
    }
    function student_status_change(){
        $model=new Student_model();
        $data=[
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ];
        $model->save($data);
        echo 'yes';
    }
    function new_courses(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Course_model();
        $data['title']="New Course";
        $data['course']=$model->query("select c.*,t.name as teacher from course c,teacher t where c.inserted_by=t.id and c.status='y' order by c.id desc")->getResult('array');
        $cnt=0;
        foreach ($data['course'] as $c){
            $res=$model->query("select count(*) as total from student_course where course_id=".$c['id'])->getResult('array');
            $data['course'][$cnt++]['enrolled']=$res[0]['total'];
        }
        return view('admin/new_course',$data);
    }
    function free_course(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Course_model();
        $data['title']="Free Courses";
        $data['course']=$model->query("select c.*,t.name as teacher from course c,teacher t where c.inserted_by=t.id and c.price=0 and c.status='y'  order by c.id desc")->getResult('array');
        $cnt=0;
        foreach ($data['course'] as $c){
            $res=$model->query("select count(*) as total from student_course where course_id=".$c['id'])->getResult('array');
            $data['course'][$cnt++]['enrolled']=$res[0]['total'];
        }
        return view('admin/course_list',$data);
    }
    function paid_course(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Course_model();
        $data['title']="Paid Courses";
        $data['course']=$model->query("select c.*,t.name as teacher from course c,teacher t where c.inserted_by=t.id and c.price!=0 and c.status='y'  order by c.id desc")->getResult('array');
        $cnt=0;
        foreach ($data['course'] as $c){
            $res=$model->query("select count(*) as total from student_course where course_id=".$c['id'])->getResult('array');
            $data['course'][$cnt++]['enrolled']=$res[0]['total'];
        }
        return view('admin/course_list',$data);
    }
    function unpublished(){
        $menu=new Admin_rights_model();
        $model=new Course_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['title']="Unpublished Courses";
        $data['course']=$model->query("select * from course where status='n' order by id desc")->getResult('array');
        $data['category']=$model->query("select * from category where status='y'")->getResult('array');
        $data['language']=$model->query("select * from `language` where status='y'")->getResult('array');
        $cnt=0;
        foreach ($data['course'] as $c){
            $res=$model->query("select count(*) as total from student_course where course_id=".$c['id'])->getResult('array');
            $data['teacher'][$c['id']]=$model->query("select `name` from teacher where id=".$c['inserted_by'])->getResult('array');
            $data['course'][$cnt++]['enrolled']=$res[0]['total'];
        }
        return view('admin/unpublished',$data);
    }
    function student_courses($student){
        $model=new Course_model();
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['course']=$model->query("select c.* from course c,student_course sc where sc.course_id=c.id and sc.student_id=$student")->getResult('array');
        return view("admin/enrolled_course",$data);
    }
    function payments(){
        $menu=new Admin_rights_model();
        $cnf=new Configuration_model();
        $data['config']=$cnf->where('id',1)->first();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Pending_payment_model();
        $data['payment']=$model->query("select c.course,t.name as teacher,pp.* from pending_payment pp,teacher t,course c where pp.teacher_id=t.id and pp.course_id=c.id and pp.status='n' order by `id` desc")->getResult('array');
        return view('admin/payments',$data);
    }
    function completed_payout(){
        $menu=new Admin_rights_model();
        $cnf=new Configuration_model();
        $data['config']=$cnf->where('id',1)->first();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Pending_payment_model();
        $data['payment']=$model->query("select c.course,t.name as teacher,pp.* from pending_payment pp,teacher t,course c where pp.teacher_id=t.id and pp.course_id=c.id and pp.status='y' order by `id` desc")->getResult('array');
        return view('admin/payments',$data);
    }
    function payment_status_change(){
        $id=$this->request->getVar('id');
        $cnf=new Configuration_model();
        $data['config']=$cnf->where('id',1)->first();
        $model=new Pending_payment_model();
        $payment=$model->where('id',$id)->first();
        $teacher=($payment['amount'] * $data['config']['teacher_income']) / 100;
        $commision=$payment['amount'] - $teacher;
        $info=array(
            'teacher_id' => $payment['teacher_id'],
            'type' => 'c',
            'amount' => $teacher,
            'commission' => $commision,
            'trans_date' => date('Y-m-d'),
            'rel' => "settlement"
        );
        $trans=new Transactions_model();
        $trans->save($info);
        $trans->query("update teacher set balance = balance + ".$info['amount']." where id=".$info['teacher_id']);
        $model->save(array('id' => $id,'status' => 'y'));
        echo json_encode(array('status' => 'true'));
    }
    public function delete_student($id = null)
    {
        $student=new Student_model();
        $student->where('id', $id)->delete();
        echo json_encode(array('status' => 'true'));
    }
    public function delete_teacher($id = null)
    {
        $student=new Teacher_model();
        $student->where('id', $id)->delete();
        echo json_encode(array('status' => 'true'));
    }
    public function delete_course($id = null)
    {
        $course=new Course_model();
        $modify=$course->where('id', $id)->first();
        $this->model->where('id', $id)->delete();
        @unlink($modify['image']);
        @unlink($modify['preview']);
        $course->where('id', $id)->delete();
        echo json_encode(array('status' => 'true'));
    }
    public function delete_video($id = null)
    {
        $course=new Course_video_model();
        $modify=$course->where('id', $id)->first();
        $this->model->where('id', $id)->delete();
        @unlink($modify['thumb']);
        @unlink($modify['video']);
        $course->where('id', $id)->delete();
        echo json_encode(array('status' => 'true'));
    }
    function course_videos($id=null){
        if($id==null){
            header('location:'.base_url().'/dashboard');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $course=new Course_model();
        $data['course']=$course->where('id',$id)->first();
        $data['videos']=$course->query("select * from videos where course_id=$id")->getResult('array');
        return view('admin/course_videos',$data);

    }
    function send_message(){
        $utility=new \Utilities();
        echo $utility->send_message('917878868606','Test Message');
    }
    function teacher_wallet($teacher){
        $menu=new Admin_rights_model();
        $data['teacher_id']=$teacher;
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Transactions_model();
        $data['teacher']=$model->query("select * from teacher where id=$teacher")->getResult('array');
        $data['trans']=$model->where('teacher_id',$teacher)->orderBy('trans_date','desc')->findAll();
        return view('admin/teacher_wallet',$data);
    }
    function add_money_teacher(){
        $data=array(
            'teacher_id' => $this->request->getVar('id'),
            'type' => 'c',
            'amount' => $this->request->getVar('amount'),
            'trans_date' => date('Y-m-d'),
            'payment_no' => 'Admin Topup',
        );
        $model=new Transactions_model();
        $model->save($data);
        $model->query("update teacher set balance=balance + ".$data['amount']." where id=".$data['teacher_id']);
        header('location:'.base_url().'/dashboard/teacher_wallet/'.$data['teacher_id']);
        exit;
    }
    function less_money_teacher(){
        $data=array(
            'teacher_id' => $this->request->getVar('id'),
            'type' => 'd',
            'amount' => $this->request->getVar('amount'),
            'trans_date' => date('Y-m-d'),
            'payment_no' => 'Admin Reduce',
        );
        $model=new Transactions_model();
        $model->save($data);
        $model->query("update teacher set balance=balance - ".$data['amount']." where id=".$data['teacher_id']);
        header('location:'.base_url().'/dashboard/teacher_wallet/'.$data['teacher_id']);
        exit;
    }
    function student_wallet($student){
        $menu=new Admin_rights_model();
        $data['student_id']=$student;
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Transactions_model();
        $data['student']=$model->query("select * from student where id=$student")->getResult('array');
        $data['trans']=$model->where('student_id',$student)->orderBy('trans_date','desc')->findAll();
        return view('admin/student_wallet',$data);
    }
    function add_money_student(){
        $data=array(
            'student_id' => $this->request->getVar('id'),
            'type' => 'c',
            'amount' => $this->request->getVar('amount'),
            'trans_date' => date('Y-m-d'),
            'payment_no' => 'Admin Topup',
        );
        $model=new Transactions_model();
        $model->save($data);
        $model->query("update student set balance=balance + ".$data['amount']." where id=".$data['student_id']);
        header('location:'.base_url().'/dashboard/student_wallet/'.$data['student_id']);
        exit;
    }
    function less_money_student(){
        $data=array(
            'student_id' => $this->request->getVar('id'),
            'type' => 'd',
            'amount' => $this->request->getVar('amount'),
            'trans_date' => date('Y-m-d'),
            'payment_no' => 'Admin Reduce',
        );
        $model=new Transactions_model();
        $model->save($data);
        $model->query("update student set balance=balance - ".$data['amount']." where id=".$data['student_id']);
        header('location:'.base_url().'/dashboard/student_wallet/'.$data['student_id']);
        exit;
    }
    function orders(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['orders']=$menu->query("select s.name as student,c.course,p.* from student_course p,course c,student s where p.student_id=s.id and p.course_id=c.id order by p.id desc")->getResult('array');
        $data['student']=$menu->query("select * from student where status='y'")->getResult('array');
        $data['course']=$menu->query("select * from course where status='y'")->getResult('array');
        return view('admin/orders',$data);
    }
    function payments_status_change(){
        $model=new Payments_model();
        $data=[
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ];
        $model->save($data);
        echo 'yes';
    }
    public function delete_payment($id = null)
    {
        $student=new Payments_model();
        $student->where('id', $id)->delete();
        echo json_encode(array('status' => 'true'));
    }
    function enroll_course(){
        $course=$this->request->getVar('course');
        $student=$this->request->getVar('student');
        $data=array(
            'course_id' => $course,
            'student_id' => $student,
            'enroll_date' => date('Y-m-d'),
            'payment_no' => '0',
            'payment_date' => date('Y-m-d'),
            'amount' => 0
        );
        $model=new Student_course_model();
        $model->enroll_student($data);
    }
    function contactus(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['contact']=$menu->query("select * from support order by id desc")->getResult('array');
        return view('admin/contactus',$data);
    }
    function status_contact(){
        $model=new Support_model();
        $data=[
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ];
        $model->save($data);
        echo 'yes';
    }
    public function delete_contact($id = null)
    {
        $student=new Support_model();
        $student->where('id', $id)->delete();
        echo json_encode(array('status' => 'true'));
    }
    function meetings(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['meetings']=$menu->query("select * from meetings order by id desc")->getResult('array');
        $cnt=0;
        foreach ($data['meetings'] as $m){
            $model=new Teacher_model();
            $teacher=$model->where('id',$m['teacher_id'])->first();
            $data['meetings'][$cnt++]['teacher']=$teacher;
        }
        return view('admin/meetings',$data);
    }
    function support_messages($id){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $model=new Support_model();
        $data['modify']=$model->where('id',$id)->first();
        $data['messages']=$model->query("select * from support_messages where support_id=$id")->getResult('array');
        return view('admin/support_messages',$data);
    }
    function submit_update(){
        $data=array(
            'support_id' => $this->request->getVar('support'),
            'message' => $this->request->getVar('message'),
            'added' => date('Y-m-d H:i:s')
        );
        $model=new Support_messages_model();
        $model->save($data);
        if($this->request->getVar('isSend')=='y'){
            //send message code here
        }
        $_SESSION['inserted']=1;
        header("location:".base_url()."/dashboard/support_messages/".$data['support_id']);
        exit;
    }
    function remove_selected(){
        $ids=$this->request->getVar('ids');
        $model=new Student_model();
        foreach ($ids as $id){
            @$model->where('id',$id)->delete();
        }
        echo 'yes';
    }
    function student_devices($student=0){
        if($student==0){
            echo "You are on wrong page";
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $stud=new Student_model();
        $data['modify']=$stud->where('id',$student)->first();
        $data['devices']=$menu->query("select * from devices where student_id=$student order by id desc")->getResult('array');
        return view('admin/student_devices',$data);
    }
    function student_enrolled($student=0){
        if($student==0){
            echo "You are on wrong page";
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $stud=new Student_model();
        $data['modify']=$stud->where('id',$student)->first();
        $data['courses']=$menu->query("select c.course,sc.* from course c,student_course sc where sc.course_id=c.id and sc.student_id=$student order by id desc")->getResult('array');
        return view('admin/student_enrolled',$data);
    }
}
