<?php
namespace App\Controllers;
use App\Models\Admin_model;

class Clogin extends BaseController
{
    function __construct()
    {
        session_start();
    }
    function index()
	{
        if(isset($_COOKIE['my3skill_id'])){
            $model=new Admin_model();
            $modify=$model->query('select * from admin where id='.$_COOKIE['my3skill_id'])->getResult('array');
            $_SESSION['my3skill']=$modify[0];
            header('location:'.base_url().'/dashboard');
            exit;
        }
        else{
            //return "Yo Yo";
        }
		return view('admin/login');
	}
	function check_login(){
        $username=$this->request->getVar('username1');
        $password=$this->request->getVar('password');
        $model=new Admin_model();
        $response=$model->where('email',$username)->where('password',$password)->orWhere('mobile',$username)->where('password',$password)->find();
        if(count($response)==1){
            if($this->request->getVar('remember')=="on"){
                setcookie("username",$username,time()+(86400 * 7),"/");
                setcookie("my3skill_id",$response[0]['id'],time()+(86400 * 7),"/");
            }
            $_SESSION['my3skill']=$response[0];
            header('location:'.base_url().'/dashboard');
            exit;
        }
        else{
            $_SESSION['failed']=1;
            header('location:'.base_url().'/clogin');
            exit;
        }
    }
    function logout(){
        unset($_SESSION['my3skill']);
        setcookie("username","",time()-3600,"/");
        setcookie("my3skill_id","",time()-3600,"/");
        header('location:'.base_url().'/clogin');
        exit;
    }
}
