<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;
use App\Models\Teacher_model;
// ====================== Suraj Code================
use App\Models\Category_model;

class Teacher extends BaseController
{
    function __construct()
    {
        session_start();
        $this->session_validate();
    }
     function session_validate(){
        if(!isset($_SESSION['my3skill'])){
            header('location:'.base_url());
            exit;
        }
    }

    function index()
    {
        $model=new Teacher_model();
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['teacher']=$model->query("select t.*,d.department from teacher t,department d where d.id=t.department_id and t.status='y' order by `id` desc")->getResult('array');
        $data['department']=$model->query("select * from department where status='y' order by `id` desc")->getResult('array');
        $cnt=0;
        return view('admin/teacher',$data);
    }
    public function insert()
    {
        $model=new Teacher_model();
        $data = array(
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile'),
            'gender'  => $this->request->getVar('gender'),
            'education'  => $this->request->getVar('education'),
            'department_id'  => $this->request->getVar('department_id'),
            'designation'  => $this->request->getVar('designation'),
            'experience'  => $this->request->getVar('experience'),
            'dob'  => $this->request->getVar('dob'),
            'image'  => 'assets/images/noimage.png',
            'status'  => $this->request->getVar('status'),
            'inserted'  => date('Y-m-d H:i:s'),
            'inserted_by'  => $_SESSION['my3skill']['id']
        );
        if($_FILES['image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
        }
        $model->save($data);
        return redirect()->to( base_url()."/teacher" );
        exit;
    }
    public function delete($id = null)
    {
        $student=new Teacher_model();
        $student->where('id', $id)->delete();
        echo json_encode(array('status' => 'true'));
    }
    public function modify($id = null)
    {
        $model=new Teacher_model();
        $data['modify'] = $model->where('id', $id)->first();
        echo json_encode($data['modify']);
    }
    public function update()
    {
        $model=new Teacher_model();
        $data = array(
            'id' => $this->request->getVar('id'),
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile'),
            'gender'  => $this->request->getVar('gender'),
            'education'  => $this->request->getVar('education'),
            'department_id'  => $this->request->getVar('department_id'),
            'designation'  => $this->request->getVar('designation'),
            'experience'  => $this->request->getVar('experience'),
            'dob'  => $this->request->getVar('dob'),
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
        return redirect()->to( base_url()."/teacher" );
        exit;
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
    function remove_selected(){
        $model=new Teacher_model();
        $ids=$this->request->getVar('ids');
        foreach ($ids as $id){
            @$model->where('id',$id)->delete();
        }
        echo 'yes';
    }
}
