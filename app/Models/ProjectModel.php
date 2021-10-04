<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class ProjectModel extends Model{

    protected $table='project';
    protected $primaryKey ='pro_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;
 // pro_id																					

  																												
    protected $allowedFields=[
    'project_no',  
    'cnt_no',
    'owner_company_name',
    'project_title',
    'work_order_satus',
    'starting_date',
    'complation_date',
    'days_remaining',
    'days_compated',
    'pro_status',
    'sub_ctr_code',
    'sub_ctr_name',
    'project_expens',
    'total_revenue',
    'profit_loss',
    'm1',
    'rate',
    'compate',
    'inprogress',
    'created_at',
    'updated_by',
   ];
   


}