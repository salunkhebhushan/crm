<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class LoginModel extends Model{

    protected $table='login';
    protected $primarykey='ad_id';
    protected $allowedFields=['ad_name',
    'ad_email',
    'ad_password'
   ];
     
   
    // public function getPendingSalesCount($post){

    //     $db = $this->db;
    //     $builder = $db->table('sales');
    //     $builder->select('count(*) as total');
    //     $builder->where('isPurchased',0);
    //     $builder->where('stock','No');
    //     $result = $builder->get();
    //     $getPanding = $result->getRowArray();

    //     return $getPanding->total;
    // }



}