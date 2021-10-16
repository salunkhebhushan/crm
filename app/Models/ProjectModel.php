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
    'cnt_id',
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
   public function getListOfClintDetails()
{
  $builder = $this->db->table("client");
  $builder->select('cnt_no,owner_name,clint_company_name');
  $data = $builder->get()->getResult();
//echo "<pre>";
//print_r($data);exit;
  return $data;
}
/**Author: Bhushan G Salunkhe 
 * ajax call get project title,clint name,clint company name
*/
public function ajaxGetSelectedClientDetails($id)
{
  $builder = $this->db->table("client");
  $builder->select('cnt_no,project_title,clint_company_name');
  $builder->join('project', 'project.cnt_id = client.cnt_no');
  $builder->where("cnt_no = $id");
  $data = $builder->get()->getResult();

  return $data;
}

/**get last id  */
function fetchLastInsertedIDProject() 
{
    
      $builder = $this->db->table("project");
      $builder->select('project_no');
      $builder->orderBy('project_no', 'DESC');
      $builder->limit(1);
      $data = $builder->get()->getResult();
    return $data;
}


}
