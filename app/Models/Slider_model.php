<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class Slider_model extends  Model{
        protected $table='slider';
        protected $primaryKey='id';
        protected $allowedFields=['title','description','image','status','inserted','inserted_by','modified','modified_by','type','category_id'];
    }

