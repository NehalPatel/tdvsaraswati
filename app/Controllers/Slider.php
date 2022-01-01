<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;
use App\Models\Slider_model;

class Slider extends BaseController
{
    protected $model;
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['my3skill'])){
            header('location:'.base_url().'/clogin');
            exit();
        }
        $this->model=new Slider_model();
    }

    function index()
	{
	    $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['slider']=$this->model->orderBy('id','desc')->findAll();
        $data['category']=$this->model->query("select * from category where status='y'")->getResult('array');
	    return view('admin/slider',$data);
	}
    public function insert()
    {
        helper(['form', 'url']);
        $data = array(
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description'),
            'type'  => $this->request->getVar('type'),
            'category_id'  => $this->request->getVar('category'),
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
        $save = $this->model->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/slider" );
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
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description'),
            'modified'  => date('Y-m-d H:i:s'),
            'modified_by'  => $_SESSION['my3skill']['id'],
        );
        if($_FILES['image']['name']!=""){
            $type=explode('.',$_FILES['image']['name']);
            $filename=date('YmdHis').".".$type[count($type)-1];
            $_SESSION['file']=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/".$filename);
            $data['image']="assets/images/".$filename;
        }
        $save = $this->model->save($data);
        $_SESSION['updated']=1;
        return redirect()->to( base_url()."/slider" );
    }

    public function delete($id = null)
    {
        $modify=$this->model->where('id', $id)->first();
        $this->model->where('id', $id)->delete();
        @unlink($modify['image']);
        return redirect()->to( base_url()."/slider" );
    }
    function status_change(){
        $data=[
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ];
        $this->model->save($data);
        echo 'yes';
    }
    function remove_selected(){
        $ids=$this->request->getVar('ids');
        foreach ($ids as $id){
            @$this->model->where('id',$id)->delete();
        }
        echo 'yes';
    }
}
