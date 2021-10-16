<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class EmployeeModel extends Model{

    protected $table='employees';
    protected $primaryKey ='emp_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  																													

    protected $allowedFields=['first_name',
    'last_name',
    'emp_no',
    'designation',
    'email',
    'mobile',
    'project',
    'category',
    'doj',
    'father_name',
    'nationality',
    'homeno',
    'relative_name',
    'relative_no',
    'home_address',
    'basic_salary',
    'accommodation',
    'transport',
    'salary_per_day',
    'food',
    'allowances',
    'total',
    'passport_no',
    'pissue_date',
    'pexpire_date',
    'emirate_id',
    'eissue_date',
    'eexpire_date',
    'visa_no',
    'vissue_date',
    'vexpire_date',
    'driving_licence',
    'didate',
    'dedate',
    'passport_img',
    'img_name',
    'img_type',
    'created_at',
    'updated_by'
   ];
   
   public function getlastinsetedid()
   {
     $builder = $this->db->table("employees");
     $builder->select('emp_id');
     $data = $builder->get()->getResult();
     echo $this->db->insertID();
   //echo "<pre>";
   //print_r($data);exit;
   
     return $data;
   }

}