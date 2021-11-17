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
        
        return redirect('Employees');
		

	} 
	
    public function emp_add()
	{	
        
        $data = array();
        $category = new CategoryModel1();

        $data['categoryList']=$category->table("category")->orderBy('catergory_number', 'ASC')->findall();
        // print_r($data);exit;
               	
		echo view('admin/employee/empadd',$data);
	}

   
    public function emp_insert()
    {
        
       	
                $validation_msg=$this->validate([
                        'firstname'=>'required',
                        'lastname'=>'required',
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
                
                    $category = new CategoryModel1();
                    $selectedCategory = $this->request->getPost('category');
                    $data['categoryList']=$category->table("category")->orderBy('catergory_number', 'ASC')->where('catergory_number', $selectedCategory)->findall();
             
                  
                   $categoryName = $data['categoryList'][0]['category_name'];
                    $emp=new EmployeeModel();
                      if($data['categoryList'][0]['catergory_number'] == $selectedCategory)
                      {
                       
                   
                $data['lastID'] = $emp->fetchLastInsertedIDEmp($selectedCategory);
               // echo "<pre>";
        //  print_r($data['lastID'] );exit;
                $arrLastid = array();
                if(!empty($data['lastID']))
                {  
                    $j=0;
         
                 while($data['lastID'][0]->emp_no > $j)
                  {
                    $j =  $data['lastID'][0]->emp_no + 1 ;
                    $arrLastid['emp_no'] = $j ;
                    $j++;
                  }
                }else
                {  
                 $j= $selectedCategory;
                  $arrLastid['emp_no'] = $j ;
                }

            }

                   
                	$file = $this->request->getFile('passport_pic');
			
                    if ($file->isValid() && ! $file->hasMoved()) 
				{
					$imagename = $file->getRandomName();
                    $file->move('uploads/', $imagename);
				}	else
                {
                    $imagename= $this->request->getFile('passport_pic');
                }
                
                
                $documentFile = array("passport_doc" =>	$file = $this->request->getFile('passpordDoc'),
                                       "emirate_doc"=>	$file = $this->request->getFile('EmirateDoc'),
                                      "visa_doc"=>$file = $this->request->getFile('VisaDoc'),
                                      "	driving_doc"=>	$file = $this->request->getFile('drivingDoc'));
			$imagename1 = array();
       
            foreach($documentFile as $files){
                if ($files->isValid() && ! $files->hasMoved()) 
            {
                $imagename1 = $files->getName();
                
                $files->move('document_img/',$imagename1);
            }	else
            { 
             $imagename1 = $files->getName();
           
            }
         //     $getFile[] = $imagename;
        }
        
        
                 /**Multiple File Upload Code */
                $fileArray = array();
                if(isset($_POST["submit"]))
                    { 
                       $val = $_FILES["upload_imgs"]["name"];
                   
			 	     
                             $rand=rand('111','999');
                             $file1=$rand.'_'.$val;
                           $fileArray[] = $file1;
                    move_uploaded_file($_FILES["upload_imgs"]["tmp_name"],"imguploads/".$val);      
                        
                    $multiFilePath = $val;
                  
                      
                }
            
                $passport = $this->request->getFile('passpordDoc');
                $emirate = $this->request->getFile('EmirateDoc');
                $visa = $this->request->getFile('VisaDoc');
                $driving = $this->request->getFile('drivingDoc');
                
                $data=['first_name'=>$this->request->getPost('firstname'),
                    'last_name'=>$this->request->getPost('lastname'),
                    'emp_no'=>$arrLastid['emp_no'],   
                     'designation'=>$this->request->getPost('designation'),
                    'email'=>$this->request->getPost('email'),
                    'mobile'=>$this->request->getPost('mobile'),
                    'category'=>$this->request->getPost('category'),
                    'category_name'=>$categoryName,
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
                     'img_name' =>$multiFilePath, 
                      'passport_doc'  =>$passport->getName('passpordDoc'),
                      'emirate_doc'  =>$emirate->getName('EmirateDoc'),
                      'visa_doc'  => $visa->getName('VisaDoc'),
                      'driving_doc'  => $driving->getName('drivingDoc'),
                      'wrkstatus'=>'active', 
                     //'doc_upload'=>$this->request->getPost('picture'),
                    'created_at'=>date('Y-m-d H:i:s'),
                ];
                // print_r($data);exit;
               
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
        $data['emp']=$emp->where('wrkstatus','active')->findall();
        $data['inactive']=$emp->where('wrkstatus','inactive')->findall();
		echo view('admin/employee/empshow',$data);
		
	}
    public function emp_profile($id)
    {

        $emp = new EmployeeModel();
        //$emp_id=$emp->where('emp_id',$id);
        $emp_id=$emp->where('emp_id',$id);
        $data['emp_profile']=$emp->find($emp_id);
        
        $data['multImg'] = array("passport_doc" => $data['emp_profile'][0]['passport_doc'] ,
        "emirate_doc" =>$data['emp_profile'][0]['emirate_doc'],
        "visa_doc" =>$data['emp_profile'][0]['visa_doc'] ,
        "driving_doc" =>$data['emp_profile'][0]['driving_doc']); 
      

        
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
       $data['multImg'] = explode(',', $data['row']['img_name']);
        $category = new CategoryModel1();
        $data['categoryList']=$category->table("category")->findall();
        return view('admin/employee/empedit',$data);
    }
    public function update($id='')
    {
           
    
                $emp = new EmployeeModel();
                $prod_item= $emp->find($id); 
                $old_img_name=$prod_item['passport_img'];
              
                  if(!empty($old_img_name))
                  { //if file is not empty this code excute
                   
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

			
 }else {     //if file is empty this code excute
    
                	$file = $this->request->getFile('passport_pic');
                 
                    if ($file->isValid() && ! $file->hasMoved()) 
				{
					$imagename = $file->getRandomName();
                    $file->move('uploads/', $imagename);
				}	else
                {
                    $imagename= $this->request->getFile('passport_pic');
                }

        }
                  /**passport file upload code */
                   $old_passport_imd=$prod_item['passport_doc'];
                  if(!empty($old_passport_imd))
                  { //if file is not empty this code excute
                $file = $this->request->getFile('editPassportdoc');
                if ($file->isValid() && ! $file->hasMoved()) 
                {    
                        if(file_exists("document_img/".$old_passport_imd))
                        {
                            unlink("document_img/".$old_passport_imd);
                        }
                              $rand=rand('111','999');
                            $passport =  $rand.'_'.$file->getName();
                            $file->move('document_img/', $passport);
                }else
                {
                    $passport=$old_passport_imd;
                }

            }
                else {     //if file is empty this code excute
    
                	$file = $this->request->getFile('editPassportdoc');
                 
                    if ($file->isValid() && ! $file->hasMoved()) 
				{
					$passport = $file->getName();
                    $file->move('document_img/', $passport);
				}	else
                {
                    $passport= $this->request->getFile('editPassportdoc');
                }

        }   /**passport file upload code */




      /**Emirate  file upload code */
      $old_emirate_doc=  $prod_item['emirate_doc'];
      if(!empty($old_emirate_doc))
      { //if file is not empty this code excute
    $file = $this->request->getFile('editEmiratedoc');
    if ($file->isValid() && ! $file->hasMoved()) 
    {    
            if(file_exists("document_img/".$old_emirate_doc))
            {
                unlink("document_img/".$old_emirate_doc);
            }
                 $rand=rand('111','999');
                $emirate =  $rand.'_'.$file->getName();
              
                $file->move('document_img/', $emirate);
    }else
    {
        $emirate=$old_emirate_doc;
    }

}
    else {     //if file is empty this code excute

        $file = $this->request->getFile('editEmiratedoc');
     
        if ($file->isValid() && ! $file->hasMoved()) 
    {
        $emirate = $file->getName();
        $file->move('document_img/', $emirate);
    }	else
    {
        $emirate= $this->request->getFile('editEmiratedoc');
    }

}   /**Emirate  file upload code */

        
/**VISA   file upload code */
$old_visa_doc=  $prod_item['visa_doc'];
if(!empty($old_visa_doc))
{ //if file is not empty this code excute
$file = $this->request->getFile('editVisadoc');
if ($file->isValid() && ! $file->hasMoved()) 
{    
      if(file_exists("document_img/".$old_visa_doc))
      {
          unlink("document_img/".$old_visa_doc);
      }
          $rand=rand('111','999');
          $visa =  $rand.'_'.$file->getName();
          $file->move('document_img/', $visa);
}else
{
  $visa=$old_visa_doc;
}

}
else {     //if file is empty this code excute

  $file = $this->request->getFile('editVisadoc');

  if ($file->isValid() && ! $file->hasMoved()) 
{
  $visa = $file->getName();
  $file->move('document_img/', $visa);
}	else
{
  $visa= $this->request->getFile('editVisadoc');
}

}   /**VISA   file upload code */
  

/**Driving    file upload code */
$old_driving_doc=  $prod_item['driving_doc'];
if(!empty($old_driving_doc))
{ //if file is not empty this code excute
$file = $this->request->getFile('editDrivingdoc');
if ($file->isValid() && ! $file->hasMoved()) 
{    
      if(file_exists("document_img/".$old_driving_doc))
      {
          unlink("document_img/".$old_driving_doc);
      }
            $rand=rand('111','999');
          $driving =  $rand.'_'.$file->getName();
          $file->move('document_img/', $driving);
}else
{
  $driving=$old_driving_doc;
}

}
else {     //if file is empty this code excute

  $file = $this->request->getFile('editDrivingdoc');

  if ($file->isValid() && ! $file->hasMoved()) 
{
  $driving = $file->getName();
  $file->move('document_img/', $driving);
}	else
{
  $driving= $this->request->getFile('editDrivingdoc');
}

}   /**Driving    file upload code */


        //other File Upload Code
           $ids  = array();
              $old_img_name = $prod_item['img_name'];
            //  $explodImg = explode(",",$old_img_name);
          
           if(!empty($old_img_name))
            { 
            $filePreviewName = [];
            $file = $this->request->getFile('upload_imgs');
         
            
            if ($file->isValid() && ! $file->hasMoved()) 
                {   
                 
                   
                  if(file_exists("imguploads/".$old_img_name))
                        {  
                            unlink("imguploads/".$old_img_name);
                           
                        }
                
                            $newName = $file->getName();
                          
                         $file->move('imguploads/', $newName);
                        array_push($filePreviewName, $newName);
               }
                   
               else
                { 
                   $filePreviewName1 =$old_img_name;  
                    
                }
             
                
                  }else
                  {
                      $filePreviewName = [];
                $file = $this->request->getFile('upload_imgs');
           
                        $newName = $newName = $file->getName();
                         $file->move('imguploads/', $newName);
                         array_push($filePreviewName, $newName);
                      
                  }
                   
                  if(empty($filePreviewName))
                  { 
                    $filePreviewName = $filePreviewName1;
                      
                  }else
                  {
                        $filePreviewName = implode(",",$filePreviewName);
                  }
                 
          
  
           
          $emp->find($id);
        
           $data=[
                    'first_name'=>$this->request->getPost('firstname'),
                    'last_name'=>$this->request->getPost('lastname'),
                    'emp_no'=>$this->request->getPost('employeeno'),   
                     'designation'=>$this->request->getPost('designation'),
                    'email'=>$this->request->getPost('email'),
                    'mobile'=>$this->request->getPost('mobile'),
                    'doj'=>$this->request->getPost('doj'),   
                    'father_name'=>$this->request->getPost('father'),
                    'wrkstatus'=>$this->request->getPost('wrkstatus'),   
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
                    'img_name' =>$filePreviewName, 
                    'passport_doc'  =>$passport,
                    'emirate_doc'  =>$emirate,
                    'visa_doc'  => $visa,
                    'driving_doc'  =>$driving,
                    'updated_by'=>date('Y-m-d H:i:s'),


                ];
                $emp->update($id,$data);
                


				$session = session();
				$session->setFlashdata('success','Employees Data update succesfully');
            //    $data['action']=BASE('Usercontroller/update'.$id);
                   return redirect('Employees/emp_form');
                   
    }



}

