<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class Hit_count_model extends  Model
    {
        protected $table='hit_count';
        protected $primaryKey='id';
        protected $allowedFields=['date','ip_address','country','time','short_country'];
        function makeHit($ip){
            $date=date('Y-m-d');
            $data=$this->query("select * from hit_count where ip_address='$ip' and `date`='$date'")->getResult('array');
            if(count($data)==0){
                $country=explode('^',$this->_get_country_name());
                $this->save(array('ip_address' => $ip , 'date' => date('Y-m-d'),'time' => date('H:i:s') , 'country' => $country[0] , 'short_country' => $country[1] ));
            }
            return true;
        }
        function _get_country_name(){
            try{
                $IPaddress  =  $_SERVER['REMOTE_ADDR'];
                $json = @file_get_contents("http://ipinfo.io/{$IPaddress}");
                $details = json_decode($json);
                $code=isset($details->country)?$details->country:"IN";
                $file = fopen("assets/countries.csv","r");
                while(! feof($file)) {
                    $c = fgetcsv($file);
                    if ($c[1] == $code) {
                        return $c[0]."^".$code;
                    }
                }
                fclose($file);
            }
            catch(Exception $e){
                return "India^IN";
            }
            return "India^IN";
        }
    }
