$(document).ready(function(){
	$('.mask').hide();
	 $('#myForm').hide();
    $(".addbutton").click(function(){
    	$('.mask').show();
        $('#myForm').show();
    });


    $(".closebtn").click(function(){
    	$("#register-form").trigger('reset');
        $('#myForm').hide();
        $('.mask').hide();
    });



$(".delete").click(function(){
  var reg_val=$(this).attr('data-id');
 $("#delete").attr('data-id',reg_val);
  $('#confirm').show();
});



$(".cancel").click(function(){
  $('#confirm').hide();
});



$("#delete").click(function(){
	 var reg_val=$(this).attr('data-id');
 $.ajax({				
		type:"POST",
	    url: "http://localhost/IHHCWeb/index.php/employee/deleteEmployee",
		data:{formData:reg_val},
		success: function(data){
			alert(data);
		 $('#confirm').hide();		
		 window.location = location.href;						
		}
													  		
		});	
});



$(".edit").click(function(){
    	
        var reg_val=$(this).attr('data-id');
        $.ajax({				
				type:"POST",
				url: "http://localhost/IHHCWeb/index.php/employee/editEmployee",
				data:{formData:reg_val},
				success: function(data){
				var obj = jQuery.parseJSON(data);
				$('#empname').val(obj.empname);
				$('#emailid').val(obj.emailid);
				$('#phone').val(obj.phone);
				$('#dob').val(obj.dob);
				$('#empno').val(obj.empid);
				$('.mask').show();
     			$('#myForm').show();
																
				}
													  		
				});	
    });

     $("#register-form").validate({


     	errorPlacement: function(error, element) {
									error.insertAfter(element.parent()); // <- the default
								},
				rules: {
									   	empname: "required",
										emailid: {
											required: true,
											email: true
								   		},
								   		phone: "required",
										dob: "required",
										
								},
								messages: {
									  	empname: "Employee Name required",
										emailid: {
											email: "Invalid Email", 
											required: "Email Required"
										},
										phone: "Phone Number Required",
										dob: "Date of birth required",	
								},


								submitHandler: function (form) {                     
									   var formData = $( "#register-form" ).serialize();
										$.ajax({				
											type:"POST",
											 url: "http://localhost/IHHCWeb/index.php/employee/addEmployee",
											data:{formData:formData},
											success: function(data){
												if(data == 'success') {
													alert('Insert Successfully');
													$('#myForm').hide();
        											$('.mask').hide();
													}else  {
														alert('Updated Successfully');
													$('#myForm').hide();
        											$('.mask').hide();
													}	
													window.location = location.href;				
												}
													  		
										});	
								}    
							   
							});
});