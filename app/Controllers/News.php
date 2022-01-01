<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;
use App\Models\Department_model;
use App\Models\Event_model;
use App\Models\News_model;

class News extends BaseController
{
    protected $model;
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['my3skill'])){
            header('location:'.base_url().'/clogin');
            exit;
        }
        $this->model=new News_model();
    }

    function index()
	{
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['news']=$this->model->orderBy('id','desc')->findAll();
	    return view('admin/news',$data);
	}
    public function insert()
    {
        helper(['form', 'url']);
        $data = array(
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'start_date' => $this->request->getVar('start_date'),
            'close_date' => $this->request->getVar('close_date'),
            'date' => date('Y-m-d'),
            'inserted'  => date('Y-m-d H:i:s'),
            'inserted_by'  => $_SESSION['my3skill']['id'],
            'status'  => 'y'
        );
        $save = $this->model->save($data);
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/news" );
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
            'description' => $this->request->getVar('description'),
            'start_date' => $this->request->getVar('start_date'),
            'close_date' => $this->request->getVar('close_date'),
            'date' => date('Y-m-d'),
            'modified'  => date('Y-m-d H:i:s'),
            'modified_by'  => $_SESSION['my3skill']['id'],
        );
        $save = $this->model->save($data);
        return redirect()->to( base_url()."/news" );
    }

    public function delete($id = null)
    {
        $modify=$this->model->where('id', $id)->first();
        $this->model->where('id', $id)->delete();
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
}
