<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;
use App\Models\Event_gallery_model;
use App\Models\Event_model;

class Event extends BaseController
{
    protected $model;
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['my3skill'])){
            header('location:'.base_url().'/clogin');
            exit;
        }
        $this->model=new Event_model();
    }

    function index()
	{
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['event']=$this->model->orderBy('id','desc')->findAll();
	    return view('admin/event',$data);
	}
    public function insert()
    {
        helper(['form', 'url']);
        $data = array(
            'title' => $this->request->getVar('title'),
            'short' => $this->request->getVar('short'),
            'long' => $this->request->getVar('long'),
            'date' => $this->request->getVar('date'),
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
            $this->model->makeThumbnails("assets/images/",$filename,"h",1096,644);
        }
        $save = $this->model->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/event" );
    }

    public function modify($id = null)
    {
        $data['modify'] = $this->model->where('id', $id)->first();
        echo json_encode($data['modify']);
    }

    public function update()
    {
        $data = array(
            'id' => $this->request->getVar('id'),
            'title' => $this->request->getVar('title'),
            'short' => $this->request->getVar('short'),
            'long' => $this->request->getVar('long'),
            'date' => $this->request->getVar('date'),
            'modified'  => date('Y-m-d H:i:s'),
            'modified_by'  => $_SESSION['my3skill']['id'],
        );
        if($_FILES['image']['name']!=""){
            $modify=$this->model->where('id',$data['id'])->first();
            @unlink($modify['image']);
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
            $this->model->makeThumbnails("assets/images/",$filename,"h",1096,644);
        }
        $save = $this->model->save($data);
        return redirect()->to( base_url()."/event" );
    }

    public function delete($id = null)
    {
        $modify=$this->model->where('id', $id)->first();
        $this->model->where('id', $id)->delete();
        @unlink($modify['image']);
        return 'yes';
    }
    public function delete_image($id = null)
    {
        $model=new Event_gallery_model();
        $modify=$this->model->where('id', $id)->first();
        $model->where('id', $id)->delete();
        @unlink($modify['image']);
        return 'yes';
    }
    function status_change(){
        $data=[
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ];
        $this->model->save($data);
        echo 'yes';
    }
    function remove_all(){
        $this->model->truncate();
        return 'yes';
    }
    function remove_selected(){
        $ids=$this->request->getVar('ids');
        foreach ($ids as $id){
            @$this->model->where('id',$id)->delete();
        }
        echo 'yes';
    }
    function images($event=0){
        if($event==0){
            return view('errors/html/error_404');
            exit;
        }
        $menu=new Admin_rights_model();
        $data['modify']=$this->model->where('id',$event)->first();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['images']=$this->model->query("select * from event_gallery where event_id=$event")->getResult('array');
        return view('admin/event_gallery',$data);
    }
    function add_image(){
        $data=array(
            'event_id' => $this->request->getVar('event_id'),
            'status' => 'y'
        );
        if($_FILES['image']['name']!=""){
            $_SESSION['ins']=1;
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
            $this->model->makeThumbnails("assets/images/",$filename,"h",1096,644);
        }
        $model=new Event_gallery_model();
        $model->save($data);
        header('location:'.base_url()."/event/images/".$data['event_id']);
        exit;
    }
}
