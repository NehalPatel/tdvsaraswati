<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Downloads_model extends  Model{
    protected $table='downloads';
    protected $primaryKey='id';
    protected $allowedFields=['title','date','start_date','close_date','file','inserted','inserted_by','modified','modified_by','status'];
}