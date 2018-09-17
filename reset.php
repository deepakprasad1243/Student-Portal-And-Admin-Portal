<?php 
session_start();
if (!isset($_SESSION['username']))
	header('location: forgot.php');
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
  
  
  
 
  <?php 
if(isset($_POST['reset']))
{
$u=$_POST['otp'];
$check=$_SESSION['OTP'];

if($check==$u)
			{
$pass=rand(11111,99999999);
$password=md5($pass);
$roll=$_SESSION['username'];
	
$sq="UPDATE `new registration` SET `Password`='$password' WHERE `Roll`= '$roll'";	
mysqli_query($con,$sq) or die("error in updation ->".mysqli_error($con));


	
$to= $_SESSION['email'];


$subject = 'STUDENT PORTAL PASSWORD RESET SUCCESSFUL';
$message = '

---------------------------------------------------------------------------------
YOUR NEW PASSWORD : " '.$pass.' "
YOU CAN CHANGE YOUR PASSWORD AFTER LOGIN TO YOUR ACCOUNT.
---------------------------------------------------------------------------------';

       

	if(mail($to, $subject, $message))
		{
          echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:green;text-align:center;"><b><i>&#10004;&nbsp&nbspPASSWORD is successfully reset and sent to your email id -> '.$_SESSION['email'].'.</i></b> </span>';
	  echo '</div>
</div>
</div>
</div>

<span style="color:green;text-align:center;padding-left:30%;"><b><h3>click on the button below to go to login page !!!!!</h3></b></span>
	
	<!---meta http-equiv="refresh" content="15;url=registration.php" /-->
							
									 <a href="registration.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:red;width:40%;margin-left:30%;">
                             <!--<span class="glyphicon glyphicon-search"></span---><b>Go to login page</b>
                             </button></a>	

';
        } else 
		{
			//echo $pass ;
         echo('Failure in sending mail: Something went wrong . Email was not sent!');
		 
		 echo ('<span style="color:green;text-align:center;padding-left:30%;"><b><h3>click on the button below to go to login page !!!!!</h3></b></span>
	
	<!---meta http-equiv="refresh" content="15;url=registration.php" /-->
							
									 <a href="registration.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:red;width:40%;margin-left:30%;">
                             <!--<span class="glyphicon glyphicon-search"></span---><b>Go to login page</b>
                             </button></a>	');
        }
				

			
			
			
			
			}
			else
			{
				
				 echo '
	  <div class="row" style="padding-left:26%;">
				
				<div class="col-md-8" >
					<div class="panel panel-default" style="border-radius:.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thin">
						
						<div class="panel-body">';
	  
	 echo '<span style="color:red;text-align:center;"><b><i>&#10008;&nbsp&nbspWRONG OTP </i></b></span>'; 
	  echo '</div>
</div>
</div>
</div>';
				
			}
			






}
else
{echo ('<span style="color:red;text-align:center;"><h4><b><i>NOTE : Check Your email id for OTP. </i></b></h4></span>
  
  <br>
  <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-3" ><label  for="name"  style="float:right;">OTP<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="otp" class="form-control" id="name" placeholder="Enter OTP" required ></div>
  </div>
  
  </div>
  
  <div class="col-md-12">
	   <br>
   
	   
    <div style="padding-left:45%;">
      <button type="submit" name="reset" class="btn btn-primary">Submit</button>
    </div>
	
  </div>');
	
	
	
	
	
	
}






?>	
  
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
