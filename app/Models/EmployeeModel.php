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
    'category_name',
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
    'passport_doc',
    'emirate_doc',
    'visa_doc',
    'driving_doc',
    'wrkstatus',
    'created_at',
    'updated_by'
   ];
   

  //  public function fetchCat()
  //  {
  //   $builder = $this->db->table("category");
  //   $builder->select('*','category_name');
  //   $data = $builder->get()->getResult();
  //   echo "<pre>";
  // //   print_r($data);exit;
  //  return $data;
  //  }

  /**get last id  */
function fetchLastInsertedIDEmp($selectedCategory) 
{
      $builder = $this->db->table("employees");
      $builder->select('emp_no');
      $builder->where("category = $selectedCategory");
      $builder->orderBy('emp_no', 'DESC');
      $builder->limit(1);
      $data = $builder->get()->getResult();
    return $data;
}


// public function activeEmp()
// 	{
// 	     $builder = $this->db->table("employees");
// 	    $builder->where('wrkstatus','active');
//       $builder->countAll();
//       $data = $builder->get()->getResult();
//     //   echo "<pre>";
//     //   print_r($data);exit;
//     return $data;
// 	}

}