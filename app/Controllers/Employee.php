<?php

namespace App\Controllers;
use App\Models\EmployeeModel;

class Employee extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new EmployeeModel();
        //$this->gmodel = new GeneralModel();
	}
	function __construct(){
        
        // $session = \Config\Services::session($config);
        // $session->start();              
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
		echo view('admin/employee/empadd');
	}

   
    public function emp_insert()
    {
       	
                $validation_msg=$this->validate([
                        'firstname'=>'required',
                        'lastname'=>'required',
                        'employeeno'=>'required',
                        // 'designation'=>'required',
                        // 'email'=>'required|valid_email',
                        // 'mobile'=>'required|numeric|exact_length[10]',
                        'project'=>'required',
                        // 'doj'=>'required',
                        // 'father'=>'required',
                        // 'nationality'=>'required',
                        // 'homeno'=>'required|numeric|exact_length[10]',
                        // 'relative'=>'required',
                        // 'relativeno'=>'required|numeric|exact_length[10]',
                        // 'address'=>'required',
                        'salary'=>'required',
                        // 'accommodation'=>'required',
                        // 'transport'=>'required',
                        // 'perday'=>'required',
                        // 'food'=>'required',
                        // 'total'=>'required',
                        'passportno'=>'required',
                        'idate'=>'required',
                        'edate'=>'required',
                        // 'emirateid'=>'required',
                        // 'e_idate'=>'required',
                        // 'e_edate'=>'required',
                        'visano'=>'required',
                        'visaidate'=>'required',
                        'visaedate'=>'required',                              
                        // 'driving'=>'required',
                        // 'didate'=>'required',
                        // 'dedate'=>'required',
                       //'passport_pic'=>'uploaded[passport_pic]|mime_in[passport_pic, image/png, image/jpg, image/jpeg]|max_size[passport_pic,1024]',

                        ],
                        [ 
                            'firstname'=>['required'=>'First Name Is Required...'],
                            'lastname'=>['required'=>'Last Name Is Required...'],
                            'employeeno'=>['required'=>'Employeeno  Is Required .'],
                            // 'designation'=>['required'=>'Designation Is Required.'],              
                            // 'email'=>['required'=>'Employee Email Is Required...','valid_email'=>'Employee email not contain a valid email address.'],
                            // 'mobile'=>['required'=>'Mobile Number Is Required.','numeric'=>'Mobile Number must be numeric.','exact_length[10]'=>'Mobile Number must be a 10 digit.'],
                            'project'=>['required'=>'Project Name Is Required...'],
                            // 'doj'=>['required'=>'Date Of Joining Is Required...'],
                            // 'father'=>['required'=>'Father Name Is Required...'],
                            // 'nationality'=>['required'=>'Nationality Is Required...'],
                            // 'homeno'=>['required'=>'Home Number Is Required.','numeric'=>'Home Number must be numeric.','exact_length[10]'=>'Home number must be a 10 digit.'],
                            // 'relative'=>['required'=>'Relative Name Is  Required...'],
                            // 'relativeno'=>['required'=>'Relative Number Is Required.','numeric'=>'Relative Number must be numeric.','exact_length[10]'=>'Relative Number must be a 10 digit.'],
                            // 'address'=>['required'=>'Address Is Required...'],
                            'salary'=>['required'=>'Salary Is Required...'],
                            // 'accommodation'=>['required'=>'Accommodation Is Required...'],
                            // 'transport'=>['required'=>'Transport Is Required...'],
                            // 'perday'=>['required'=>'Per Day Salary Is  Required...'],
                            // 'food'=>['required'=>'food  Field Is Required...'],
                            // 'total'=>['required'=>'total Field Is Required...'],
                            'passportno'=>['required'=>'Passport Number Is Required...'],
                            'idate'=>['required'=>' Issue Date Is Required...'],
                            'edate'=>['required'=>'Expire Date Is Required...'],
                            // 'emirateid'=>['required'=>'Emirate Id Is Required...'],
                            // 'e_idate'=>['required'=>'Issue Date Is Required...'],
                            // 'e_edate'=>['required'=>'Expire Date Is Required...'],
                            'visano'=>['required'=>'Visa No Is Required...'],
                            'visaidate'=>['required'=>'Issue Date Is Required...'],
                            'visaedate'=>['required'=>'Expire Date Is Required...'],
                            // 'driving'=>['required'=>'Driving Licence Is Required...'],
                            // 'didate'=>['required'=>'Issue Date Is Required...'],
                            // 'dedate'=>['required'=>'Expire Date Is Required...'],
                            // 'passport_pic'=>['required'=>'passport_pic Date Required...']
                                 ]);
                
                                   
                
                if(!$validation_msg)
                {
                    $errors_msg['error']=$this->validation->getErrors();
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
                 
                

            //     $emp=new EmployeeModel();


            //     $files=$this->request->getFiles();
 
           
            //  foreach($files('multiimg') as $img)
            //  {
            //     if ($img->isValid() && ! $img->hasMoved()) 
			// 	{
			// 	//	$imagename = $img->getRandomName();
            //         if($img->move('uploads/'))
            //         {
            //             echo "<p>".$img->getName()."is moved  sucessfully</p>";
            //         }
            //         else
            //         {
            //                 echo "<p>".$img->getErrorString()."</p>";
            //         }
			// 	}
            //  }      
             
        // if ($this->request->getFileMultiple('multiimg')) {
 
        //     foreach($this->request->getFileMultiple('multiimg') as $file)
        //     {   

        //        $file->move(WRITEPATH . 'uploads');




                $data=['first_name'=>$this->request->getPost('firstname'),
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
                    // 'img_name' => $img->getClientName(),
                    //  'img_type'  => $file->getClientMimeType(),
                    //'doc_upload'=>$this->request->getPost('picture'),
                    'created_at'=>date('Y-m-d H:i:s'),
                ];
                
                $emp->insert($data);
				//  print_r($data); 
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
        //$emp_id=$this->request->getPost('emp_id');
        //$emp_id=$emp->where('emp_id',$id);
        $emp_id=$emp->where('emp_id',$id);
        $data['emp_profile']=$emp->find($emp_id);
        echo view('admin/employee/emp_profile',$data);
    }
  //'picture'=>['required'=>'First Shop Name Required...'
// 'exact_length[10]'=>'Mobile nimber must be a  digit.'
    

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
        $data['row']=$emp->where('emp_id',$id)->first();
        return view('admin/employee/empedit',$data);
    }
    public function update($id='')
    {
        $validation_msg=$this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'employeeno'=>'required',
            // 'designation'=>'required',
            // 'email'=>'required|valid_email',
            // 'mobile'=>'required|numeric|exact_length[10]',
            'project'=>'required',
            // 'doj'=>'required',
            // 'father'=>'required',
            // 'nationality'=>'required',
            // 'homeno'=>'required|numeric|exact_length[10]',
            // 'relative'=>'required',
            // 'relativeno'=>'required|numeric|exact_length[10]',
            // 'address'=>'required',
            'salary'=>'required',
            // 'accommodation'=>'required',
            // 'transport'=>'required',
            // 'perday'=>'required',
            // 'food'=>'required',
            // 'total'=>'required',
            'passportno'=>'required',
            'idate'=>'required',
            'edate'=>'required',
            // 'emirateid'=>'required',
            // 'e_idate'=>'required',
            // 'e_edate'=>'required',
            'visano'=>'required',
            'visaidate'=>'required',
            'visaedate'=>'required',                              
            // 'driving'=>'required',
            // 'didate'=>'required',
            // 'dedate'=>'required',   
       //    'passport_pic'=>'uploaded[passport_pic]|max_size[passport_pic,1024]',

            ],
            [ 
                'firstname'=>['required'=>'First  Name Required...'],
                'lastname'=>['required'=>'Last Name is required.'],
                'employeeno'=>['required'=>'employeeno  is required .'],
                // 'designation'=>['required'=>'designation is required.'],              
                // 'email'=>['required'=>'employee Email is Required...','valid_email'=>'employee email not contain a valid email address.'],
                // 'mobile'=>['required'=>'Mobile Number is required.','numeric'=>'Mobile number must be numeric.','exact_length[10]'=>'Mobile number must be a 10 digit.'],
                'project'=>['required'=>'profile Shop Name Required...'],
                // 'doj'=>['required'=>'doj Required...'],
                // 'father'=>['required'=>'father Shop Name Required...'],
                // 'nationality'=>['required'=>'nationality Required...'],
                // 'homeno'=>['required'=>'Home Number is required.','numeric'=>'Home number must be numeric.','exact_length[10]'=>'Home number must be a 10 digit.'],
                // 'relative'=>['required'=>'relative Name Required...'],
                // 'relativeno'=>['required'=>'Relative Number is required.','numeric'=>'Relative number must be numeric.','exact_length[10]'=>'Relative number must be a 10 digit.'],
                // 'address'=>['required'=>'address Required...'],
                'salary'=>['required'=>'salary Name Required...'],
                // 'accommodation'=>['required'=>'accommodation Required...'],
                // 'transport'=>['required'=>'First Shop Name Required...'],
                // 'perday'=>['required'=>'transport Name Required...'],
                // 'food'=>['required'=>'food Required...'],
                // 'total'=>['required'=>'total Name Required...'],
                'passportno'=>['required'=>'passport Number Required...'],
                'idate'=>['required'=>' Issue Date Required...'],
                'edate'=>['required'=>'Expire Date Required...'],
                // 'emirateid'=>['required'=>'Emirate Id Required...'],
                // 'e_idate'=>['required'=>'Issue Date Required...'],
                // 'e_edate'=>['required'=>'Expire Date Required...'],
                'visano'=>['required'=>'Visa No Required...'],
                'visaidate'=>['required'=>'Issue Date Required...'],
                'visaedate'=>['required'=>'Expire Date Required...'],
                // 'driving'=>['required'=>'Driving Licence Required...'],
                // 'didate'=>['required'=>'Issue Date Required...'],
                // 'dedate'=>['required'=>'Expire Date Required...'],
                // 'passport_pic'=>['required'=>'passport_pic Date Required...']
                     ]);
    
                       
    
    if(!$validation_msg)
    {
        $errors_msg['error']=$this->validation->getErrors();
        return view('admin/employee/empadd',$errors_msg);
        
    }else {
        
    
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
                    //'doc_upload'=>$this->request->getPost('picture'),
                    'updated_by'=>date('Y-m-d H:i:s'),

                ];
                $emp->update($id,$data);
                
            }

				$session = session();
				$session->setFlashdata('success','Employees Data update succesfully');
            //    $data['action']=BASE('Usercontroller/update'.$id);
                   return redirect('Employees/emp_form');
                   
    }



}

