
<?php 
session_start();
if (!isset($_SESSION['username']))
	header('location: registration.php');
?>


      <?php include 'includes/header.php'; ?>      





	  <?php include 'connection.php'; ?>

 
 
<form action="" method="post">
    <!--------------------------------------------------------------------------------------------------------------------->
	<head>
	<style>
  
  .affix {
      top: 0; left :0;
      width: 100%;
      z-index: 9999 !important;
	  background-color:#009688;
	  
  }

  .affix + .container-fluid{
      padding-top: 70px;
	  background-color:#009688;
	  
  }
  </style>
	</head>
	
	<div>
	<nav class="navbar navbar-default "  data-spy="affix" data-offset-top="197">
				<div class="container-fluid">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					  <a href="user.php"><h4><b>User:<span style="color:green;"><i>
		  <?php
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>
		  
		  
		  
		  </i></span></b></h4></a>
		  <button type="submit" name="logout"class="btn btn-danger">Logout</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="change.php"><button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span---->Change password
                             </button></a></li>
							<li><a href="">
							 <button type="button" class="btn  btn-default btn-lg disabled" style="color:red;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------><b>Registration</b>
                             </button></a></li>
							<li><a href="view.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Edit/Print form
                             </button></a> </li>
							<li><a href="querry.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->File query
                             </button></a> </li>
							<li>
							 <a href="#">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-print"></span>-->Result
                             </button></a>
							 </li>
						</ul>
					</div>
				</div>
			</nav>
	
	
	
	<!--------------------------------------------------------------------------------------------------------------------->
    
          <hr>
        
        
	</div>	
  </form>
 
	
	
	
	
	
<?php
if(isset($_POST['logout'])){

{
	session_destroy();
	echo "<script> location.href='registration.php'; </script>";
        exit;
}

}
?>
 
 
 
 
 
<!------------------------------------------------------------------------------------------------------------------------------------>
       
		
		
	
	
	
	
	
	
	
  <div class="row">
  
    
	         
			
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
			
			
		<!---------------------------------------------------------------------------------------------------------------------------------->	
			
			<?php
	
	$u=$_SESSION['username'];
	$sql="SELECT * FROM  `new registration` WHERE `Roll`= '$u'";
$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
			$cat=$row['Category'];
			$course=$row['Course'];
			$sem=$_SESSION['semester'];
			$y=$row['Year'];
			$Branch=$row['Branch'];
			$mn=$row['Mobile No.'];
			$fn=$row["Father's Name"];
			$fmn=$row["Father's mobile No."];
			$ten=$row['10th'];
			$twelve=$row['12th'];
			$jeeroll=$row['JEE main roll no.'];
			$jeerank=$row['JEE main rank'];
			
			
	
	?>
			
			
		<!----------------------------------------------------------------------------------------------------------------------------------->	
			 <div id="annon_head" style="padding-left:32px;">
          <h2><b>Semister Registration Form</b></h2>
          <hr>
        </div><br>
		<?php
		
		if($_SESSION['form_name']=="btech_cse")
		{
			include 'forms/B.Tech/cse/registration_form_btech_cse.php';
		}
		else if($_SESSION['form_name']=="btech_ece")
		{
			include 'forms/B.Tech/ece/registration_form_btech_ece.php';
		}
		else if($_SESSION['form_name']=="btech_eee")
		{
			include 'forms/B.Tech/eee/registration_form_btech_eee.php';
		}
		else if($_SESSION['form_name']=="btech_me")
		{
			include 'forms/B.Tech/me/registration_form_btech_me.php';
		}
		else if($_SESSION['form_name']=="btech_ce")
		{
			include 'forms/B.Tech/ce/registration_form_btech_ce.php';
		}
		else if($_SESSION['form_name']=="btech_bt")
		{
			include 'forms/B.Tech/BioTech/registration_form_btech_bt.php';
		}
		
		else if($_SESSION['form_name']=="mtech_ece")
		{
			include 'forms/M.Tech/ece/registration_form_mtech_ece.php';
		}
		else if($_SESSION['form_name']=="mtech_eee")
		{
			include 'forms/M.Tech/eee/registration_form_mtech_eee.php';
		}
		else if($_SESSION['form_name']=="msc_chem")
		{
			include 'forms/M.Sc/Chemistry/registration_form_msc_chemistry.php';
		}
		else
			echo "FORM NOT AVAILAIBLE. PLEASE FILE QUERY REGARDING THIS.";
		
		
		
		?>	
				
				
				
			</div>
		</div>
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  
</div>
</div>




<!--------------------------------------------------------------------------------------------------------------------------------------------->



<?php include 'footer.php'; ?>
