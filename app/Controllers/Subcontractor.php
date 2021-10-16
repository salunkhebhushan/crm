<?php

namespace App\Controllers;
use App\Models\SubcontractorModel;
use App\Models\ClientModel;

class Subcontractor extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new SubcontractorModel();
        $this->model = new ClientModel();
   
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
    public function getclient()
    {
      
      print_r($data); exit;
    }

    public function sub_add()
	{	
        //  $cnt=new ClientModel();  
        // $data['sub_details']=$cnt->table("client")->findall();

        $data=array();  
		$SubcontractorModel = new SubcontractorModel();
        $dataArr['sub_details'] = $SubcontractorModel->getclientData();
        											     
		echo view('admin/subcontractor/subadd',$dataArr);
	}

   
    public function sub_insert()
    {
//      		
                $cnt=new SubcontractorModel();   											     
                $data=[
                    'sub_no'=>$this->request->getPost('subcontractorno'),
                    'cnt_id'=>$this->request->getPost('companyname'),
                     'sub_cell_no'=>$this->request->getPost('cellno'),
                    'sub_email'=>$this->request->getPost('subemail'),
                    'sub_contact_person'=>$this->request->getPost('sub_con_per_name'),
                    'sub_contact_cell_no'=>$this->request->getPost('Sub_con_per_cellno'),
                    'sub_contact_email'=>$this->request->getPost('sub_con_per_email'),   
                    'created_at'=>date('Y-m-d H:i:s'),
                ];
                
                $cnt->insert($data);
				//  print_r($data); 
            

			  $session = session();
			$this->session->setFlashdata('success','Sub Contractor Record insert succesfully');
            return redirect('Sub/sub_form');
                            
    }
    public function sub_form()
	{		
        $SubcontractorModel = new SubcontractorModel();    
        $data['emp']=$SubcontractorModel->fetch_cllientSubcontactor();   		
        // $data['emp']=$cnt->findall();
		echo view('admin/subcontractor/subshow',$data);
	}
  
    public function cnt_profile($id)
    {

        $cnt = new SubcontractorModel();
        $cnt_id=$cnt->where('sub_id',$id);
        //$emp_id=$emp->where('emp_id',$id);
        
        $data['cnt_profile']=$cnt->find($cnt_id);
        echo view('admin/client/sub_profile',$data);
    }
  //'picture'=>['required'=>'First Shop Name Required...'
// 'exact_length[10]'=>'Mobile nimber must be a  digit.'
    

    public function delete($id)
    {
        $cnt = new SubcontractorModel();
        $cnt->where('sub_id',$id)->delete();
        $session = session();
		$session->setFlashdata('success','Sub Contractor record delete succesfully');
        return redirect('Sub/sub_form');

    }
    public function edit($id)
    {
        $cnt = new SubcontractorModel();
        $data['row']=$cnt->where('sub_id',$id)->first();
        return view('admin/client/cntedit',$data);
    }
    public function update($id='')
    {
        
            
        $cnt=new SubcontractorModel();   
        $cnt->find($id);   											     
        $data=[
            'sub_no'=>$this->request->getPost('sub_no'),
            'cnt_id'=>$this->request->getPost('cnt_id'),
            'cnt_id'=>$this->request->getPost('cnt_id'),
             'sub_cell_no'=>$this->request->getPost('sub_cell_no'),
            'sub_email'=>$this->request->getPost('sub_email'),
            'sub_contact_person'=>$this->request->getPost('sub_contact_person'),
            'sub_contact_cell_no'=>$this->request->getPost('sub_contact_cell_no'),
            'sub_contact_email'=>$this->request->getPost('sub_contact_email'),   
            'updated_by'=>date('Y-m-d H:i:s'),
        ];
        
        $cnt->update($id,$data); 
        //  print_r($data); 
    
       
        //  print_r($data); 
            
				$session = session();
				$session->setFlashdata('success','Sub Contractor Data update succesfully');
            //    $data['action']=BASE('Usercontroller/update'.$id);
            return redirect('Sub/sub_form');
                 
    }


    /*Code Author : Bhushan G Salunkhe
Code Description: ajax call for selected dropdown to put their value in textbox   */
	public function selectedClient()
	{
		
	    if($_POST['post_id'])
      {
		$id=$_POST['post_id'];

        $SubcontractorModel = new SubcontractorModel();    
        $dataArr['ajaxClientDetails'] = $SubcontractorModel->getSubcontractor($id);
		echo json_encode($dataArr);
	
	  }
      
	}



}

