<?php

namespace App\Controllers;
use App\Models\AttendanceModel;


class Attendence extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new AttendanceModel();
    
   
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
        
        return view('index');
	} 
	
    public function attendence_add()
	{	    
        $att = new AttendanceModel();
        $data['att']=$att->fetchEmp();
        $data['att1']=$att->fetchProjectno();  
  
		echo view('admin/attendance/attendence_add',$data);
 
	}

    public function attendence_insert()
    {
             								
               
                $data=array();          
                $inv=new AttendanceModel();   
                
                $attendence_present=$this->request->getPost('att_emp_id');
                $hours=$this->request->getPost('hours[]');
                $ot=$this->request->getPost('ot[]');                                         
                $code=$this->request->getPost('att_projectCode[]');
                
                 $attendance_date=$this->request->getPost('attendence_date');
                $data['row'] = $inv->where('att_date',$attendance_date)->first();
                 if(empty($data['row']))
                 {
           
                
                $att_emp_id=implode(",",$attendence_present);
                $hrs=implode(",",$hours);
                $oot=implode(",",$ot);
                $pro_code=implode(",",$code);

                

                $data=[
                  // att_id							
                    // 'inv_no'=>$arrLastid['inv_no'] ,
                     'att_emp_id'=>$att_emp_id,
                     'att_hourse'=>$hrs,
                     'att_ot'=>$oot,
                     'att_project_code'=>$pro_code,
                     'att_date'=>$this->request->getPost('attendence_date'), 
                     'created_at'=>date('Y-m-d H:i:s'),
                ];
                
                        $inv->insert($data);
				
			   $session = session();
			 $this->session->setFlashdata('success','Today Attendence Record insert succesfully');
                 return $this->response->redirect(site_url('Attendence/attendence_add'));
                 }else
                 {
                      $session = session();
                    $this->session->setFlashdata('warning','date already passed please choose different dates');
                    return $this->response->redirect(site_url('Attendence/attendence_add'));
                 }
        
    }
    public function attendance_form()
	{		
        $att=new AttendanceModel();   		
      //  $data['att']=$att->fetchEmp();
        //$data['att1']=$att->fetchProjectno();  
		echo view('admin/attendance/attendence_show');
		
	}

    public function montly_attendance_form()
	{		
          
		echo view('admin/attendance/attendanceMonthlyShow');
		
	}
    
    public function invoice_profile($id)
    {

        $inv = new AttendanceModel();
        $inv_id=$inv->where('cnt_id',$id);
        //$att_id=$att->where('att_id',$id);
        
        $data['cnt_profile']=$inv->find($inv_id);
        echo view('admin/client/cnt_profile',$data);
    }
  //'picture'=>['required'=>'First Shop Name Required...'
