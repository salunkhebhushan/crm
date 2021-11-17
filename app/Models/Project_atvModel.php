<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class Project_atvModel extends Model{

    protected $table='project_activities';
    protected $primaryKey ='pro_atv_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  																													
					
    protected $allowedFields=[
    'project_id',
    'act_emp_no',
    'activity_name',
    'm1',
    'rate',
     'location',
    'inprogress',
    'order_status',
    'created_at',
    'updated_by'
   ];
   
   public function getProjectWiseAtv($id)
{
  $builder = $this->db->table("project");
   $builder->select('pro_atv_id,project_id,act_emp_no,activity_name,m1,rate,location,order_status');
  $builder->join('project_activities','project.project_no = project_activities.project_id');
  $builder->where("project_id = $id");
  $data = $builder->get()->getResult();

// echo "<pre>";
// print_r($data);exit;
  

  return $data;
}

public function activity_record($id)
{  
   foreach($id as $keyval)
   {
  $builder = $this->db->table("employees");
  $builder->select('first_name');
 // $builder->distinct();
  $builder->where("emp_no =  $keyval");
  $builder->orderBy("emp_no", "asc");
  $data[] = $builder->get()->getResult();

   }
 
   return $data;
  
  
}

   
// /*
// Code Discription: this method for get joing data of clint */
// public function getclientData()
// {
//   $builder = $this->db->table("client");
//   $builder->select('cnt_no,clint_company_name,owner_name');
//   // $builder->join('client', 'owner.cnt_id = client.cnt_no');
//   $data = $builder->get()->getResult();
// //  echo "<pre>";
// //   print_r($data);exit;
//   return $data;
// }

// public function getSubcontractor($id)
// {
//   $builder = $this->db->table("client");
//   $builder->select('owner_name');
//   $builder->where("cnt_no = $id");
//   $data = $builder->get()->getResult();
 
//   return $data;
// }
// //join for client tecord cnt_no is use for fetching ..primary key id not use 
// public function fetch_cllientSubcontactor()
// {
//   $builder = $this->db->table("sub_contractor");
//   $builder->select('*');
//   $data = $builder->get()->getResult();
//   // echo "<pre>";
//   //  print_r($data);exit;
//   return $data;
// }

// public function fetch_Profile($id)
// {
//   $builder = $this->db->table("sub_contractor");
//   $builder->select('*');
//   $builder->where("sub_id = $id");
//   $data = $builder->get()->getResult();
//   //  echo "<pre>";
//     // print_r($data);exit;
//   return $data;
// }

// /*public function fetchSelectedClintName($id)
// {
//   $builder = $this->db->table('client');
//   $builder->select('owner_name');
//   //$builder->from('mytable');
//   $builder->where("cnt_no = $id");
//   $query = $builder->get()->getResult();
//   return $query;
// }*/

// function fetchLastInsertedIDSub() 
// {
    
//       $builder = $this->db->table("sub_contractor");
//       $builder->select('sub_no');
//       $builder->orderBy('sub_no', 'DESC');
//       $builder->limit(1);
//       $data = $builder->get()->getResult();
//     return $data;
// }

}
