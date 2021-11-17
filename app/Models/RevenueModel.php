<?php
/*Code Author : Bhushan G Salunkhe
Code Date: 12/10/2021 */
namespace App\Models;
$this->db = \Config\Database::connect();
use CodeIgniter\Model;

class RevenueModel extends Model
{
	protected $table='crm_revnue';
    protected $primaryKey ='rev_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
  //  protected $useSoftDeletes = true;

  																													

    protected $allowedFields=['rev_payment_date',
    'rev_voucher_no',
    'rev_invoice_no',
    'rev_project_code',
    'rev_clint_id',
    'rev_project_title',
    'rev_cash_amt',
    'rev_cheque_amt',
    'rev_cheque_no',
    'rev_cheque_statu',
    'rev_cheque_due_date',
    'rev_bank_name',
    'rev_invoice_amount',
    'rev_total_paid',
    'rev_balance_amount',
    'rev_sadqa',
    'rev_cheque_status',
    'rev_remarks',
    'rev_added_datetime',
    'rev_updated_datetime',
    
   ];
/*Code Author : Bhushan G Salunkhe
Code Discription: this method for get joing data of clint and project table*/
public function getProjectCodeData()
{
  $builder = $this->db->table("project as owner");
  $builder->select('owner.*, client.clint_company_name');
  $builder->join('client', 'owner.cnt_id = client.cnt_no');
  $data = $builder->get()->getResult();
//echo "<pre>";
//print_r($data);exit;
  return $data;
}
/*Code Author : Bhushan G Salunkhe
Code Discription: this method to call ajax for client details*/
public function ajaxcallClientDetails($id)
{
  $builder = $this->db->table("project");
  $builder->select('owner_company_name,project_title,cnt_id');
  $builder->where("project_no = $id");
  $data = $builder->get()->getResult();
//echo "<pre>";
//print_r($data);exit;
  return $data;
}

// this method for get joing data of clint and project table 
public function fetchData()
{
  $builder = $this->db->table("project as owner");
  $builder->select('owner.*, client.clint_company_name,crm_revnue.*');
  $builder->join('client', 'owner.cnt_id = client.cnt_no');
   $builder->join('crm_revnue', 'crm_revnue.rev_clint_id = client.cnt_no');
  // $builder->join('crm_revnue', 'crm_revnue._id = client.cnt_no');

  $data = $builder->get()->getResult();
  //  echo "<pre>";
  //\\ print_r($data);exit;
  return $data;
}


}
