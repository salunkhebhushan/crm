<?php

namespace App\Controllers;
use App\Models\EmployeeModel;
use App\Models\CategoryModel1;

class Employee extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new EmployeeModel();
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
	
    public function emp_add()
	{	
        
        $data = array();
        $category = new CategoryModel1();

        $data['categoryList']=$category->table("category")->findall();
        // print_r($data);exit;
               	
		echo view('admin/employee/empadd',$data);
	}

   
    public function emp_insert()
    {
          
                $validation_msg=$this->validate([
                        'firstname'=>'required',
                        'lastname'=>'required',
                        'employeeno'=>'required',
                        'project'=>'required',
                        'salary'=>'required',
                        'passportno'=>'required',
                        'idate'=>'required',
                        'edate'=>'required',
                        'visano'=>'required',
                        'visaidate'=>'required',
                        'visaedate'=>'required',                              

                        ],
                        [ 
                            'firstname'=>['required'=>'First Name Is Required...'],
                            'lastname'=>['required'=>'Last Name Is Required...'],
                            'employeeno'=>['required'=>'Employeeno  Is Required .'],
                            'project'=>['required'=>'Project Name Is Required...'],
                            'salary'=>['required'=>'Salary Is Required...'],
                            'passportno'=>['required'=>'Passport Number Is Required...'],
                            'idate'=>['required'=>' Issue Date Is Required...'],
                            'edate'=>['required'=>'Expire Date Is Required...'],
                            'visano'=>['required'=>'Visa No Is Required...'],
                            'visaidate'=>['required'=>'Issue Date Is Required...'],
                            'visaedate'=>['required'=>'Expire Date Is Required...'],
                                 ]);
                
                           
                              
                              
                if(!$validation_msg)
                {
                    $errors_msg['error']=$this->validation->getErrors();
                    $data = array();
                   $category = new CategoryModel1();
                    $errors_msg['categoryList']=$category->table("category")->findall();
                    return view('admin/employee/empadd',$errors_msg);
                    
                }
                else 
                {
                
                    $emp=new EmployeeModel();
                	$file = $this->request->getFile('passport_pic');
			
                    if ($file->isValid() && ! $file->hasMoved()) 
				{
					$imagename = $file->getRandomName();
                    $file->move('uploads/', $imagename);
				}	else
                {
                    $imagename= $this->request->getFile('passport_pic');
                }										
                 
                
                if(isset($_POST["submit"]))
                    {
                        // echo "<pre>";public\uploads\1632733675_66245e48cf7a189763ed.png
                        // print_r($_FILES["files"]); exit;
			 	        foreach($_FILES["upload_imgs"]["name"] as $key=>$val){
                             $rand=rand('11111111','99999999');
                             $file1=$rand.'_'.$val;
                        move_uploaded_file($_FILES["upload_imgs"]["tmp_name"][$key],"imguploads/".$file1);        
                    }   
                }
            
			// if(isset($_POST["submit"]))
			// {
			// 	$errors = array();
			// 	$uploadedFiles = array();
			// 	$extension = array("jpeg","jpg","png","gif");
			// 	$bytes = 1024;
			// 	$KB = 1024;
			// 	$totalBytes = $bytes * $KB;
			// 	 $UploadFolder ="UploadFolder";
				
			// 	$counter = 0;
				
			// 	foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
			// 		$temp = $_FILES["files"]["tmp_name"][$key];
			// 		$name = $_FILES["files"]["name"][$key];
					
			// 		if(empty($temp))
			// 		{
			// 			break;
			// 		}
					
			// 		$counter++;
			// 		$UploadOk = true;
					
			// 		if($_FILES["files"]["size"][$key] > $totalBytes)
			// 		{
			// 			$UploadOk = false;
			// 			array_push($errors, $name." file size is larger than the 1 MB.");
			// 		}
					
			// 		$ext = pathinfo($name, PATHINFO_EXTENSION);
			// 		if(in_array($ext, $extension) == false){
			// 			$UploadOk = false;
			// 			array_push($errors, $name." is invalid file type.");
			// 		}
					
			// 		if(file_exists($UploadFolder."/".$name) == true){
			// 			$UploadOk = false;
			// 			array_push($errors, $name." file is already exist.");
			// 		}
					
			// 		if($UploadOk == true){
            //             if (!file_exists(getcwd() . $UploadFolder)) {
            //                 mkdir(getcwd() . $UploadFolder, 0777, true);
            //             }
            //             // print_r($temp); exit;
			// 			// move_uploaded_file($temp,$UploadFolder);
			// 		    move_uploaded_file($temp,$UploadFolder);
                        
            //             array_push($uploadedFiles, $name);
			// 		}
			// 	}
                
			// 	if($counter>0){
			// 		if(count($errors)>0)
			// 		{
			// 			echo "<b>Errors:</b>";
			// 			echo "<br/><ul>";
			// 			foreach($errors as $error)
			// 			{
			// 				echo "<li>".$error."</li>";
			// 			}
			// 			echo "</ul><br/>";
			// 		}
					
			// 		if(count($uploadedFiles)>0){
			// 			echo "<b>Uploaded Files:</b>";
			// 			echo "<br/><ul>";
			// 			foreach($uploadedFiles as $fileName)
			// 			{
			// 				echo "<li>".$fileName."</li>";
			// 			}
			// 			echo "</ul><br/>";
						
			// 			echo count($uploadedFiles)." file(s) are successfully uploaded.";
			// 		}								
			// 	}
			// 	else{
			// 		echo "Please, Select file(s) to upload.";
			// 	}
			// }

            //print_r($uploadedFiles);
            
                $data=['first_name'=>$this->request->getPost('firstname'),
                    'last_name'=>$this->request->getPost('lastname'),
                    'emp_no'=>$this->request->getPost('employeeno'),   
                     'designation'=>$this->request->getPost('designation'),
                    'email'=>$this->request->getPost('email'),
                    'mobile'=>$this->request->getPost('mobile'),
                    'project'=>$this->request->getPost('project'),
                    'category'=>$this->request->getPost('category'),
                    'doj'=>$this->request->getPost('doj'),   
                    'father_name'=>$this->request->getPost('father'),
                    'nationality'=>$this->request->getPost('nationality'),
                    'homeno'=>$this->request->getPost('homeno'),
                    'relative_name'=>$this->request->getPost('relative'),
                    'relative_no'=>$this->request->getPost('relativeno'),
                    'home_address'=>$this->request->getPost('address'),
                    'basic_salary'=>$this->request->getPost('salary'),
                    'accommodation'=>$this->request->getPost('accommodation'),
                    'transport'=>$this->request->getPost('transport'),
                    'salary_per_day'=>$this->request->getPost('perday'),
                    'food'=>$this->request->getPost('food'),
                    'total'=>$this->request->getPost('total'),
                    'allowances'=>$this->request->getPost('allowances'),
                    'passport_no'=>$this->request->getPost('passportno'),
                    'pissue_date'=>$this->request->getPost('idate'),
                    'pexpire_date'=>$this->request->getPost('edate'),
                    'emirate_id'=>$this->request->getPost('emirateid'),                 
                    'eissue_date'=>$this->request->getPost('e_idate'),
                    'eexpire_date'=>$this->request->getPost('e_edate'),
                    'visa_no'=>$this->request->getPost('visano'),    
                    'vissue_date'=>$this->request->getPost('visaidate'),
                    'vexpire_date'=>$this->request->getPost('visaedate'),
                    'driving_licence'=>$this->request->getPost('driving'),    
                    'didate'=>$this->request->getPost('didate'),
                    'dedate'=>$this->request->getPost('dedate'),
                    'passport_img'=>$imagename,
                     'img_name' =>$file1, 
                    //  'img_type'  =>$temp,

                    //   'img_type'  =>$this->request->getPost('tmp_name'),
                    //  'img_type'  => $file->getClientMimeType(),tmp_name
                    //'doc_upload'=>$this->request->getPost('picture'),
                    'created_at'=>date('Y-m-d H:i:s'),
                ];
                
                $emp->insert($data);
				//  print_r($data); 
                /*$getLastInsertedId=new EmployeeModel();    
                $data['getLastInsertedID'] = $getLastInsertedId->getlastinsetedid();
                if (!empty($data['getLastInsertedID']))
                 {
                 
               echo "<pre>";
           //   echo $getLastInsertedId->insertID();
                print_r(  $data['getLastInsertedID']);
         
                }*/
            }
			  $session = session();
			$this->session->setFlashdata('success','Employess Data insert succesfully');
            return redirect('Employees/emp_form');
               
                
    }
    public function emp_form()
	{		
        $emp = new EmployeeModel();
        $data['emp']=$emp->findall();
		echo view('admin/employee/empshow',$data);
		
	}
    public function emp_profile($id)
    {

        $emp = new EmployeeModel();
        //$emp_id=$emp->where('emp_id',$id);
        $emp_id=$emp->where('emp_id',$id);
        $data['emp_profile']=$emp->find($emp_id);
        echo view('admin/employee/emp_profile',$data);
    }
    

    public function delete($id)
    {
        $emp = new EmployeeModel();
        $emp->where('emp_id',$id)->delete();
        $session = session();
		$session->setFlashdata('success','users record delete succesfully');
		return redirect('Employees/emp_form');
	
    }
    public function edit($id)
    {
        $emp = new EmployeeModel();
        // $p['item']=$emp->product_update($id);
        $data['row']=$emp->where('emp_id',$id)->first();
        $category = new CategoryModel1();
        $data['categoryList']=$category->table("category")->findall();
        return view('admin/employee/empedit',$data);
    }
    public function update($id='')
    {
        
    
                $emp = new EmployeeModel();
          
                $prod_item= $emp->find($id);
                $old_img_name=$prod_item['passport_img'];
        
                $file = $this->request->getFile('passport_pic');
        
                if ($file->isValid() && ! $file->hasMoved()) 
                {
                        if(file_exists("uploads/".$old_img_name))
                        {
                            unlink("uploads/".$old_img_name);
                        }
                            $imagename = $file->getRandomName();
                            $file->move('uploads/', $imagename);
                }else
                {
                    $imagename=$old_img_name;
                }



				$emp->find($id);


                $data=[
                    'first_name'=>$this->request->getPost('firstname'),
                    'last_name'=>$this->request->getPost('lastname'),
                    'emp_no'=>$this->request->getPost('employeeno'),   
                     'designation'=>$this->request->getPost('designation'),
                    'email'=>$this->request->getPost('email'),
                    'mobile'=>$this->request->getPost('mobile'),
                    'project'=>$this->request->getPost('project'),
                    'doj'=>$this->request->getPost('doj'),   
                    'father_name'=>$this->request->getPost('father'),
                    'nationality'=>$this->request->getPost('nationality'),
                    'homeno'=>$this->request->getPost('homeno'),
                    'relative_name'=>$this->request->getPost('relative'),
                    'relative_no'=>$this->request->getPost('relativeno'),
                    'home_address'=>$this->request->getPost('address'),
                    'basic_salary'=>$this->request->getPost('salary'),
                    'accommodation'=>$this->request->getPost('accommodation'),
                    'transport'=>$this->request->getPost('transport'),
                    'salary_per_day'=>$this->request->getPost('perday'),
                    'food'=>$this->request->getPost('food'),
                    'total'=>$this->request->getPost('total'),
                    'allowances'=>$this->request->getPost('allowances'),
                    'passport_no'=>$this->request->getPost('passportno'),
                    'pissue_date'=>$this->request->getPost('idate'),
                    'pexpire_date'=>$this->request->getPost('edate'),
                    'emirate_id'=>$this->request->getPost('emirateid'),                 
                    'eissue_date'=>$this->request->getPost('e_idate'),
                    'eexpire_date'=>$this->request->getPost('e_edate'),
                    'visa_no'=>$this->request->getPost('visano'),    
                    'vissue_date'=>$this->request->getPost('visaidate'),
                    'vexpire_date'=>$this->request->getPost('visaedate'),
                    'driving_licence'=>$this->request->getPost('driving'),    
                    'didate'=>$this->request->getPost('didate'),
                    'dedate'=>$this->request->getPost('dedate'),
                    'passport_img'=>$imagename,
                    // 'img_name' =>$file1, 

                    'updated_by'=>date('Y-m-d H:i:s'),


                ];
                $emp->update($id,$data);
                
            

				$session = session();
				$session->setFlashdata('success','Employees Data update succesfully');
            //    $data['action']=BASE('Usercontroller/update'.$id);
                   return redirect('Employees/emp_form');
                   
    }



}

