
<?php 
session_start();

?>

      <?php include 'includes/header.php'; ?>       




	  <?php include 'connection.php'; ?>

 <style>
  .label:after{
     content:"*" ;
     color:red   
     }
 
 
 </style>
 
 

 
 
 
 

        <div id="annon_head" style="padding-left:32px;">
          <h2><b>Password reset</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  <div class="row">
  
    
	         
			
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				
				<div class="col-md-12" style="min-width: 420px;padding-left:10%;padding-right:10%;">
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick; ">
						<div class="panel-heading"style="border-radius: 1.5em 1.5em 0em 0em;border-width: thick;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2 style="color:teal;"><b>Reset your password</h2></b><hr style="border-width: thick;border-color:#3C7570;"></div>
						</div>
						<div class="panel-body">
						
						
					
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="" method="post">
  
  <span style="color:red;text-align:center;"><h4><b><i>NOTE : Please provide email id that is linked to your account. </i></b></h4></span>
  <!----------------------------------------------1st line--------------------------------------------------------------------------------->
  <br>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" ><label  for="name"  style="float:right;">Username<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="name" class="form-control" id="name" placeholder="Enter your username" required ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="roll"  style="float:right;">Email<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="email" class="form-control" id="roll" placeholder="Enter your Email id linked to your account" required ></div>
  </div>
  </div>
  
  <div class="col-md-12">
	   <br>
   
	   
	   
	   <?php 
if(isset($_POST['forgot']))
{
$u=$_POST['name'];
$e=$_POST['email'];
$sql="SELECT `Name`,`Email id` FROM  `new registration` WHERE `Roll`= '$u'";
$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
$row=mysqli_fetch_array($result);
if($row)
{
			$email=$row['Email id'];
if($email==$e)
{
	
	$_SESSION['username']=$u;
	$_SESSION['name']=$row['Name'];
	
	$_SESSION['email']=$email;
	
	
	$otp=rand(100000,999999);
	$_SESSION['OTP']=$otp;
	
	
	
$to= $email;


$subject = 'STUDENT PORTAL PASSWORD RESET OTP';
$message = '

---------------------------------------------------------------------------------
OTP for resetting your password is : " '.$otp.' "
---------------------------------------------------------------------------------';

       

	if(mail($to, $subject, $message))
		{
          echo "<script> location.href='reset.php'; </script>";
        exit;
        } else 
		{
			//echo $otp ;
         echo('Failure in sending mail: Something went wrong . Email was not sent!');
		 
		 
        }
	
	
	
	
	
	
	
	
	
	
				
			}
			else
			{
				
				 echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspThis email id is not linked to your account.Please provide email id linked to your account. </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';
				
			}
			


}
else
{
	 echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspInvalid Username. </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';
}


}

?>	
	   
	   
    <div style="padding-left:45%;">
      <button type="submit" name="forgot" class="btn btn-primary">Submit</button>
    </div>
	
  </div>
  
 
  
  
  </form>
  

							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  
</div>






<?php include 'footer.php'; ?>
