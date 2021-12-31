<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;
use App\Models\Configuration_model;
use App\Models\Contact_model;
use App\Models\Department_model;
use App\Models\Downloads_model;
use App\Models\Event_gallery_model;
use App\Models\Event_model;
use App\Models\Facility_model;
use App\Models\News_model;
use App\Models\Slider_model;
use App\Models\Student_model;
use App\Models\Testimonial_model;
use App\Models\Web_detail_model;

class Web extends BaseController
{
    protected $info;
    function __construct()
    {
        session_start();
        $config=new Configuration_model();
        $web=new Web_detail_model();
        $this->info['config']=$config->where('id',1)->first();
        $this->info['web']=$web ->where('id',1)->first();
        $this->info['social']=$config->query("select * from social where status='y'")->getResult('array');
    }
    function index()
	{
	    $data=$this->info;
	    $date=date('Y-m-d');
	    $model=new Slider_model();
	    $data['slider']=$model->where('status','y')->orderBy('id','desc')->findAll();
	    $data['upcoming']=$model->query("select * from event where `date` > '$date' and status='y'")->getResult('array');
	    $data['recent']=$model->query("select * from event where `date` <= '$date' and status='y'")->getResult('array');
	    $data['facility']=$model->query("select * from facility where status='y' order by id desc")->getResult('array');
	    $data['news']=$model->query("select * from news where status='y' and start_date <= '$date' and close_date >= '$date' order by id desc")->getResult('array');
	    $data['gallery']=$model->query("select e.title,eg.* from event_gallery eg,event e where eg.event_id=e.id and eg.status='y' order by rand() limit 12")->getResult('array');
	    return view('web/home',$data);
	}
	function about_us(){
        $data=$this->info;
        $model=new Slider_model();
        $data['trustee']=$model->query("select * from trustee where status='y'")->getResult('array');
        return view('web/about_us',$data);
    }
    function all_events(){
        $data=$this->info;
        $model=new Slider_model();
        $date=date('Y-m-d');
        $data['event']=$model->query("select * from event where `date` > $date and status='y'")->getResult('array');
        $data['news']=$model->query("select * from news where status='y' and start_date <= '$date' and close_date >= '$date' order by id desc")->getResult('array');
        return view('web/all_events',$data);
    }
    function all_news(){
        $data=$this->info;
        $model=new Slider_model();
        $date=date('Y-m-d');
        $data['news']=$model->query("select * from news where status='y' and start_date <= '$date' and close_date >= '$date' order by id desc")->getResult('array');
        return view('web/all_news',$data);
    }
    function news($id=0){
        if($id==0){
            echo view('errors/html/error_404');
            exit;
        }
        $data=$this->info;
        $model=new News_model();
        $data['modify']=$model->where('id',$id)->first();
        return view('web/news_details',$data);
    }
    function events($id=0){
        if($id==0){
            echo view('errors/html/error_404');
            exit;
        }
        $data=$this->info;
        $model=new Event_model();
        $data['modify']=$model->where('id',$id)->first();
        return view('web/event_details',$data);
    }
    function facilities($id){
        if($id==0){
            echo view('errors/html/error_404');
            exit;
        }
        $data=$this->info;
        $model=new Facility_model();
        $data['modify']=$model->where('id',$id)->first();
        return view('web/facility_details',$data);
    }
    function event_gallery($id){
        $data=$this->info;
        $model=new Event_gallery_model();
        $data['event_gallery']=$model->query("select * from event_gallery where event_id=$id and status='y' order by id desc")->getResult('array');
        $data['event']=$model->query("select * from event where id=$id and status='y'")->getResult('array');
        //print_r($data['event']);
        return view('web/event_gallery',$data);
    }
    function teachers(){
        $data=$this->info;
        $model=new Department_model();
        $data['department']=$model->query("select * from department where status='y'")->getResult('array');
        foreach ($data['department'] as $d)
            $data['teacher'][$d['id']]=$model->query("select * from teacher where department_id=".$d['id'])->getResult('array');
        return view('web/faculties',$data);
    }
    function all_facilities(){
        $data=$this->info;
        $model=new Facility_model();
        $data['facility']=$model->where('status','y')->orderBy('id','desc')->findAll();
        return view('web/all_facilities',$data);
    }
    function trust(){
        $data=$this->info;
        $model=new Slider_model();
        $data['trustee']=$model->query("select * from trustee where status='y'")->getResult('array');
        return view('web/trust',$data);
    }
    function infrastructure(){
        $data=$this->info;
        $model=new Slider_model();
        $data['trustee']=$model->query("select * from trustee where status='y'")->getResult('array');
        return view('web/infrastructure',$data);
    }
    function trustee_message(){
        $data=$this->info;
        $model=new Slider_model();
        $data['trustee']=$model->query("select * from trustee where status='y'")->getResult('array');
        return view('web/principal',$data);
    }
    function downloads(){
        $data=$this->info;
        $model=new Downloads_model();
        $data['downloads']=$model->where('status','y')->orderBy('id','desc')->findAll();
        return view('web/downloads',$data);
    }
    function contact_us(){
        $data=$this->info;
        return view('web/contact_us',$data);
    }
    function submit_contact(){
        $model=new Contact_model();
        $data = array(
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile'),
            'message'  => $this->request->getVar('message'),
            'inserted'  => date('Y-m-d H:i:s'),
            'status'  => 'y'
        );
        $save = $model->save($data);
        $_SESSION['success']=1;
        header('location:'.base_url()."/web/contact_us");
        exit;
    }
}
