<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;

class Admin extends BaseController
{
    protected $model;
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['my3skill'])){
            header('location:'.base_url().'/clogin');
            exit();
        }
        $this->model=new Admin_model();
    }

    function index()
    {
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['master']=$this->model->query("select * from master order by 'position'")->getResult('array');
        $data['admin']=$this->model->orderBy('id','desc')->findAll();
        return view('admin/admin',$data);
    }
    public function insert()
    {
        helper(['form', 'url']);
        $data = array(
            'name' => $this->request->getVar('name'),
            'type'  => $this->request->getVar('type'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile'),
            'image'  => 'assets/images/noimage.png',
            'password'  => $this->request->getVar('password'),
            'inserted'  => date('Y-m-d H:i:s'),
            'inserted_by'  => $_SESSION['my3skill']['id'],
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
        $this->model->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/admin" );
    }

    public function modify($id = null)
    {
        $data['modify'] = $this->model->where('id', $id)->first();
//        $this->model->query("insert into student(`name`,`email`,`mobile`) values('Deepak','deepakprn78@gmail.com','7878868606')",false);
//        $data['users']=$this->model->query("select * from users order by id desc",false)->getResult('array');
        echo json_encode($data['modify']);
    }

    public function update()
    {
        $data = array(
            'id' => $this->request->getVar('id'),
            'type'  => $this->request->getVar('type'),
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password'),
            'mobile'  => $this->request->getVar('mobile'),
            'modified'  => date('Y-m-d H:i:s'),
            'modified_by'  => $_SESSION['my3skill']['id'],
        );
        if($_FILES['image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
        }
        $save = $this->model->save($data);
        return redirect()->to( base_url()."/admin" );
    }

    public function delete($id = null)
    {
        $modify=$this->model->where('id', $id)->first();
        $this->model->where('id', $id)->delete();
        @unlink($modify['image']);
        return redirect()->to( base_url()."/admin" );
    }
    function status_change(){
        $data=[
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ];
        $this->model->save($data);
        echo 'yes';
    }
    function get_admin_rights($admin){
        $model=new Admin_model();
        $modify=$model->where('id',$admin)->first();
        $rights=$this->model->query("select * from admin_rights where admin_id=$admin")->getResult('array');
        $all=array();
        foreach ($rights as $r)
            $all[]=$r['master_id'];
        $modify['rights']=implode('^',$all);
        echo json_encode($modify);
    }
    function save_rights(){
        $model=new Admin_rights_model();
        $admin=$this->request->getVar('admin');
        $rights=$this->request->getVar('rights');
        $model->query("delete from admin_rights where admin_id=$admin");
        foreach ($rights as $r)
            $model->save(array('admin_id' => $admin , 'master_id' => $r));

        $model=new Admin_model();
        $data=array(
            'id' => $admin,
            'ins' => $this->request->getVar('ins'),
            'del' => $this->request->getVar('del'),
            'modi' => $this->request->getVar('modi'),
        );
        $model->save($data);
        echo 'yes';
    }
}
