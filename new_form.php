
      <?php include 'includes/header.php'; ?>        
	  
	  
	  <?php include 'connection.php'; ?>

 

        <div id="annon_head" style="padding-left:32px;">
          <h2><b>Registration Form</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  <div class="row">
  
    
	         
			
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				
				<div class="col-md-12" style="min-width: 420px;padding-left:10%;padding-right:10%;">
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0; ">
						<div class="panel-heading"style="background-color:silver;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>NEW REGISTRATION</h2><hr></div>
						</div>
						<div class="panel-body">
						
						
					
						<!-------------------------------------------------new registration php----------------------------------------->
						
	
  
<?php

if($_POST)
{


$name=mysqli_real_escape_string($con,$_POST['name']);
$roll=mysqli_real_escape_string($con,$_POST['roll']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$category=mysqli_real_escape_string($con,$_POST['category']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$dob=mysqli_real_escape_string($con,$_POST['dob']);
$blood=mysqli_real_escape_string($con,$_POST['blood']);
$course=mysqli_real_escape_string($con,$_POST['course']);


if($course=='B.tech'||$course=='Phd')
	$year=mysqli_real_escape_string($con,$_POST['byear']);
else
	$year=mysqli_real_escape_string($con,$_POST['myear']);

if($year=='1st year')
$semister=mysqli_real_escape_string($con,$_POST['semister1']);
else if($year=='2nd year')
	$semister=mysqli_real_escape_string($con,$_POST['semister2']);
else if($year=='3rd year')
	$semister=mysqli_real_escape_string($con,$_POST['semister3']);
else if($year=='4th year')
	$semister=mysqli_real_escape_string($con,$_POST['semister4']);
	
$branch=mysqli_real_escape_string($con,$_POST['branch']);
$quota=mysqli_real_escape_string($con,$_POST['quota']);
$seat=mysqli_real_escape_string($con,$_POST['AllotedCategory']);
$number=mysqli_real_escape_string($con,$_POST['number']);
$religion=mysqli_real_escape_string($con,$_POST['religion']);
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$fnumber=mysqli_real_escape_string($con,$_POST['fnumber']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$caddress=mysqli_real_escape_string($con,$_POST['caddress']);
$ten=mysqli_real_escape_string($con,$_POST['ten']);
$twelve=mysqli_real_escape_string($con,$_POST['twelve']);

$mainroll=mysqli_real_escape_string($con,$_POST['mainroll']);
$mainrank=mysqli_real_escape_string($con,$_POST['mainrank']);
$advanceroll=mysqli_real_escape_string($con,$_POST['advanceroll']);
$advancerank=mysqli_real_escape_string($con,$_POST['advancerank']);
$pass=rand(11111,99999999);
$password=md5($pass);


$sql="INSERT INTO `new registration`(`Name`, `Roll`, `Email id`, `Category`, `Gender`, `D.O.B`, `Blood Group`, `Course`, `Semister`, `Year`, `Branch`, `Quota`,`Seat Alloted Category`,`Mobile No.`,  `Religion`, `Father's Name`, `Father's mobile No.`, `Residential address`, `Corresponding Address`, `10th`, `12th`, `JEE main roll no.`, `JEE main rank`, `JEE advance roll no.`, `JEE advance rank`, `Password`)
 VALUES ('$name','$roll','$email','$category','$gender','$dob','$blood','$course','$semister','$year','$branch','$quota','$seat','$number','$religion','$fname','$fnumber','$address','$caddress','$ten','$twelve','$mainroll','$mainrank','$advanceroll','$advancerank','$password')";
mysqli_query($con,$sql) or die("error in connection to database".mysqli_error($con));

$to= $email;
$to_admin='webteamnitskm@gmail.com';
$subject_admin='NEW STUDENT REGISTERED | DETAILS | CONFIRMATION';
$message_admin='STUDENT DETAILS ARE: - 
---------------------------------------------------------------------------------
NAME      :   '.$name.'
ROLL NO.  :   '.$roll.'
EMAIL     :   '.$email.'
BRANCH    :   '.$branch.'
YEAR      :   '.$year.'
MOBILE NO.:   '.$number.'
---------------------------------------------------------------------------------';
$subject = 'STUDENT PORTAL REGISTRATION DETAILS | CONFIRMATION';
$message = 'Thank you for registering to student portal of NIT SIKKIM.
Your registration has been successfully confirmed. 
---------------------------------------------------------------------------------
YOUR USERNAME :  '.$roll.'
YOUR PASSWORD :  '.$pass.'
---------------------------------------------------------------------------------



NOTE : THIS IS A SYSTEM GENERATED E-MAIL. DONOT REPLY.

';


echo '<span style="color:green;text-align:center;padding-left:30%;"><b><h1>	&#10004; </h1><h3> successfully registerd!!!</h3></b></span>';



	if(mail($to, $subject, $message)&& mail($to_admin, $subject_admin, $message_admin))
		{
          echo '<span style="color:blue;text-align:center;padding-left:30%;"><b><h3>USERNAME and PASSWORD has been sent to your Email!</h3></b></span>';
        } else 
		{
			echo 'Your username is '.$roll.'. Your password is '.$pass.'        \n    ';
         die('Failure in sending mail: Something went wrong . Email was not sent!');
		 
        }
}	







?>
	
	
	<span style="color:green;text-align:center;padding-left:30%;"><b><h3>click on the button below to go to login page !!!!!</h3></b></span>
	
	<!---meta http-equiv="refresh" content="15;url=registration.php" /-->
							
									 <a href="registration.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:red;width:40%;margin-left:30%;">
                             <!--<span class="glyphicon glyphicon-search"></span---><b>Go to login page</b>
                             </button></a>					
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  
</div>






<?php include 'footer.php'; ?>
