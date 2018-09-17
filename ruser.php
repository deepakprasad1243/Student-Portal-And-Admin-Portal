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
							<li><a href="ruser_list.php">
							 <button type="button" class="btn  btn-default btn-lg  " style="color:red;overflow:hidden;">
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
	
	
	
	
	
	
  <div class="row">
  
    
	         
			 <!----<div class="col-md-4" >
						
						<ul style="background-color:#e5e0e0;list-style:none;">
						
						
							<li><img src="images/log.png"/ style="height:450px; float:left;"></li>
							
						</ul>
				
				</div>---------->
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				
<!--------------------------------------------------------content start--------------------------------------------------------------------------------->
			
  
    
	         
			
	<div class="col-md-12">	       





					   <div id="annon_head" style="padding-left:32px;">
          <h2><b>Semester Registration Form</b></h2>
          <hr>
        </div>
		
		
	
	
	<?php
if($_GET){

$c=$_GET['course'];
$b=$_GET['branch'];
$s=$_GET['sem'];
$_SESSION['semester']=$s;
if($s!="invalid")
{
if($c=="btech")
{
	
		
	if(($b=="cse")&&($c!="invalid"))
	{
		
		$_SESSION['form_name']="btech_cse";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="ece")&&($c!="invalid"))
	{
		$_SESSION['form_name']="btech_ece";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="eee")&&($c!="invalid"))
	{
		$_SESSION['form_name']="btech_eee";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="ce")&&($c!="invalid"))
	{
		$_SESSION['form_name']="btech_ce";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="me")&&($c!="invalid"))
	{
		$_SESSION['form_name']="btech_me";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="bt")&&($c!="invalid"))
	{
		$_SESSION['form_name']="btech_bt";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	}
	else
    {
    echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>Some invalid choice selected!!!!.please select valid branch  for B.tech programme</h3></b> </span>';	
    }
}
else
if($c=="mtech")	
{
	if(($b=="cse")&&($c!="invalid"))
	{
		$_SESSION['form_name']="mtech_cse";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="ece")&&($c!="invalid"))
	{
		$_SESSION['form_name']="mtech_ece";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="eee")&&($c!="invalid"))
	{
		$_SESSION['form_name']="mtech_eee";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	}
	else
    {
    echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>Some invalid choice selected!!!!.please select valid branch  for M.tech programme</h3></b> </span>';	
    }
	
}
else
if($c=="phd")
{
	if(($b=="cse")&&($c!="invalid"))
	{
		$_SESSION['form_name']="phd_cse";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="ece")&&($c!="invalid"))
	{
		$_SESSION['form_name']="phd_ece";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="eee")&&($c!="invalid"))
	{
		$_SESSION['form_name']="phd_eee";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="phy")&&($c!="invalid"))
	{
		$_SESSION['form_name']="phd_phy";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="me")&&($c!="invalid"))
	{
		$_SESSION['form_name']="phd_me";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="chem")&&($c!="invalid"))
	{
		$_SESSION['form_name']="phd_chem";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	} else
	if(($b=="math")&&($c!="invalid"))
	{
		$_SESSION['form_name']="phd_math";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	}
	else
    {
    echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>Some invalid choice selected!!!!.please select valid branch for phd programme</h3></b> </span>';	
    }
}
else
if($c=="M.sc")
{
	if(($b=="chem")&&($c!="invalid"))
	{
		$_SESSION['form_name']="msc_chem";
		echo "<script> location.href='semester_registration.php'; </script>";
        exit;
	}
	else
    {
    echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>Some invalid choice selected!!!!.please select valid branch for M.sc programme</h3></b> </span>';	
    }
}	
else
{
echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>No course selected!!!!.please select your course </h3></b></span>';	
}






   


}
else
echo '<span style="color:red;text-align:center;padding-left:30%;"><b><h3>No semester selected!!!!.please select your semester </h3></b></span>';	
}
?>
	
	
	
	
  
					
							

		<div class="wrapper" >
			
			<div class="row" style="padding-left:10%;padding-right:10%;">
				
				<div class="col-md-12" >
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick;">
						<!---<div class="panel-heading"style="background-color:#e5e0e0;border-radius: 1.5em 1.5em 0em 0em;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2>Administration</h2><hr></div>
						</div>-->
						<div class="panel-body">
						
						
						
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="" method="get">
    <div class="form-inline">
     <!-- <label for="sel1">Select list (select one):</label>-->
	 <div class="col-md-4">
      <select class="form-control " name="course" style="width:100%;">
        <option>--------Seclect course--------</option>
		<option value="btech">B.Tech</option>
        <option value="mtech"  >M.Tech</option>
        <option value="phd"  >Phd</option>
		<option value="M.sc"  >M.sc</option>
        
      </select>
      </div>
	  
	 
	  
	 <div class="col-md-4">
      <select class="form-control " id="sel1" name="sem" style="width:100%;">
        <option value="invalid">--Seclect semester--</option>
		<option value="1st semester">1st semester</option>
        <option value="2nd semester">2nd semester</option>
        <option value="3rd semester">3rd semester</option>
		<option value="4th semester">4th semester</option>
		<option value="5th semester">5th semister</option>
		<option value="6th semester">6th semester</option>
		<option value="7th semester">7th semester</option>
		<option value="8th semester">8th semester</option>
      </select>
      </div>
	  
	  <div class="col-md-4">
	  <!---label for="sel3">Select list (select one):</label-->
      <select class="form-control" name="branch"  style="width:100%;">
        <option value="invalid">------------select branch------------</option>
        <option value="cse">Computer Science And Engineering</option>
        <option value="ece">Electronics And Communication Engineering</option>
        <option value="eee" >Electrical And Electronics Engineering</option>
		<option value="me" >Mechanical Engineering</option>
		<option value="ce" >Civil Engineering</option>
		<option value="bt" >Biotechnology</option>
		<option value="math" >Mathematics</option>
		<option value="phy" >Physics</option>
		<option value="chem" >Chemistry</option>
		<option value="sst" >Humanities And Social Sciences</option>
      </select>
	  </div><hr>
	  <div class="col-md-12">
	   <br>
    <div style="padding-left:45%;">
      <button type="submit" class="btn btn-primary">Load form</button>
    </div>
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
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  





	<!---------------------------------------------------------end------------------------------------------------------------------------>			
			</div>
		</div>
    </div>				
							
							
							
							
							
				
				
				
												
					
				
				
					
			
				
  
  
</div>



<!---------------------------------------------------------------------php to get data-------------------------------------->



<!-------------------------------------------------------------------------------------------------------------------------->

<?php include 'footer.php'; ?>
