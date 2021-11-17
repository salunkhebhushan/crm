<?php

namespace App\Controllers;
use App\Models\EquipmentModel;

class Equipment extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new EquipmentModel();
   
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
	
    public function te_add()
	{		
		echo view('admin/equipment/teadd');
	}

   
    public function te_insert()
    {
        // $validation_msg=$this->validate([
        //     'peid'=>'required',
        //      'petype'=>'required',
        //      'pemodel'=>'required',
        // ],
        // [
        //     'peid'=>['required'=>'PE ID Number Is Required...'],
        //      'petype'=>['required'=>'PE Type  Is Required.'],
        //      'pemodel'=>['required'=>'PE TYpe Is Required.'],
            
        // ]);
        // if(!$validation_msg)
        // {
        //     $errors_msg['error']=$this->validation->getErrors();
        //     return view('admin/equipment/teadd',$errors_msg);

        // }else {
     
                $te=new EquipmentModel();   											     
                $data=[
                    'pe_id'=>$this->request->getPost('peid'),
                    'pe_type'=>$this->request->getPost('petype'),
                     'pe_model'=>$this->request->getPost('pemodel'),
                    'status'=>$this->request->getPost('s'),
                    'per_day_charge'=>$this->request->getPost('charge'),
                    'maintanence'=>$this->request->getPost('maintinace'),
                    'registration_expiry'=>$this->request->getPost('expiry'),   
                    'created_at'=>date('Y-m-d H:i:s'),
                ];
                
                $te->insert($data);
                       

			  $session = session();
			$this->session->setFlashdata('success','Equipment Record insert succesfully');
            return redirect('Te/te_form');
                            
    }
    public function te_form()
	{		
        $te=new EquipmentModel();   											        		
        $data['pe']=$te->findall();
		echo view('admin/equipment/teadd',$data);
	}
    
    // public function cnt_profile($id)
    // {

    //     $cnt = new ClientModel();
    //     $cnt_id=$cnt->where('cnt_id',$id);
    //     //$emp_id=$emp->where('emp_id',$id);
        
    //     $data['cnt_profile']=$cnt->find($cnt_id);
    //     echo view('admin/client/cnt_profile',$data);
    // }


    public function delete($id)
    {
        $te=new EquipmentModel();   											        		
        $te->where('id',$id)->delete();
        $session = session();
		$session->setFlashdata('success','Client record delete succesfully');
        return redirect('Te/te_form');
    }
    public function edit($id)
    {
        $te=new EquipmentModel();   											        		
        $data['row']=$te->where('id',$id)->first();
        return view('admin/equipment/teadd',$data);
    }
       
    public function update()
    {
        
        if(isset($_POST['update1']))
        {
        $te=new EquipmentModel();
        $id=$te->where('id',$_POST['id'])->first();
        $te->find($id);   											     
        $data=[
            'pe_id'=>$this->request->getPost('peid'),
            'pe_type'=>$this->request->getPost('petype'),
             'pe_model'=>$this->request->getPost('pemodel'),
            'status'=>$this->request->getPost('s'),
            'per_day_charge'=>$this->request->getPost('charge'),
            'maintanence'=>$this->request->getPost('maintinace'),
            'registration_expiry'=>$this->request->getPost('expiry'),   
            //   'company_address'=>$this->request->getPost('company_address'),
            'updated_by'=>date('Y-m-d H:i:s'),
        ];
        
        $te->update($id,$data); 
        //  print_r($data); 
    
           
				$session = session();
				$session->setFlashdata('success','Equipment Data update succesfully');
                return redirect('Te/te_form');
        }          
    }



}

