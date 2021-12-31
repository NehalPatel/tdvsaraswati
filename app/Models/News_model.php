<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class News_model extends  Model{
    protected $table='news';
    protected $primaryKey='id';
    protected $allowedFields=['title','date','start_date','close_date','description','inserted','inserted_by','modified','modified_by','status'];
}