// 'exact_length[10]'=>'Mobile nimber must be a  digit.'
    

    public function delete($id)
    {
        $inv = new AttendanceModel();
        $inv->where('cnt_id',$id)->delete();
        $session = session();
		$session->setFlashdata('success','Client record delete succesfully');
		return redirect('Cnt/cnt_form');
	
    }
    public function edit($id)
    {
        $inv = new AttendanceModel();
        $data['row']=$inv->where('cnt_id',$id)->first();
        return view('admin/client/cntedit',$data);
    }
    public function update($id='')
    {    
        $inv=new AttendanceModel();   
        $inv->find($id);   											     
        $data=[
            'cnt_no'=>$this->request->getPost('clientno'),
            'clint_company_name'=>$this->request->getPost('companyname'),
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
        
        $inv->update($id,$data); 
        //  print_r($data); 
    
       
        //  print_r($data); 
            
				$session = session();
				$session->setFlashdata('success','Clent Data update succesfully');
            //    $data['action']=BASE('Usercontroller/update'.$id);
                   return redirect('Cnt/cnt_form');
                 
    }

    public function selectedClient()
    {
      
        if($_POST['post_id'])
        {
      $id=$_POST['post_id'];
      $RevenuModel = new RevenueModel();
          $dataArr['ajaxClientData'] = $RevenuModel->ajaxcallClientData($id);
      echo json_encode($dataArr);
      /*print_r($RevenuModel->getLastQuery()->getQuery()); print query
      print_r( $dataArr['ajaxClientDetails']);exit;*/
      }
    }
    public function ajaxgetDateWiseAttendance()
    {           $data = array();
                $ajaxGetEmpDetails = array();
                 
               $attendanceDate = $_POST['attendence_date'];
               if(!empty($attendanceDate))
               {
                $inv = new AttendanceModel();
                $data['row'] = $inv->where('att_date',$attendanceDate)->first();
                if(!empty($data['row']))
                {
                $emdId = $data['row']['att_emp_id'];

                $hours = $data['row']['att_hourse'];
                $otAttend = $data['row']['att_ot'];
                $proCode = $data['row']['att_project_code'];

                $data['empIdImplod'] = explode(",",$emdId);

                $data['hours'] = explode(",",$hours);
                $data['otAttend'] = explode(",",$otAttend);
                $data['proCode'] = explode(",",$proCode);
                
              
                foreach($data['empIdImplod']  as $empIdImplod)
                { 
                    $ajaxGetEmpDetails[] = $inv->ajaxEmpCode($empIdImplod);
                   
                }
                   $data['ajaxGetEmpDetails'] =  $ajaxGetEmpDetails ;

                foreach($data['hours']  as $abval)    {       
                 if($abval == 'AB')
           {   
                  $data['abCount'][] = $abval;   
               
            }
        }       
        if(isset($data['abCount']))
        {
            $data['absentCount'] = count($data['abCount']);        
        }else
        {
           $data['absentCount'] = '0';    
        }
       // print_r($data['abCount']);exit;
                  // $data['absentCount'] = count($data['abCount']);         
      
                   echo view('admin/attendance/ajaxAttendanceList',$data);

            }else
            {
                echo "<td bgcolor='yellow' colspan='7'align ='center'>No Record Found...!</td>";
            }                
               }
               else {
                echo "<td  bgcolor='yellow' colspan='7' align ='center'>Please Select Date...!</td>";
               }

    }
    
    
    public function ajaxGetAttendanceMonthWiseData()
    {           $data = array();
                $ajaxGetEmpDetails = array();
               
               $frmDate = $_POST['frmDate'];
               $toDate = $_POST['toDate'];
              
               if(!empty($frmDate)&&($toDate))
               {
                $inv = new AttendanceModel();
                $data['att']=$inv->fetchEmp();
                $inv = new AttendanceModel();
                $data['row'] = $inv->getMonthData($frmDate,$toDate);
                 if(!empty($data['row']))
                 {
                    foreach($data['row'] as $hourskey)
                        {
                            $data['hours'][] = explode(",",$hourskey->att_hourse);
                            $data['hrCount'][] = explode(",",$hourskey->att_hourse);
                            $data['otAttend'][] = explode(",",$hourskey->att_ot);
                            $data['proCode'][] = explode(",",$hourskey->att_project_code);
                          
                        }

                       /**code row column sum hourse  */
                       $row = count($data['att']);
                       $hr =array();
                       $ot =array();
                       $ab =array();
                      for ($i = 0; $i < $row; $i++)  
                        {  
                            $sum = 0;
                            $tesrArray =array();
                            for($j = 0; $j<count($data['hrCount']);$j++)
                            {
                           // print_r($data['hours'][$j][$i]);  exit;
                              if($data['hrCount'][$j][$i] == 'AB' || $data['hrCount'][$j][$i] == 'S.L' || $data['hrCount'][$j][$i] == 'A.L' || $data['hrCount'][$j][$i] == 'Fri')
                              {
                                $data['hrCount'][$j][$i] = 0;
                              }
                              $sum += (float)$data['hrCount'][$j][$i];
                             
                            
                            }
                            $data['hr'][] = $sum;
                           // $data['ot'][] = $sum;
                          //  echo '<pre>';
                           // print_r($hr['hr']);
                        }
                        /**code row column sum hourse  */

                            /**code row column sum OT  */
                        for ($i = 0; $i < $row; $i++)  
                        {  
                            $sum = 0;
                            $tesrArray =array();
                            for($j = 0; $j<count($data['otAttend']);$j++)
                            {
    
                              $sum += (float)$data['otAttend'][$j][$i];
                            
                            }
                            $data['ot'][] = $sum;
                          
                        }
                        echo view('admin/attendance/ajaxAttendanceMonthlyList',$data);
                    }
                         else{
                            echo "<div class='alert alert-sm alert-warning alert-dismissible' role='alert'>No Record Found...!</div>";
                            }
                    }       
            
               else {
                echo "<div class='alert alert-sm alert-info alert-dismissible ' role='alert'>Please Select Date...!</div>";
               }



    }  
    
}

