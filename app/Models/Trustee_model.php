<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Trustee_model extends  Model{
    protected $table='trustee';
    protected $primaryKey='id';
    protected $allowedFields=['name','image','inserted','inserted_by','modified','modified_by','status'];
}