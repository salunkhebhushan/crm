<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class SubcontractorModel extends Model{

    protected $table='sub_contractor';
    protected $primaryKey ='sub_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  																													

    protected $allowedFields=[
    'sub_no',  
    'cnt_id',
    'sub_company_name',
    'sub_owner_name',
    'sub_cell_no',
    'sub_email',
    'sub_contact_person',
    'sub_contact_cell_no',
    'sub_contact_email',
    'activity1',
    'activity2',
    'activity3',
    'activity4',
     'company_address',
    'created_at',
    'updated_by'
   ];
   
   
/*
Code Discription: this method for get joing data of clint */
public function getclientData()
{
  $builder = $this->db->table("client");
  $builder->select('cnt_no,clint_company_name,owner_name');
  // $builder->join('client', 'owner.cnt_id = client.cnt_no');
  $data = $builder->get()->getResult();
//  echo "<pre>";
//   print_r($data);exit;
   return $data;
}

public function getSubcontractor($id)
{
  $builder = $this->db->table("client");
  $builder->select('owner_name');
  $builder->where("cnt_no = $id");
  $data = $builder->get()->getResult();
 
   return $data;
}
//join for client tecord cnt_no is use for fetching ..primary key id not use 
public function fetch_cllientSubcontactor()
{
  $builder = $this->db->table("sub_contractor");
  $builder->select('*');
  $data = $builder->get()->getResult();
  // echo "<pre>";
  //  print_r($data);exit;
   return $data;
}

public function fetch_Profile($id)
{
  $builder = $this->db->table("sub_contractor");
  $builder->select('*');
   $builder->where("sub_id = $id");
  $data = $builder->get()->getResult();
  //  echo "<pre>";
    // print_r($data);exit;
   return $data;
}

/*public function fetchSelectedClintName($id)
{
  $builder = $this->db->table('client');
  $builder->select('owner_name');
  //$builder->from('mytable');
  $builder->where("cnt_no = $id");
  $query = $builder->get()->getResult();
  return $query;
}*/

function fetchLastInsertedIDSub() 
{
    
      $builder = $this->db->table("sub_contractor");
      $builder->select('sub_no');
      $builder->orderBy('sub_no', 'DESC');
      $builder->limit(1);
      $data = $builder->get()->getResult();
    return $data;
}

}
