
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
							<li><a href="change.php">
							 <button type="button" class="btn btn-info btn-lg" style="color:black;">
                             <!--<span class="glyphicon glyphicon-search"></span--->Change password
                             </button></a> </li>
							
							<li><a href="ruser_list.php">
							 <button type="button" class="btn  btn-info btn-lg" style="color:black;overflow:hidden;">
                             <!--<span class="glyphicon glyphicon-search"></span------>Registration
                             </button></a></li>
							<li><a href="view.php"><button type="button" class="btn btn-default btn-lg disabled" style="color:red;">
                             <!--<span class="glyphicon glyphicon-search"></span----><b>Edit/Print form</b>
                             </button></a></li>
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
			
			
			
			
		<!----------------------------------------------------------------------------------------------------------------------------------->	
			 <div id="annon_head" style="padding-left:32px;">
          <h2><b>Edit Form</b></h2>
          <hr>
        </div><br>
			
				
				<div class="col-md-12" style="min-width: 420px;">
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick; ">
						<div class="panel-heading"style="border-radius: 1.5em 1.5em 0em 0em;border-width: thick;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2 style="color:teal;"><b>registration form (B.tech) computer science & engineering department</b></h2><hr style="border-width: thick;border-color:#3C7570;"></div>
						</div>
						<div class="panel-body">
						
						
					
						
						<!--------------------form header-------------------------------------------------------->
						
						
						
						
						
					<!-------------------------------get data-------------------------------------------------------------------->
					
					
<?php



$u=$_SESSION['username'];


$sql="SELECT * FROM  `registration` WHERE `Roll`= '$u'";
$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
			$row=mysqli_fetch_array($result);
			$cat=$row['Category'];
			$sem=$row['Semister'];
			$y=$row['Year'];
			$mn=$row['Mobile No.'];
			$fn=$row["Father's Name"];
			$fmn=$row["Father's mobile No."];
			$s1=$row['SGPA 1'];
			$back=$row['Backlogs'];
			$amount=$row['Amount'];
			$tn=$row['Transaction No.'];
            $td=$row['transaction Date'];
			$mamount=$row['messAmount'];
			$mtn=$row['messTransaction No.'];
            $mtd=$row['messTransaction Date'];
			$photo = $row['Photo'];
			$imageInstitute = $row['Institute fee Reciept'];
			$imageMess = $row['Mess fee reciept'];


?>
					
<?php






$sql="SELECT * FROM  `new registration` WHERE `Roll`= '$u'";
$result=mysqli_query($con,$sql) or die("error ..semister registerion not done!! ".mysqli_error($con));
           
$row=mysqli_fetch_array($result);
			$add1=$row['Residential address'];
			$add2=$row['Corresponding Address'];
			
?>					
					
