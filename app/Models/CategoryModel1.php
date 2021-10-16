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
    'created_at',
    'updated_by'
   ];
   


}
