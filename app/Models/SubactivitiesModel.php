<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class ClientModel extends Model{

    protected $table='sub_activities';
    protected $primaryKey ='atv_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  						
  																													

    protected $allowedFields=[
    'sub_id',  
    'roba',
    'tile',
    'marble',
    'interlock',
    'created_at',
    'updated_by'
   ];
   


}