<!--------------------------------------------------------------------------------------------------------------------------------------->					
						
						
						
						
						
						
						
						
						
						
						
						
						
							
							
  
  <form action="rform.php" method="post" enctype="multipart/form-data">
  <div>
  <div class=" col-md-12">
  <div class=" col-md-6" style="height:200px;width:250px;margin-top:25px;margin-bottom:25px;margin-left:18%; " >
						<!--p style="text-align:center">
						Recent passport size photograph
						</p>
						<p style="text-align:center">
						(not older than 6 months)
						</p-->
						<p><img style="height:200px;width:250px;" src="images/<?php echo $photo; ?>"> </p>
						
	</div>
	<div class=" col-md-6" style="width:250px;height:200px;margin-top:25px;margin-bottom:25px;margin-left:18%;border-color:black;  border-style: solid; border-width: medium; " >
	<p style="text-align:center">
						Recent passport size photograph
						</p>
						<p style="text-align:center">
						(not older than 6 months)
						</p>
	<label for="name"  >Choose Another Image if you want to change image:</label>
	<input type="file" name="photo" class="form-control" >
    </div>
	</div>
	
  
  
  <!----------------------------------------------1st line--------------------------------------------------------------------------------->
  <br>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="name"  style="float:right;">Name:</label></div>
    <div class="col-md-9"><input type="text" name="name" class="form-control" id="name" placeholder="<?php
		  
		 $use=$_SESSION['name'];
		  echo $use;
		  
		  ?>" readonly ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="roll"  style="float:right;">Roll No.:</label></div>
    <div class="col-md-9"><input type="text" name="roll" class="form-control" id="roll" placeholder="<?php
		  
		 $user=$_SESSION['username'];
		  echo $user;
		  
		  ?>" readonly ></div>
  </div>
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="email"  style="float:right;">Email id:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="<?php
		  
		 $email=$_SESSION['email'];
		  echo $email;
		  
		  ?>" readonly ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="category"  style="float:right;">Category:</label></div>
    <div class="col-md-9"><select class="form-control " name="category" id="category">
	    <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
		<option value="General">General</option>
        <option value="OBC">OBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
      </select>
	</div>
  </div>
  </div>
  
  
  
  
 
	 
	 
 
  
  
  
  <!----------------------------------------------end of 1st line----------------------------------------------------------------------------------->
  
  
  
  
  
  <!------------------------------------------2nd line--------------------------------------------------------------------------->
     
	 
	 
	 
	 
	 
	 
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="course" style="float:right;">Course:</label></div>
    <div class="col-md-9"><select class="form-control " name="course" id="course" style="width:100%;" readonly>
	<option value="B.tech">B.Tech</option>
	</select>
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semester:</label></div>
    <div class="col-md-9"><select class="form-control" name="semister" id="semister"  style="width:100%;">
        <option value="<?php echo $sem; ?>"><?php echo $sem; ?></option>
        <option value="1st semister">1st semester</option>
        <option value="2nd semister">2nd semester</option>
        <option value="3rd semister">3rd semester</option>
		<option value="4th semister">4th semester</option>
		<option value="5th semister">5th semester</option>
		<option value="6th semister">6th semester</option>
		<option value="7th semister">7th semester</option>
		<option value="8th semister">8th semester</option>
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="year"  style="float:right;">Year:</label></div>
    <div class="col-md-9"><select class="form-control" name="year" id="year" style="width:100%;">
        <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
		<option value="1st year">1st year</option>
        <option value="2nd year">2nd year</option>
        <option value="3rd year">3rd year</option>
        <option value="4th year">4th year</option>
      </select>
	</div>
  </div>
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="branch"  style="float:right;">Branch:</label></div>
    <div class="col-md-9"><select class="form-control" name="branch" id="branch"  style="width:100%;" readonly>
        <option value="cse">Computer Science And Engineering</option>
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<!--------------------------------------3rd line----------------------------------------------------------------->
	 




      <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="number"  style="float:right;">Mobile&nbspNo.:</label></div>
    <div class="col-md-9"><input type="number" name="number" class="form-control" id="number" placeholder="<?php echo $mn; ?>" value="<?php echo $mn; ?>" required></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="fname"  style="float:right;">Father's&nbspName:</label></div>
    <div class="col-md-9"><input type="text" name="fname" class="form-control" id="fname" placeholder="<?php echo $fn; ?>" value="<?php echo $fn; ?>" required></div>
  </div>
  </div>
  
  
  
  
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-5"><label for="fnumber"  style="float:right;">Father's&nbspmobile&nbspNo.:</label></div>
    <div class="col-md-7"><input type="number" name="fnumber" class="form-control" id="fnumber" placeholder="<?php echo $fmn; ?>" value="<?php echo $fmn; ?>" required></div>
  </div>
  
  </div>
  
  <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="address"  style="float:right;">Present&nbspaddress<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-10"><textarea rows="5" type="text" name="address" class="form-control" id="address" placeholder="<?php echo $add2; ?>"  required></textarea></div>
  </div>
  
  </div>
   


    <hr  style="border-width: medium;border-color:#3C7570;">


     
	 
	 <div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Acedemic and payment details</h2><hr style="border-width: medium;border-color:#3C7570;"></div>
	 
	 


	 
	
	<!-------------------------------------end of third line------------------------------------------------------------------------->
	<!------------------------------------acedemic and payment details---------------------------------------------------------------->
	<br>
	<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="sgpa" style="float:right;">CGPA&nbsptill&nbsplast&nbspsemister: </label></div>
    <div class="col-md-4"><input type="number" step="any" name="sgpa1" class="form-control" id="sgpa" placeholder="<?php echo $s1; ?>" value="<?php echo $s1; ?>"></div>
	
	
  </div>
  
  </div>
  
  
  
  
  <br>
  <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="fees" style="float:right;">Institute&nbspfees (Tuition&nbsp+&nbspHostel&nbspfees): </label></div>
    <div class="col-md-1"><input type="text" name="amount" class="form-control" id="fees" placeholder="<?php echo $amount; ?>" value="<?php echo $amount; ?>" required></div>
	<div class="col-md-2"><input type="text" name="transaction" class="form-control" id="fees" placeholder="<?php echo $tn; ?>" value="<?php echo $tn; ?> " required></div>
	<div class="col-md-2"><input type="date" name="date" class="form-control" id="fees" placeholder="<?php echo $td; ?>" value="<?php echo $td; ?>" required></div>
	<div class="col-md-2"><label for="fees" style="float:right;">Upload&nbsptuition&nbspfee&nbspreceipt (Scanned&nbspin&nbspjpg/png): </label></div>
	<div class="col-md-3"><input type="file" name="imageInstitute" class="form-control" id="fees" >
  </div>
  
	</div>
  
  </div>
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="mfees" style="float:right;">Mess Fees: </label></div>
    <div class="col-md-1"><input type="text" name="mamount" class="form-control" id="mfees" placeholder="<?php echo $mamount; ?>" value="<?php echo $mamount; ?>" required></div>
	<div class="col-md-2"><input type="text" name="mtransaction" class="form-control" id="mfees" placeholder="<?php echo $tn; ?>" value="<?php echo $mtn; ?>" required></div>
	<div class="col-md-2"><input type="date" name="mdate" class="form-control" id="mfees" placeholder="<?php echo $td; ?>" value="<?php echo $mtd; ?>" required></div>
	<div class="col-md-2"><label for="mfees" style="float:right;">Upload&nbspmess&nbspfee&nbspreceipt (Scanned&nbspin&nbspjpg/png): </label></div>
	<div class="col-md-3"><input type="file" name="imageMess" class="form-control" id="fees" >
	
  </div>
  </div>
  </div>
	
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------course registered-------------------------------------------------------------------->
	
	 <hr  style="border-width: medium;border-color:#3C7570;"><div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Course Registered</h2>
	 <div   style="color:red;" id="annon_head">note : do course registration again !!!! </div><hr style="border-width: medium;border-color:#3C7570;"></div>
	<br><br>
	
