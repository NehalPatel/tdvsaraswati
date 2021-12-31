<?php
namespace App\Controllers;

use App\Models\Admin_rights_model;
use App\Models\Configuration_model;
use App\Models\Payment_config_model;
use App\Models\Sms_config_model;
use App\Models\Started_model;
use App\Models\Web_detail_model;

class Configuration extends BaseController
{
    protected $model;
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['my3skill'])){
            header('location:'.base_url().'/clogin');
            exit;
        }
        $this->model=new Configuration_model();
    }
    function index()
	{
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$this->model->query("select * from configuration where id='1'")->getResult('array');
	    return view('admin/config',$data);
	}
    public function insert()
    {
        helper(['form', 'url']);
        $data = array(
            'id' => 1,
            'title' => $this->request->getVar('title'),
            'contact' => $this->request->getVar('contact'),
            'email' => $this->request->getVar('email'),
            'copyright' => $this->request->getVar('copyright'),
            'address' => $this->request->getVar('address'),
            'principal_name' => $this->request->getVar('principal_name'),
            'principal_education' => $this->request->getVar('principal_education'),
            'principal_msg' => $this->request->getVar('principal_msg'),
            'trust' => $this->request->getVar('trust'),
            'infrastructure' => $this->request->getVar('infrastructure'),
            'meta_description' => $this->request->getVar('description'),
            'meta_keywords' => $this->request->getVar('keywords')
        );
        if($_FILES['logo']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['logo']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            move_uploaded_file($_FILES['logo']['tmp_name'],"assets/images/".$filename);
            $data['logo']="assets/images/".$filename;
        }
        if($_FILES['fav']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['fav']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            move_uploaded_file($_FILES['fav']['tmp_name'],"assets/images/".$filename);
            $data['favicon']="assets/images/".$filename;
        }
        if($_FILES['footer_logo']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['footer_logo']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            move_uploaded_file($_FILES['footer_logo']['tmp_name'],"assets/images/".$filename);
            $data['footer_logo']="assets/images/".$filename;
        }
        if($_FILES['principal_image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['principal_image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            move_uploaded_file($_FILES['principal_image']['tmp_name'],"assets/images/".$filename);
            $data['principal_image']="assets/images/".$filename;
        }
        if($_FILES['about_image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['about_image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            move_uploaded_file($_FILES['about_image']['tmp_name'],"assets/images/".$filename);
            $data['about_image']="assets/images/".$filename;
        }
        $save = $this->model->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/configuration" );
    }
    function payment(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $payment_config=new Payment_config_model();
        $data['config']=$payment_config->where('id',1)->first();
        return view('admin/payment_config',$data);
    }
    function sms(){
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $payment_config=new Sms_config_model();
        $data['config']=$payment_config->where('id',1)->first();
        return view('admin/sms_config',$data);
    }
    function get_sms_balance(){
        $helper=new \Utilities();
        echo $helper->get_balance();
    }
    function save_sms(){
        helper(['form', 'url']);
        $data = array(
            'id' => 1,
            'api_key' => $this->request->getVar('api_key'),
            'sender' => $this->request->getVar('sender'),
        );
        $payment=new Sms_config_model();
        $payment->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/configuration/sms" );
    }
    function save_payment(){
        helper(['form', 'url']);
        $data = array(
            'id' => 1,
            'stripe_status' => $this->request->getVar('stripe_status'),
            'stripe_key' => $this->request->getVar('stripe_key'),
            'stripe_secret_key' => $this->request->getVar('stripe_secret_key'),
            'razor_status' => $this->request->getVar('razor_status'),
            'razor_key_id' => $this->request->getVar('razor_key_id'),
            'razor_secret_key' => $this->request->getVar('razor_secret_key'),
        );
        $payment=new Payment_config_model();
        $payment->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/configuration/payment" );
    }
    function terms(){
        $model=new Web_detail_model();
        if($this->request->getVar('terms')!=""){
            $data=array(
                'id' => 1,
                'terms' => $this->request->getVar('terms')
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/terms');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/terms',$data);
    }
    function about(){
        $model=new Web_detail_model();
        if($this->request->getVar('about')!=""){
            $data=array(
                'id' => 1,
                'about' => $this->request->getVar('about')
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/about');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/about',$data);
    }
    function privacy(){
        $model=new Web_detail_model();
        if($this->request->getVar('privacy')!=""){
            $data=array(
                'id' => 1,
                'privacy' => $this->request->getVar('privacy')
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/privacy');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/privacy',$data);
    }
    function refund(){
        $model=new Web_detail_model();
        if($this->request->getVar('refund')!=""){
            $data=array(
                'id' => 1,
                'refund' => $this->request->getVar('refund')
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/refund');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/refund',$data);
    }
    function widget(){
        $model=new Web_detail_model();
        if($this->request->getVar('widget1')!=""){
            $data=array(
                'id' => 1,
                'widget1' => $this->request->getVar('widget1'),
                'widget2' => $this->request->getVar('widget2'),
                'widget3' => $this->request->getVar('widget3'),
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/widget');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/widget',$data);
    }
    function send_message(){
        $utility=new \Utilities();
        echo $utility->send_message($this->request->getVar('mobile'),$this->request->getVar('message'));
    }
    function currency(){
        $model=new Configuration_model();
        if($this->request->getVar('currency')!=""){
            $data=array(
                'id' => 1,
                'icon' => $this->request->getVar('icon'),
                'currency' => $this->request->getVar('currency')
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/currency');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/currency',$data);
    }
    function payout(){
        $model=new Configuration_model();
        if($this->request->getVar('teacher')!=""){
            $data=array(
                'id' => 1,
                'teacher_income' => $this->request->getVar('teacher'),
                'admin_income' => $this->request->getVar('admin')
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/payout');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/payout',$data);
    }
    function zoom_setting(){
        $model=new Configuration_model();
        if($this->request->getVar('email')!=""){
            $data=array(
                'id' => 1,
                'zoom_email' => $this->request->getVar('email'),
                'jwt_token' => $this->request->getVar('token')
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/zoom_setting');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/zoom_setting',$data);
    }
    function course_text(){
        $model=new Configuration_model();
        if($this->request->getVar('heading')!=""){
            $data=array(
                'id' => 1,
                'course_heading' => $this->request->getVar('heading'),
                'course_subheading' => $this->request->getVar('subheading')
            );
            $model->save($data);
            $_SESSION['inserted']=1;
            header('location:'.base_url().'/configuration/course_text');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/course_text',$data);
    }
    public function get_started()
    {
        $model=new Started_model();
        if($this->request->getVar('heading')){
            $data = array(
                'id' => 1,
                'heading' => $this->request->getVar('heading'),
                'subheading' => $this->request->getVar('subheading'),
                'button_text' => $this->request->getVar('button_text')
            );
            if($_FILES['image']['name']!=""){
                $_SESSION['ins']=1;
                $type=explode('.',$_FILES['image']['name']);
                $filename=date('YmdHis').".".$type[count($type)-1];
                move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
                $data['image']="assets/images/".$filename;
            }
            $save = $model->save($data);
            $_SESSION['inserted']=1;
            return redirect()->to( base_url()."/configuration/get_started");
            exit;
        }
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['config']=$model->where('id',1)->first();
        return view('admin/get_started',$data);

    }

}
