<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Contact_model extends  Model{
    protected $table='contact';
    protected $primaryKey='id';
    protected $allowedFields=['name','email','mobile','message','inserted','status','modified'];
}