<div class="row">

<div class=" col-md-12" style="padding-bottom:10px;padding-left:30%;padding-right:30%;padding-top10px;">
    <div class="col-md-3"><label for="backlogs"  style="float:right;color:red;"><h4>Backlogs:</h4></label></div>
    <div class="col-md-9"><select class="form-control" name="backlogs" id="backlogs" style="width:100%;">
	    <option value="<?php echo $back; ?>"><?php echo $back; ?></option>
        <option value="No Backlogs">No Backlogs</option>
		<option value="Semester Backlog">Semester Backlog</option>
        <option value="Year Backlog">Year Backlog</option>
        
      </select>
	</div>
  </div>


  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>2nd Semister</h3>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select subject</th>
        <th>Subject code</th>
        <th>Subject name</th>
		<th>Credit</th>
      </tr>
    </thead>
    <tbody>
	
	<?php
	if($sem=="2nd semister")
	{
	echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="MA1002{2}" checked>
            </div>
		</td>
        <td>MA1002</td>
        <td>Mathematics-II</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="PH1001{2}" checked>
            </div>
		</td>
		<td>PH1001</td>
        <td>Physics</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE1001{2}" checked>
            </div>
		</td>
		<td>EE1001</td>
        <td>Electrical Science</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ZZ1002{2}" checked>
            </div>
		</td>
		<td>ZZ1002</td>
        <td>Engineering Graphics </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS1001{2}" checked>
            </div>
		</td>
		<td>CS1001</td>
        <td>Foundation of Computing</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="PH1091{2}" checked>
            </div>
		</td>
		<td>PH1091</td>
        <td>Physics Laboratory</td>
        <td>1</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ZZ1092{2}" checked>
            </div>
		</td>
		<td>ZZ1092</td>
        <td>Workshop-II</td>
        <td>2</td>
      </tr>');	
	}
	else
	{
		echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="MA1002{2}">
            </div>
		</td>
        <td>MA1002</td>
        <td>Mathematics-II</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="PH1001{2}">
            </div>
		</td>
		<td>PH1001</td>
        <td>Physics</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE1001{2}">
            </div>
		</td>
		<td>EE1001</td>
        <td>Electrical Science</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ZZ1002{2}">
            </div>
		</td>
		<td>ZZ1002</td>
        <td>Engineering Graphics </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS1001{2}">
            </div>
		</td>
		<td>CS1001</td>
        <td>Foundation of Computing</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="PH1091{2}">
            </div>
		</td>
		<td>PH1091</td>
        <td>Physics Laboratory</td>
        <td>1</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ZZ1092{2}">
            </div>
		</td>
		<td>ZZ1092</td>
        <td>Workshop-II</td>
        <td>2</td>
      </tr>');
	}
	
	?>
	
	
      
    </tbody>
  </table>
</div>
</div><br>	







