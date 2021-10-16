<?php

namespace App\Controllers;
use App\Models\SubactivitiesModel;

class Subactivities extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new SubactivitiesModel();
   
	}
	function __construct(){
                    
        helper(['url', 'form']);          
     }

	public function index()
	{
	//	echo view('admin/add_user_form');
	
   	     //$session=session();
		// if($session->has('admin'))
		// {
			
		// 
        
        return view('main_content');
		

	} 
	
    public function activities_add()
	{		
		echo view('admin/subcontractor/addactivities');
	}

   
    public function activities_insert()
    {
                    
                $cnt=new SubactivitiesModel();   											     
                $data=[
                    
                    'sub_id'=>$this->request->getPost('clientno'),
                    'roba'=>$this->request->getPost('companyname'),
                     'tile'=>$this->request->getPost('ownername'),
                    'marble'=>$this->request->getPost('ownercellno'),
                    'interlock'=>$this->request->getPost('owneremail'),
                    'company_address'=>$this->request->getPost('company_address'),
                    'created_at'=>date('Y-m-d H:i:s'),
                ];
                
                $cnt->insert($data);
				//  print_r($data); 

			  $session = session();
			$this->session->setFlashdata('success','Clent Record insert succesfully');
            return redirect('Activities/activities_form');
                            
    }
    public function activities_form()
	{		
        $cnt=new SubactivitiesModel();   		
        $data['emp']=$cnt->findall();
		echo view('admin/client/cntshow',$data);
		
	}
    public function activities_profile($id)
    {

        $cnt = new SubactivitiesModel();
        $atv_id=$cnt->where('atv_id',$id);
        //$emp_id=$emp->where('emp_id',$id);
        
        $data['cnt_profile']=$cnt->find($atv_id);
        echo view('admin/client/cnt_profile',$data);
    }
  //'picture'=>['required'=>'First Shop Name Required...'
// 'exact_length[10]'=>'Mobile nimber must be a  digit.'
    

    public function delete($id)
    {
        $cnt = new SubactivitiesModel();
        $cnt->where('atv_id',$id)->delete();
        $session = session();
		$session->setFlashdata('success','Client record delete succesfully');
		return redirect('Cnt/cnt_form');
	
    }
    public function edit($id)
    {
        $cnt = new SubactivitiesModel();
        $data['row']=$cnt->where('atv_id',$id)->first();
        return view('admin/client/cntedit',$data);
    }
    public function update($id='')
    {
        
        // $validation_msg=$this->validate([
        //     'clientno'=>'required',
        //     'companyname'=>'required',
        //     // 'ownername'=>'required',
        //     // 'ownercellno'=>'required|numeric|exact_length[10]',
        //     // 'owneremail'=>'required|valid_email',
        //     // 'con_per_name'=>'required',
        //     // 'con_per_cellno'=>'required|numeric|exact_length[10]',
        //     // 'con_per_email'=>'required|valid_email',
        //     // 'officeno'=>'required|numeric|exact_length[10]',
        //     // 'office_address'=>'required',
        //     // 'office_email'=>'required|valid_email',
        //     // 'vatno'=>'required',
        //     // 'company_address'=>'required'
        // ],
        // [
        //     'clientno'=>['required'=>'Client Number is Required...'],
        //     'companyname'=>['required'=>'Company Name is required.'],
        //     // 'ownername'=>['required'=>'Company Owner Name is  Required...'],
        //     // 'ownercellno'=>['required'=>'Owner Cell Number is required.','numeric'=>'Cell number must be numeric.','exact_length[10]'=>'Cell number must be a 10 digit.'],
        //     // 'owneremail'=>['required'=>'Owner Email is Required...','valid_email'=>'owner email not contain a valid email address.'],
        //     // 'con_per_name'=>['required'=>'Contact Person Name is required.'],
        //     // 'con_per_cellno'=>['required'=>'Contact Person Cell Number is required.','numeric'=>'Cell number must be numeric.','exact_length[10]'=>'Contact Person Cell number must be a 10 digit.'],
        //     // 'con_per_email'=>['required'=>'Contact Person Email is Required...','valid_email'=>'Contact Person email not contain a valid email address.'],
        //     // 'officeno'=>['required'=>'Office Number is required.','numeric'=>'Office Number must be numeric.','exact_length[10]'=>'Office Number must be a 10 digit.'],
        //     // 'office_address'=>['required'=>'Office Address is required.'],
        //     // 'office_email'=>['required'=>'Office Email is Required...','valid_email'=>'Office email not contain a valid email address.'],
        //     // 'vatno'=>['required'=>'VAT NO is required.'],
        //     // 'company_address'=>['required'=>'Company Address is required.'],


            
        // ]);
        // if(!$validation_msg)
        // {
        //     $errors_msg['error']=$this->validation->getErrors();
        //     return view('admin/client/cntedit',$errors_msg);

        // }else {
            
        $cnt=new SubactivitiesModel();   
        $cnt->find($id);   											     
        $data=[
            'cnt_no'=>$this->request->getPost('clientno'),
            'owner_company_name'=>$this->request->getPost('companyname'),
             'owner_name'=>$this->request->getPost('ownername'),
            'owner_cellno'=>$this->request->getPost('ownercellno'),
            'owner_email'=>$this->request->getPost('owneremail'),
            'contact_person_name'=>$this->request->getPost('con_per_name'),
            'contact_person_cellno'=>$this->request->getPost('con_per_cellno'),   
            'contact_person_email'=>$this->request->getPost('con_per_email'),
            'office_no'=>$this->request->getPost('officeno'),
            'office_address'=>$this->request->getPost('office_address'),
            'office_email'=>$this->request->getPost('office_email'),
            'vatno'=>$this->request->getPost('vatno'),
            'company_address'=>$this->request->getPost('company_address'),
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        
        $cnt->update($id,$data); 
        //  print_r($data); 
    
       
        //  print_r($data); 
            
				$session = session();
				$session->setFlashdata('success','Clent Data update succesfully');
            //    $data['action']=BASE('Usercontroller/update'.$id);
                   return redirect('Cnt/cnt_form');
                 
    }



}

