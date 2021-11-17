<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class AttendanceModel extends Model{

    protected $table='attendance';
    protected $primaryKey ='att_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  																													
  					
    protected $allowedFields=[
    'att_emp_id',  
    'att_hourse',
    'att_ot',
    'att_project_code',
    'att_date',
    'created_at',
    'updated_by'
   ];
   

/**get last id  */
   function fetchEmp() 
    {  
          $builder = $this->db->table("employees");
          $builder->select('first_name,last_name,emp_no,designation');  
          $data = $builder->get()->getResult();
        //   echo "<pre>";
        //   print_r($data);exit;
        return $data;
    }
    function fetchProjectno() 
    {  
          $builder = $this->db->table("project");
          $builder->select('project_no');  
          $data = $builder->get()->getResult();
        //echo "<pre>";
        //print_r($data);exit;
        return $data;
    }

     public function ajaxEmpCode($empcode)
     { 
      $builder = $this->db->table("employees");
      $builder->select('emp_no,first_name,last_name,designation');
      $builder->where("emp_no = ".$empcode."");
      $data = $builder->get()->getResult();
    
       return $data;
    }


    function getMonthData($frmdate,$todate) 
    {  
      $usersTable = $this->db->table("attendance");
      //$usersTable->select('count(att_id) as total_users, Month(att_date) as month');
     // $usersTable->select('strftime("%Y-%m",att_date) FROM `attendance` WHERE strftime("%Y-%m",att_date) = "2021-10"');
      
     $usersTable->select('*');
     $usersTable->where('att_date BETWEEN "'. date('Y-m-d', strtotime($frmdate)). '" and "'. date('Y-m-d', strtotime($todate)).'"');
    // $usersTable->orderBy('att_date','ASC');
      $query = $usersTable->get();

         $this->db->getLastQuery();

        //echo "<pre>";
    return $query->getResult();
    }
    

}
