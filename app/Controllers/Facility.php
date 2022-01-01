<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;
use App\Models\Facility_model;

class Facility extends BaseController
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
        $model=new Facility_model();
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['facility']=$model->query("select * from facility where status='y' order by `id` desc")->getResult('array');
        $cnt=0;
        return view('admin/facility',$data);
    }
    public function insert()
    {
        $model=new Facility_model();
        $data = array(
            'title' => $this->request->getVar('title'),
            'short'  => $this->request->getVar('short'),
            'long'  => $this->request->getVar('long'),
            'image'  => 'assets/images/noimage.png',
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
        $save = $model->save($data);
        return redirect()->to( base_url()."/facility" );
        exit;
    }
    public function delete($id = null)
    {
        $student=new Facility_model();
        $student->where('id', $id)->delete();
        echo json_encode(array('status' => 'true'));
    }
    public function modify($id = null)
    {
        $model=new Facility_model();
        $data['modify'] = $model->where('id', $id)->first();
        echo json_encode($data['modify']);
    }
    public function update()
    {
        $model=new Facility_model();
        $data = array(
            'title' => $this->request->getVar('title'),
            'short'  => $this->request->getVar('short'),
            'long'  => $this->request->getVar('long'),
            'image'  => 'assets/images/noimage.png',
            'inserted'  => date('Y-m-d H:i:s'),
            'inserted_by'  => $_SESSION['my3skill']['id'],
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
        return redirect()->to( base_url()."/facility" );
        exit;
    }
    function status_change()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ];
        $model=new Facility_model();
        $model->save($data);
        echo 'yes';
    }
    function remove_selected(){
        $model=new Facility_model();
        $ids=$this->request->getVar('ids');
        foreach ($ids as $id){
            @$model->where('id',$id)->delete();
        }
        echo 'yes';
    }
}