<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>4th Semister</h3>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select subject</th>
        <th>Subject code</th>
        <th>Subject name</th>
		<th>Credit</th>
      </tr>
    </thead>
    <tbody>
	
	
	<?php
	if($sem=="4th semister")
	{
	echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="MA2002{4}" checked>
            </div>
		</td>
        <td>MA2002</td>
        <td>Mathematics-IV</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2004{4}" checked>
            </div>
		</td>
		<td>CS2004</td>
        <td>Computer Organisation</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2005{4}" checked>
            </div>
		</td>
		<td>CS2005</td>
        <td>Data Structures and Algorithms</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2006{4}" checked>
            </div>
		</td>
		<td>CS2006</td>
        <td>Discrete Structures</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS4001{4}" checked>
            </div>
		</td>
		<td>CS4001</td>
        <td>Environmental Studies</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2093{4}" checked>
            </div>
		</td>
		<td>CS2093</td>
        <td>Hardware Laboratory</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2094{4}" checked>
            </div>
		</td>
		<td>CS2094</td>
        <td>Data Structures Laboratory</td>
        <td>3</td>
      </tr>');	
	}
	else
	{
		echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="MA2002{4}">
            </div>
		</td>
        <td>MA2002</td>
        <td>Mathematics-IV</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2004{4}">
            </div>
		</td>
		<td>CS2004</td>
        <td>Computer Organisation</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2005{4}">
            </div>
		</td>
		<td>CS2005</td>
        <td>Data Structures and Algorithms</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2006{4}">
            </div>
		</td>
		<td>CS2006</td>
        <td>Discrete Structures</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS4001{4}">
            </div>
		</td>
		<td>CS4001</td>
        <td>Environmental Studies</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2093{4}">
            </div>
		</td>
		<td>CS2093</td>
        <td>Hardware Laboratory</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS2094{4}">
            </div>
		</td>
		<td>CS2094</td>
        <td>Data Structures Laboratory</td>
        <td>3</td>
      </tr>');
	}
	
?>
	
	
      
    </tbody>
  </table>
</div>
</div><br>	







<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>6th Semister</h3>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select subject</th>
        <th>Subject code</th>
        <th>Subject name</th>
		<th>Credit</th>
      </tr>
    </thead>
    <tbody>
	
	<?php
	if($sem=="6th semister")
	{
	echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS3006{6}" checked>
            </div>
		</td>
        <td>CS3006</td>
        <td>Computers Network</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-II{6}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-II</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-III{6}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-III</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IV{6}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-IV </td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS3093{6}" checked>
            </div>
		</td>
		<td>CS3093</td>
        <td>Network Laboratory</td>
        <td>3</td>
      </tr>');	
	}
	else
	{
		echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS3006{6}">
            </div>
		</td>
        <td>CS3006</td>
        <td>Computers Network</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-II{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-II</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-III{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-III</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IV{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-IV </td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS3093{6}">
            </div>
		</td>
		<td>CS3093</td>
        <td>Network Laboratory</td>
        <td>3</td>
      </tr>');
	}
	
?>
	
	
	
      
	  
    </tbody>
  </table>
</div>
</div><br>	











<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>8th Semister</h3>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select subject</th>
        <th>Subject code</th>
        <th>Subject name</th>
		<th>Credit</th>
      </tr>
    </thead>
    <tbody>
	
	<?php
	if($sem=="8th semister")
	{
	echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME4104{8}" checked>
            </div>
		</td>
        <td>ME4104</td>
        <td>Principles of Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-VIII{8}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-VIII</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IX{8}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-IX</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-X{8}" checked>
            </div>
		</td>
		<td></td>
        <td>Elective-X</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS4099{8}" checked>
            </div>
		</td>
		<td>CS4099</td>
        <td>Project</td>
        <td>5</td>
      </tr>');	
	}
	else
	{
		echo ('<tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME4104{8}">
            </div>
		</td>
        <td>ME4104</td>
        <td>Principles of Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-VIII{8}">
            </div>
		</td>
		<td></td>
        <td>Elective-VIII</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IX{8}">
            </div>
		</td>
		<td></td>
        <td>Elective-IX</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-X{8}">
            </div>
		</td>
		<td></td>
        <td>Elective-X</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS4099{8}">
            </div>
		</td>
		<td>CS4099</td>
        <td>Project</td>
        <td>5</td>
      </tr>');
	}
	
?>
	
      
	 
	 
    </tbody>
  </table>
</div>
</div><br>	







	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	<div class="col-md-12">
	   <br>
	   
    <div style="padding-left:45%;">
      <button type="submit" name="update" class="btn btn-primary btn-lg">Submit Changes</button>
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
</div>




<!--------------------------------------------------------------------------------------------------------------------------------------------->



<?php include 'footer.php'; ?>
