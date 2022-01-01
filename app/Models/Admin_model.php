<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class Admin_model extends  Model{
        protected $table='admin';
        protected $primaryKey='id';
        protected $allowedFields=['name','type','email','mobile','image','password','inserted','inserted_by','modified','modified_by','status','ins','del','modi'];
    }
