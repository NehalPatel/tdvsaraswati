<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Event_gallery_model extends  Model{
    protected $table='event_gallery';
    protected $primaryKey='id';
    protected $allowedFields=['event_id','image','inserted','inserted_by','modified','modified_by','status'];
}