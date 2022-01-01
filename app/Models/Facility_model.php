<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class Facility_model extends  Model{
        protected $table='facility';
        protected $primaryKey='id';
        protected $allowedFields=['title','short','long','image','inserted','inserted_by','modified','modified_by','status'];
    }
