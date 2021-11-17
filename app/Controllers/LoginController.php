<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\EmployeeModel;
use App\Models\ClientModel;
use App\Models\ProjectModel;
use App\Models\SubcontractorModel;
class LoginController extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new LoginModel();
        //$this->gmodel = new GeneralModel();
	}
	public function index()
	{
		return view('admin/login');
	}
    public function login()
    {
        return view('admin/login');
    }
    public function login_check()
    {
        $login = new LoginModel();
        $result=$login->where('ad_email',$this->request->getPost('username'))->
        where('ad_password',md5($this->request->getPost('password')))->first();

       
        if($result != NULL)
        {
            $this->session->set('admin',$result['ad_name']);
         //   $this->session->setFlashdata('success','Admin Login Succesfully');
         
         
         //dasboard show
          $emp = new EmployeeModel();
		      $cnt = new ClientModel();
		       $pro = new ProjectModel();
		         $sub = new SubcontractorModel();
           $data['activeEmp']=$emp->where('wrkstatus','active')->countAllResults();
		    $data['allClient']=$cnt->table('client')->countAllResults();
		    $data['allproject']=$pro->table('project')->countAllResults();
		     $data['allsub_contractor']=$sub->table('sub_contractor')->countAllResults();
            return view('main_content',$data);

        }
        else
        {
            
            $this->session->setFlashdata('error','Login Failed ');
            return view('admin/login');
           // return redirect('home');

        }
    }
    public function logout()
    {
       
        $this->session->destroy();
        return view('admin/login');
    }
    
}
