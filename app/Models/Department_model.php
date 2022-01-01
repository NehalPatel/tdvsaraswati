<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Department_model extends  Model{
    protected $table='department';
    protected $primaryKey='id';
    protected $allowedFields=['department','image','inserted','inserted_by','modified','modified_by','status'];
}