<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class Testimonial_model extends  Model{
        protected $table='testimonial';
        protected $primaryKey='id';
        protected $allowedFields=['name','image','detail','status'];
    }
