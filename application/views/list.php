<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Employee Portal</title>

          <!-- jQuery 2.1.4 -->    
		    <script type="text/javascript" src="<?php echo base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>
		    <!-- Bootstrap 3.3.5 -->
		     <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		     <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-timepicker.min.js'); ?>"></script>
			 <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-slider.min.js'); ?>"></script>
		     <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
		     <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
		     <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validation.min.js'); ?>"></script>
		     <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validation.min.js'); ?>"></script>
		     <script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>


        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css'); ?>" />
		<!-- Own style -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />


    </head>
    <body>
    <div class="container">
    <!-- Employee List starts -->
    <div class="mask"></div>
    <button type="button" class="btn btn-primary addbutton">Add</button>
     <h2>Employee List</h2>
    <table class="table">
    	<thead>
      <tr>
        <th>Emp ID</th>
        <th>Emp Name</th>
        <th>Email ID</th>
        <th>Phone Number</th>
        <th>DOB</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    	foreach ($data as $value) {?>
    	<tr>
    	<td><?php echo  $value->empid; ?> </td>
    	<td><?php echo  $value->empname;  ?></td>
    	<td><?php echo  $value->emailid; ?></td>
    	<td><?php echo  $value->phone; ?> </td>
    	<td><?php echo  $value->dob; ?> </td>
    	<td><a class="edit" data-id="<?php echo  $value->empid; ?>" href="javascript:;">Edit</a></td>
        <td><a class="delete" data-id="<?php echo  $value->empid; ?>" href="javascript:;">Delete</a></td>
    	</td>
    	<?php } ?>
    	
    </tbody>
    </table>
<!-- Employee List Ends -->
    <!-- form popup starts -->
		<div class="container form-popup" id="myForm">

		<button class="btn closebtn"><i class="fa fa-close"></i></button>
		  <h2>Add Form</h2>
		  <form class="form-container" id="register-form" novalidate="novalidate">
		  <input type="hidden" class="form-control" id="empno" name="empno" value="">
		    <div class="form-group">
		      <label for="empname">Employee Name:</label>
		      <input type="text" class="form-control" id="empname" name="empname" value="">
		    </div>
		    <div class="form-group">
		      <label for="emailid">Email ID:</label>
		      <input type="email" class="form-control" id="emailid" name="emailid" value="">
		    </div>
		    <div class="form-group">
		      <label for="phone">Phone Number:</label>
		      <input type="text" class="form-control" id="phone" name="phone" value="">
		    </div>
		    <div class="form-group">
		      <label for="dob">Date of Birth:</label>
		      <input type="date" class="form-control" id="dob" name="dob" value="">
		    </div>

		    <button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		</div>
    </div>
<!-- form popup Ends -->

<div id="confirm" >
  <div class="modal-body">
    Are you sure?
  </div>
  <div class="modal-footer">
    <button type="button" data-id="" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
    <button type="button" class="cancel" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>

</body>


    
    </html>