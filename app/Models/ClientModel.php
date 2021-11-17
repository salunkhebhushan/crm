<?php

namespace App\Models;
$this->db = \Config\Database::connect();

use CodeIgniter\Model;

class ClientModel extends Model{

    protected $table='client';
    protected $primaryKey ='cnt_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  																													

    protected $allowedFields=[
    'cnt_no',  
    'clint_company_name',
    'owner_name',
    'owner_cellno',
    'owner_email',
    'contact_person_name',
    'contact_person_cellno',
    'contact_person_email',
    'office_no',
    'office_address',
    'office_email',
    'vatno',
    'company_address',
    'created_at',
    'updated_by'
   ];
   

/**get last id  */
   function fetchLastIsertedID() 
    {
        
          $builder = $this->db->table("client");
          $builder->select('cnt_no');
          $builder->orderBy('cnt_no', 'DESC');
          $builder->limit(1);
          $data = $builder->get()->getResult();
        return $data;
    }

public function allClients()
	{
	     $builder = $this->db->table("client");
      $builder->countAll();
      $data = $builder->get()->getResult();
       echo "<pre>";
       print_r($data);exit;
    return $data;
	}


}
