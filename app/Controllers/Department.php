<?php
namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Admin_rights_model;
use App\Models\Department_model;

class Department extends BaseController
{
    protected $model;
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['my3skill'])){
            header('location:'.base_url().'/clogin');
            exit;
        }
        $this->model=new Department_model();
    }

    function index()
	{
        $menu=new Admin_rights_model();
        $data['menus']=$menu->get_menus($_SESSION['my3skill']['id']);
        $data['department']=$this->model->orderBy('id','desc')->findAll();
	    return view('admin/department',$data);
	}
    public function insert()
    {
        helper(['form', 'url']);
        $cat=explode(",",$this->request->getVar('title'));
        foreach ($cat as $c){
            $data = array(
                'department' => $c,
                'inserted'  => date('Y-m-d H:i:s'),
                'inserted_by'  => $_SESSION['my3skill']['id'],
                'status'  => 'y'
            );
            $save = $this->model->save($data);
        }
        $_SESSION['inserted']=1;
        return redirect()->to( base_url()."/department" );
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
            'department' => $this->request->getVar('title'),
            'modified'  => date('Y-m-d H:i:s'),
            'modified_by'  => $_SESSION['my3skill']['id'],
        );
        $save = $this->model->save($data);
        return redirect()->to( base_url()."/department" );
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
