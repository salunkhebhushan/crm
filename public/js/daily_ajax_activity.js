 function saveOnButtonClick() {
	
 status = true;
    var meter = document.getElementById('meter').value;
    if(meter === '') {
        document.getElementById("meter").focus();
        var element = document.getElementById("classDIV");
        element.classList.add("has-error");
        gs = false;
        return;
    } else {
        var element = document.getElementById("classDIV");
        element.classList.remove("has-error");
        status = true;
    }
   
    if(status === 'true') {
       
        var base_url = window.location.origin;
        
        $(".loader").show();
        $.ajax({
            type: "POST",
            url: base_url+"/Project_activities/ajaxAddDailyActivity",
            data: $("#dailyActivityForm").serialize(),
            success: function(response) {
                if(response.includes("session")) {
                    $(".loader").hide();
                    
                    swal({  
                        title: "Good job!",  
                        text: "Inserted Successfully'",  
                        icon: "warning",  
                        button: "Ok",  
                      });  
                }
                if(response.includes("wrong")) {
                    $(".loader").hide();
                    swal({  
                        title: "Good job!",  
                        text: "Inserted Successfully'",  
                        icon: "error",  
                        button: "Ok",  
                      });  
                }
               if(response.includes("update")) {
                    $(".loader").hide();
                    swal({  
                        title: "Good job!",  
                        text: "Update Successfully'",  
                        icon: "success",  
                        button: "Ok",  
                      });  
                }
                if(response.includes("success")){
                 
                    document.getElementById("dailyActivityForm").reset();
                    swal({  
                        title: "Good job!",  
                        text: "Inserted Successfully'",  
                        icon: "success",  
                        button: "Ok",  
                      });  
                      $('#addDailyActivity').modal('hide');
                    $(".loader").hide();
                }
            }
        });
    }
}


function resetform()
{
    document.getElementById("dailyActivityForm").reset();
}

 
