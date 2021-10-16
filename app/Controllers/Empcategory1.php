<?php

namespace App\Controllers;
use App\Models\CategoryModel1;

class Empcategory1 extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new CategoryModel1();
   
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
	
    public function category_add()
	{		
		echo view('admin/employee/empcat');
	}

   
    public function category_insert()
    {
                    
                $emp=new CategoryModel1();   											     
                $data=[
                    'category_name'=>$this->request->getPost('category'),
                    'created_at'=>date('Y-m-d H:i:s'),
                ];
                
                $emp->insert($data);
				//  print_r($data); 
            

			  $session = session();
			$this->session->setFlashdata('success','Eployee Category Record insert succesfully');
                 
            return redirect('Category/category_form');


    }
    public function category_form()
	{		
        $emp=new CategoryModel1();   											     
        $data['empcategory']=$emp->findall();
        echo view('admin/employee/empcat',$data);

	}
    

    public function delete($id)
    {
        $emp=new CategoryModel1();   											     
        $emp->where('ctg_id',$id)->delete();
        $session = session();
		$session->setFlashdata('success','Employee Category record delete succesfully');
		return redirect('Category/category_form');
	
    }
    public function edit($id)
    {
        $cnt = new CategoryModel1();
        $data['row']=$cnt->where('cnt_id',$id)->first();
        return view('admin/client/cntedit',$data);
    }
    public function update($id='')
    {
        
            
        $cnt=new CategoryModel1();   
        $cnt->find($id);   											     
        $data=[
            'category_name'=>$this->request->getPost('category'),
            'updated_by'=>date('Y-m-d H:i:s'),
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

