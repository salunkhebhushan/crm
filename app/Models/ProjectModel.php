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
  $builder->select('cnt_no,clint_company_name');
  //$builder->join('project', 'project.cnt_id = client.cnt_no');
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


  public function getSubContractorDetails()
{
  $builder = $this->db->table("sub_contractor");
  $builder->select('sub_no');
  $data = $builder->get()->getResult();
//echo "<pre>";
//print_r($
  return $data;
}
// activity project$build$builder

public function projectDelete($id)
{
     $builder = $this->db->table("project_activities");
     $builder->select('project_no,project_id');
    $builder->join("project", "project_activities.project_id = project.project_no");
    $builder->delete("project_id=$id");
    // $builder->delete("project");
  
     $data = $builder->get()->getResult();
    return $data;
    
}

public function activity_record()
{
     $builder = $this->db->table("project_activities");
     $builder->select('project_no,emp_no,project_id,m1');
//   $builder->join("project", "project_activities.project_id = project.project_no");
    // $builder->delete("project_id=$id");
    // $builder->delete("project");
  
     $data = $builder->get()->getResult();
    return $data;
    
}

//  public function getProjectWiseAtv()
// {
//   $builder = $this->db->table("project_activities");
//   $builder->select('sub_no');
//   $data = $builder->get()->getResult();
// //echo "<pre>";
// //print_r($data);exit;
//   return $data;
// }
// public function getProjectWiseAtv($id)
// {
//   $builder = $this->db->table("project");
// //   $builder->select('owner.*, client.clint_company_name');
//   $builder->join('project_activities', 'project.project_no = project_activities.project_id');
//   $builder->where("project_id = $id");
  
// echo "<pre>";
// print_r($data);exit;
// $data = $builder->get()->getResult();
//   return $data;
// }
}
