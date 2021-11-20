<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class Daily_Activity_Modal extends Model{

    protected $table='daily_activities';
    protected $primaryKey ='daily_act_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  																													
					
    protected $allowedFields=[
    'daily_act_id',
    'daily_activity_name',
    'daily_activity_id',
    'daily_project_id',
    'daily_activity_date',
     'daily_activity_meter'
   
   ];
   
  

}
