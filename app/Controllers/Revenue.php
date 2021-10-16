<?php
/*Code Author : Bhushan G Salunkhe
 Code Date: 12/10/2021  */
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RevenueModel;

class Revenue extends BaseController
{
public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
}

function __construct(){
                    
	helper(['url', 'form']);          
 }

	public function index()
	{
		return view('main_content');
	}

/*Code Author : Bhushan G Salunkhe
Code Description: this code  releted load the revenue form  */
	public function rven_add()
	{	 
		$RevenueModel = new RevenueModel();

        // Add operation
        $dataArr['projectCode'] = $RevenueModel->getProjectCodeData();
		echo view('admin/revnue/revnue_add', $dataArr);
	}
/*Code Author : Bhushan G Salunkhe
Code Description: this code  releted to submit form revenue  */
	public function formValidation() {    
  
        $input = $this->validate([
            'pdate' => 'required',
            'paymentvoucherno' => 'required',
			'invoceno' => 'required',
            'projectCode' => 'required',
			'companyname' => 'required',
            'projecttitle' => 'required',
			'cashamt' => 'required',
            'chequeamt' => 'required',
			'cheqDueDate' => 'required',
            'invamt' => 'required',
			'bankName' => 'required',
            'totalpaid' => 'required',
            'balanceAmt' => 'required',
			'chequnumb' => 'required'
		],
		[ 
			'pdate'=>['required'=>'Please Select Date...'],
			'paymentvoucherno'=>['required'=>'Enter Voucher Number'],
			'invoceno'=>['required'=>'Employeeno  Is Required .'],
			'projectCode'=>['required'=>'Project Name Is Required...'],
			'companyname'=>['required'=>'Enter Company Name...'],
			'projecttitle'=>['required'=>'Enter Project Title...'],
			'cashamt'=>['required'=>' Enter Cash Amount ...'],
			'chequeamt'=>['required'=>'Enter Cheque Amount...'],
			'invamt'=>['required'=>'Enter Invoice Amount...'],
			'bankName'=>['required'=>'Enter Bank Name...'],
			'totalpaid'=>['required'=>'Enter Total Paid Amount...'],
			'balanceAmt'=>['required'=>'Balance Amount...'],
			'chequnumb'=>['required'=>'Enter Cheque Number...'],
				 ]);
      $formModel = new RevenueModel();
 
        if (!$input) {
			$errors_msg['error']=$this->validation->getErrors();
			return view('admin/revnue/revnue_add',$errors_msg);

		
        }
		
		 else {
            $formModel->save([
                'rev_payment_date' => $this->request->getVar('pdate'),
                'rev_voucher_no'  => $this->request->getVar('paymentvoucherno'),
                'rev_invoice_no'  => $this->request->getVar('invoceno'),
				'rev_project_code' => $this->request->getVar('projectCode'),
                'rev_clint_id'  => $this->request->getVar('companyname'),
                'rev_project_title'  => $this->request->getVar('projecttitle'),
				'rev_cash_amt' => $this->request->getVar('cashamt'),
                'rev_cheque_amt'  => $this->request->getVar('chequeamt'),
                'rev_cheque_no'  => $this->request->getVar('chequnumb'),
				'rev_cheque_statu' => $this->request->getVar('chequestatus'),
                'rev_cheque_due_date'  => $this->request->getVar('cheqDueDate'),
                'rev_bank_name'  => $this->request->getVar('bankName'),
				'rev_invoice_amount' => $this->request->getVar('invamt'),
                'rev_total_paid'  => $this->request->getVar('totalpaid'),
                'rev_balance_amount'  => $this->request->getVar('balanceAmt'),
				'rev_sadqa'  => $this->request->getVar('sadqa'),
				'rev_remarks'  => $this->request->getVar('remark'),
				'rev_cheque_status'  => $this->request->getVar('chequeStatus'),
				'rev_added_datetime'  => date('Y-m-d H:i:s'),
				
            ]);          

			$session = session();
			$this->session->setFlashdata('success','Revenue Data insert succesfully');
            return $this->response->redirect(site_url('Revenue/rven_add'));

        }
		
		
    }
/*Code Author : Bhushan G Salunkhe
Code Description: ajax call for selected dropdown to put their value in textbox   */
	public function selectedProjectCode()
	{
		
	    if($_POST['post_id'])
      {
		$id=$_POST['post_id'];
		$RevenuModel = new RevenueModel();
        $dataArr['ajaxClientDetails'] = $RevenuModel->ajaxcallClientDetails($id);
		echo json_encode($dataArr);
		/*print_r($RevenuModel->getLastQuery()->getQuery()); print query
		print_r( $dataArr['ajaxClientDetails']);exit;*/
	  }
	}

	



}
