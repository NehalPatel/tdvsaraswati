<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class Web_detail_model extends  Model{
    protected $table='web_detail';
    protected $primaryKey='id';
    protected $allowedFields=['about','terms','privacy','refund','widget1','widget2','widget3'];
}