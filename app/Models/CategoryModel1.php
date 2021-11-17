<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class CategoryModel1 extends Model{

    protected $table='category';
    protected $primaryKey ='ctg_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  
  																													
    protected $allowedFields=[
    'category_name',
    'catergory_number',
    'created_at',
    'updated_by'
   ];

   
   public function fetchCat()
   {
    $builder = $this->db->table("category");
    $builder->select('ctg_id,category_name,catergory_number');
    $builder->orderBy('catergory_number', 'ASC');
    $data = $builder->get()->getResult();
    // echo "<pre>";
  //   print_r($data);exit;
   return $data;
   }


}
