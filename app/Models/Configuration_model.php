<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class Configuration_model extends  Model{
        protected $table='configuration';
        protected $primaryKey='id';
        protected $allowedFields=['title','logo','contact','email','copyright','address','footer_logo','principal_image','principal_education','principal_msg','principal_name','about_image','trust','infrastructure','favicon','meta_description','meta_keywords'];
    }
