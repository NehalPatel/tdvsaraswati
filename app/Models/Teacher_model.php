<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class Teacher_model extends  Model{
        protected $table='teacher';
        protected $primaryKey='id';
        protected $allowedFields=['name','image','mobile','email','dob','education','experience','designation','department_id','inserted','inserted_by','modified','modified_by','status','gender'];
    }
