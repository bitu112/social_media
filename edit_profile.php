<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	
	<title>Edit account settings</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
	 <form action="" method="POST" enctype="multipart/form-data">
	  <table class="table table-bordered table-hover">
	   <tr align="center"> 
	     <td colspan="6" class="active"><h2>Edit your profile</h2></td> 
	   </tr>
	   <tr>
	     <td style="font-weight:bold;">Change your first name</td>
		 <td> 
		  <input type="text" name="f_name" required value="<?php echo $first_name;?>">
		 </td>
	   </tr>
	   
	   <tr>
	     <td style="font-weight:bold;">Change your last name</td>
		 <td> 
		   <input type="text" name="l_name" required value="<?php echo $last_name;?>">
		 </td>
	   </tr>
	   <tr>
	     <td style="font-weight:bold;">Change your username</td>
		 <td> 
		   <input type="text" name="u_name" required value="<?php echo $user_name;?>">
		 </td>
	   </tr>
	   <tr>
	     <td style="font-weight:bold;">Description</td>
		 <td> 
		   <input type="text" name="describe_user" required value="<?php echo $describe_user;?>">
		 </td>
	   </tr>
	   <tr>
	     <td style="font-weight:bold;">Relationship status</td>
		 <td> 
		   <select class="form-control" name="Relationship">
             <option><?php echo $Relationship_status ?></option>
             <option>Engaged</option>
			 <option>Married</option>
			 <option>Single</option>
			 <option>In a relationship</option>
			 <option>It's complicated</option>
			 <option>Separeted</option> 
			 <option>Divorced</option>
			 <option>Widowed</option>
		   </select>
		 </td>
	   </tr>
	    <tr>
	     <td style="font-weight:bold;">Password</td>
		 <td> 
		   <input type="password" name="u_pass" required value="<?php echo $user_pass;?>">
		   <input type="checkbox" onclick="show_password()"><strong>
		   Show password</strong>
		 </td>
	   </tr>
	   <tr>
	     <td style="font-weight:bold;">Change your email</td>
		 <td> 
		   <input type="email" name="u_email" required value="<?php echo $user_email;?>">
		 </td>
	   </tr>
	   <tr>
	      <td style="font-weight:bold;">Country</td>
		 <td> 
		   <select class="form-control" name="u_country">
             <option><?php echo $user_country?></option>
             <option>Romania</option>
			 <option>United States</option>
			 <option>France</option>
			 <option>Spain</option>
			 <option>Brazil</option>
			 <option>Russia</option> 
			 <option>UK</option>
		   </select>
		 </td>
	   </tr>
	    <tr>
	      <td style="font-weight:bold;">Gender</td>
		 <td> 
		   <select class="form-control" name="u_gender">
             <option><?php echo $user_gender?></option>
             <option>Male</option>
			 <option>Female</option>
			 <option>Other</option>
		   </select>
		 </td>
	   </tr>
	   <tr>
	     <td style="font-weight:bold;">Birthdate</td>
		 <td> 
		   <input class="form-control input-md" type="date" name="u_birthday" required value="<?php echo $user_birthday; ?>">
		 </td>
	   </tr> 
          <?php 
			if(isset($_POST['sub'])){
			  $bfn = htmlentities($_POST['content']);
			  if($bfn == ''){
				echo"<script>alert('please enter something')</script>";
				echo"<script>window.open('edit_profile.php?u_id=$user_id','_self')</script>	";
                exit();					
 				}else{
				 $update = "update users set recovery_account='$bfn'
				 where user_id='$user_id'";
				 $run = mysqli_query($con,$update);
				 if($run){
				 echo"<script>alert('Working...')</script>";
				 echo"<script>window.open('edit_profile.php?u_id$user_id','_self')</script>";	
				 }
				}
			}
		   ?>
    </div>	
           <div class="modal-footer">   
           </div>			  
           </div>		   
		   </div>
		   </div>
		 </td>
       </tr>	 
        <tr align="center">
		  <td colspan="6"></td>
		  <input id="updateButton" type="submit" class="btn btn-info" name="update" style="width:250px;" value="Update">
		  </td>
        </tr>		
	 </table>
	</form>
	</div>
	<div class="col-sm-2">
	</div>
</div>
</body>
</html>
<?php 
  if(isset($_POST['update'])){
	
	  $f_name = htmlentities($_POST['f_name']);
	  $l_name = htmlentities($_POST['l_name']);
	  $u_name = htmlentities($_POST['u_name']);
	  $describe_user = htmlentities($_POST['describe_user']);
	  $Relationship_status = htmlentities($_POST['Relationship']);
	  $u_pass = htmlentities($_POST['u_pass']);
	  $u_email = htmlentities($_POST['u_email']);
      $u_country = htmlentities($_POST['u_country']);
	  $u_gender = htmlentities($_POST['u_gender']);
	  $u_birthday = htmlentities($_POST['u_birthday']);
	  
	  $update = "update users set 
	  f_name='$f_name',
	  l_name='$l_name',
	  user_name='$u_name',
	  describe_user='$describe_user',
	  Relationship ='$Relationship_status',
	  user_pass='$u_pass',
	  user_email='$u_email',
	  user_country='$u_country',
	  user_gender='$u_gender',
	  user_birthday='$u_birthday'
	  where user_id='$user_id'";
	  
	  $run = mysqli_query($con,$update);
	  if($run){
		  echo"<script>alert('Update succes')</script>";
		  echo"<script>window.open('edit_profile.php?u_id$user_id','_self')</script>";
	  }else{
		  echo"eroare";
	  }
  }
?>