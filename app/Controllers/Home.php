<?php

namespace App\Controllers;
use App\Models\EmployeeModel;
use App\Models\ClientModel;
use App\Models\ProjectModel;
use App\Models\SubcontractorModel;
class Home extends BaseController
{
    	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new EmployeeModel();
      $this->model = new ClientModel();

	}
	function __construct(){
        helper(['url', 'form']); 
                   
     }
	public function index()
	{
	
		$session=session();
		if($session->has('admin'))
		{
		    
		      $emp = new EmployeeModel();
		      $cnt = new ClientModel();
		      $pro = new ProjectModel();
		      $sub = new SubcontractorModel();
		  //  $data['count11']=$emp->activeEmp();
		    $data['activeEmp']=$emp->where('wrkstatus','active')->countAllResults();
		    $data['allClient']=$cnt->table('client')->countAllResults();
		    $data['allproject']=$pro->table('project')->countAllResults();
		    $data['allsub_contractor']=$sub->table('sub_contractor')->countAllResults();
		    $data['emp']=$emp->where('pexpire_date < now() || eexpire_date < now() || vexpire_date < now() || dedate < now()')->findall();
		    //echo "<pre>";
		    //print_r($data['allClient']);exit;
			return view('main_content',$data);
		}
		else
		{
			return view('admin/login');
		}
		
	}
	public function count1()
	{
	      $emp = new EmployeeModel();
	    $emp->where('wrkstatus','active');
     $emp->get('employees');
    echo $emp->num_rows();
	}
	
}
