<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Social_model extends  Model{
    protected $table='social';
    protected $primaryKey='id';
    protected $allowedFields=['title','class','link','inserted','inserted_by','modified','modified_by','status',];
}