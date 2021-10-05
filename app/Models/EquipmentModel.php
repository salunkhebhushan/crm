<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class EquipmentModel extends Model{

    protected $table='equipments';
    protected $primaryKey ='id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  																													

    protected $allowedFields=[
    'pe_id',  
    'pe_type',
    'pe_model',
    'status',
    'per_day_charge',
    'maintanence',
    'registration_expiry',
    'created_at',
    'updated_by'
   ];
   


}
