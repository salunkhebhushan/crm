<?php

namespace App\Controllers;
use App\Models\Project_atvModel;
use App\Models\Daily_Activity_Modal;


class Project_activities extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		header("Access-Control-Allow-Origin: * ");
		header("Access-Control-Allow-Methods: *");
		header("Access-Control-Allow-Headers: * ");
        $this->model = new Project_atvModel();
        $this->model = new Daily_Activity_Modal();
      
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
        
        return view('admin/project/proadd');
		

	} 
    

    public function atv_add()
	{	
        //  $atv=new ClientModel();  
        // $data['sub_details']=$atv->table("client")->findall();

        $data=array();  
		$Project_atvModel = new Project_atvModel();
        $dataArr['sub_details'] = $Project_atvModel->getclientData();
        											     
		echo view('admin/subcontractor/subadd',$dataArr);
	}

   
    public function atv_insert()
    {

                $atv=new Project_atvModel();
                
                // $data=[
                     				
                //     'project_id'=>$this->request->getPost(''),
                //     'm1'=>$this->request->getPost('activity1[]'),
                //     'rate'=>$this->request->getPost('activity2[]'),
                //     'complate'=>$this->request->getPost('activity3[]'),
                //     'inprogress'=>$this->request->getPost('activity4[]'),
                //     'created_at'=>date('Y-m-d H:i:s'),
                // ];
                
                $data=$this->request->getPost();
                for($i=0;$i<sizeof($data['activity1']);$i++)
                {
            
                    $arr=array('m1'=>$data['activity1'][$i],
                    'rate'=>$data['activity2'][$i],
                    'complate'=>$data['activity3'][$i],
                    'inprogress'=>$data['activity4'][$i],
                    'created_at'=>date('Y-m-d H:i:s'), );
                      $main_arr[]=$arr;
                }
                 //$main_arr[]=$arr;
                //  echo "<pre>";
            //   print_r($main_arr); exit;
                $atv->insertBatch($main_arr);
                	  $session = session();
 			$this->session->setFlashdata('success','All activity Record insert succesfully');
            return redirect('Pro');
				//  print_r($data); 
            }

// 			  $session = session();
// 			$this->session->setFlashdata('success','Sub Contractor Record insert succesfully');
//             return redirect('Sub/sub_form');
                            
    
//     public function sub_form()
// 	{		
//         $Project_atvModel = new Project_atvModel();    
//         $data['emp']=$Project_atvModel->fetch_cllientSubcontactor();   
//         // $data['emp']=$atv->findall();
// 		echo view('admin/subcontractor/subshow',$data);
// 	}
  
    
public function ajaxAddDailyActivity()
{           
   
    if(isset($_SESSION['admin']) && $_SESSION['admin'] !=NULL)
    {           $dailyActivity = new Daily_Activity_Modal();
           $data = array("daily_activity_date"=>$this->request->getPost('date'),
                         "daily_activity_name"=>$this->request->getPost('activity_name'),
                         "daily_activity_id"=>$this->request->getPost('act_id'),
                         "daily_project_id"=>$this->request->getPost('project_id'),
                         "daily_activity_meter"=>$this->request->getPost('meter'));  
                         $act_name = $data['daily_activity_name'];
                         $act_create_date =  $data['daily_activity_date'];
                         $where = "daily_activity_name='$act_name' AND daily_activity_date='$act_create_date'";
                         $result=$dailyActivity->where($where)->first();
                         if(!empty($result)) {
                            $dailyActivity->update($result['daily_act_id'],$data); 
                          //  $query = $dailyActivity->getLastQuery();
                             echo 'update';
                            
                        }else
                        {
                            $data['boolInserted'] = $dailyActivity->insert($data);
                            if(isset($data['boolInserted']) && $data['boolInserted'] == TRUE ) 
                            {
                                echo 'success';
                            }else
                            {
                                echo 'wrong';
                            }    
                        }
            
    }else
    {
        echo 'session timeout';
    }
}


}

