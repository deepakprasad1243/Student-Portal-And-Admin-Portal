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
	<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
<script type="text/javascript" src="http://cdn.uriit.ru/jsPDF/libs/adler32cs.js/adler32cs.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js
"></script>
<script type="text/javascript" src="libs/Blob.js/BlobBuilder.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.addimage.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.standard_fonts_metrics.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.split_text_to_size.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.from_html.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script-->
<script type="text/javascript"  src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.min.js"></script>
	<style>
	
	
	@media print{
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
    top: 0;
  }
  #section-to-print {
    position: absolute;
    left: 0;right: 0;
    top: -350px;
  }
}
  
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
		  <button type="button" onclick="window.print();return false;" class="btn btn-success">&#128439&nbspPrint</button>
		  <a href="edit_form.php"><button type="button" class="btn btn-warning">&#10001;&nbspEdit</button></a>
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
			 
          <h2><b>Print Form</b></h2>
		  
          <hr>
        </div><br>
			
				<div id="section-to-print">
				<div class="col-md-12 " id="toprint" style="min-width: 420px;" style="background-color:white;">
				<table class="table borderless" style="table-layout: fixed;" style="background-color:white;">
				<thead>
				<td colspan=2><img src="images/log.png"/></td>
				<td  colspan=5>
				<p><b><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspराष्ट्रीय प्रौद्योगिकी संस्थान सिक्किम</h3></b></p>
				<p><b><h3>National Institute of Technology Sikkim</h3></b></p>
				<p><h4><b><i>An Institute of National Importance,under MHRD,GoI</i></b></h4></p>
				<p><h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRavangla, South Sikkim-737139</h4></p>
				<p><br><h4 style="text-align:right;"><i>Form no.:</i><b>BTech/........................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></h4></p>
				
				</td>
				</thead>
				</table>
					<div class="panel panel-default"style="background-color:white;">
						<div class="panel-heading"style="border-width: thick;"id="annon_head">
							<div   style="text-align:center;height:20px;padding-top:5px;"><h2 style="color:teal;"><b>registration form (B.tech) computer science & engineering department</b></h2><hr style="border-width: thick;border-color:#3C7570;"></div>
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
			
			$Branch=$row['Branch'];
            $subject=explode(",",$row['Subject(s) opted {semister}']);
			$count=1;
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
					
					
					
<!---------------------------------------------------------------photo------------------------------------------------------------------------>					
						
						
	<div  style="height:200px;width:170px;margin-top:25px;margin-left:42%;border-color:black;  border-style: solid; border-width: medium; " >
						<!--p style="text-align:center">
						Recent passport size photograph
						</p>
						<p style="text-align:center">
						(not older than 6 months)
						</p-->
						<p><img style="height:200px;width:170px;" src="images/<?php echo $photo; ?>"> </p>
	</div>					
						
						
						
<!------------------------------------------------------------------------------------------------------------------------------------------->						
						
						
						
						
						
						
							
							
  
  <form action="rform.php" method="post">
  
  
  <!----------------------------------------------1st line--------------------------------------------------------------------------------->
  <br>
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <tbody>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=3><label>Name of the student:&nbsp&nbsp&nbsp&nbsp</label><?php $use=$_SESSION['name']; echo $use;?></td>
		<td style="border-width:2px;border-color:black;" colspan=2><label>Roll No.:&nbsp&nbsp&nbsp&nbsp</label><?php $user=$_SESSION['username']; echo $user;?></td>
        <td style="border-width:2px;border-color:black;" colspan=3><label>Income Category:&nbsp&nbsp&nbsp&nbsp</label><?php ?></td>		
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=3><label>Mobille No.:&nbsp&nbsp&nbsp&nbsp</label><?php echo $mn; ?></td>
		<td style="border-width:2px;border-color:black;"colspan=2><label>Category:&nbsp&nbsp&nbsp&nbsp</label><?php echo $cat; ?></td> 
		<td style="border-width:2px;border-color:black;"colspan=3><label>Email Id:&nbsp&nbsp&nbsp&nbsp</label><?php $email=$_SESSION['email']; echo $email;?></td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=3><label>Semister:&nbsp&nbsp&nbsp&nbsp</label><?php echo $sem; ?></td>
		<td style="border-width:2px;border-color:black;"colspan=2><label>Year:&nbsp&nbsp&nbsp&nbsp</label><?php echo $y; ?></td> 
		<td style="border-width:2px;border-color:black;"colspan=3><label>Branch:&nbsp&nbsp&nbsp&nbsp</label><?php echo $Branch; ?></td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=4><label>Father's&nbspName:&nbsp&nbsp&nbsp&nbsp </label><?php echo $fn; ?></td>
		<td style="border-width:2px;border-color:black;" colspan=4><label>Father's&nbspMobile&nbspNo.:&nbsp&nbsp&nbsp&nbsp</label><?php echo $fmn; ?></td> 
  </tr>
  <tr>
        <td style="border-width:2px;border-color:black;"colspan=4;rowspan=4><label>Present&nbspAddress:&nbsp&nbsp&nbsp&nbsp </label><?php echo $add2; ?></td>
		<td style="border-width:2px;border-color:black;" colspan=4 ;rowspan=4><label>Permanent&nbspHome&nbspaddress:&nbsp&nbsp&nbsp&nbsp</label><?php echo $add1; ?></td> 
  </tr>
  </tbody>
  </table>
  
  
  <!--------------------------------------------------------------------test explode function------------------------------------------------------------------------------>
  
  
  <?php
  echo (' <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;text-align:center;" >
  <thead>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=14><label>COURSES REGISTERED</label></td>
		 
  </thead>
  <thead>
        <td style="border-width:2px;border-color:black;padding:0;"><label>S No.</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Subject Code</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Subject Name</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=1><label>Credit</label></td>
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Semister</label></td> 
		<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>Remark of HOD/Adviser</label></td> 	 
  </thead>
  <tbody>');
  
  foreach ($subject as $sub)
  {
	 if($sub=="MA1002{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>MA1002</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Mathematics-II</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 
	 if($sub=="PH1001{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>PH1001</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Physics</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="EE1001{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>EE1001</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Electrical Science</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="ZZ1002{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>ZZ1002</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Engineering Graphics</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="CS1001{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS1001</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Foundation of Computing</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>2</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="PH1091{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>PH1091</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Physics Laboratory</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>1</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	   if($sub=="ZZ1092{2}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>ZZ1092</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Workshop-II</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>2</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>2nd</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 
	 
	 
	  if($sub=="MA2002{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>MA2002</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Mathematics-IV</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2004{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2004</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Computer Organisation</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2005{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2005</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Data Structures and Algorithms</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2006{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2006</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Discrete Structures</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS4001{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS4001</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Environmental Studies</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2093{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2093</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Hardware Laboratory</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	  if($sub=="CS2094{4}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS2094</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Data Structures Laboratory</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>4th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 
	 
	 if($sub=="CS3006{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS3006</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Computers Network</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-II{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-II</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-III{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-III</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-IV{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-IV</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="CS3093{6}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS3093</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Network Laboratory</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>6th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 
	 
	 if($sub=="ME4104{8}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>ME4104</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Principles of Management</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>3</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>8th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-VIII{8}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-VIII</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>8th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="Elective-X{8}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Elective-X</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>4</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>8th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	 if($sub=="CS4099{8}") 
	 {
		echo('<tr>
			<td style="border-width:2px;border-color:black;padding:0;"><label>'.$count++.'.</label></td>
			<td style="border-width:2px;border-color:black;padding:0"colspan=2><label>CS4099</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=6><label>Project</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=1><label>5</label></td>
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label>8th</label></td> 
		    <td style="border-width:2px;border-color:black;padding:0"colspan=2><label></label></td>
		</tr>');
	 }
	
	  
	  
	  
	  
  }
  
  echo('
  </tbody>
  </table>');
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  ?>
  
  
  <!---------------------------------------------------------FEE DETAILS test------------------------------------------------------------------------------------------>
  
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <thead>
  <tr>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=6><label>FEE DETAILS</label></td>	
</tr>   
  <tr>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label>FEE TYPE</label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label>AMOUNT (Rs.)</label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label>TRANSANCTION NO.</label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label>TRANSANCTION DATE</label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=2><label>&nbsp&nbsp&nbsp&nbsp</label></td>
  </tr>  
  </thead>

  <tbody style="text-align:center;">
  
  <tr>
  <td style="border-width:2px;border-color:black;padding:0;"colspan=1><label>1. Institute fee (tuition fee + Hostel fee)</label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label><?php  echo $amount;?></label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label><?php  echo $tn;?></label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label></label><?php  echo $td;?></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=2><label><img style="height:200px;width:100%;" src="images/<?php echo $imageInstitute; ?>"></label></td>
  </tr>
  
  
  <tr>
  <td style="border-width:2px;border-color:black;padding:0;"colspan=1><label>2. Mess fee</label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label><?php  echo $mamount;?></label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label><?php  echo $mtn;?></label></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=1><label></label><?php  echo $mtd;?></td>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=2><label><img style="height:200px;width:100%;" src="images/<?php echo $imageMess; ?>"></label></td>
  </tr>
  
  </tbody>
  </table>
  
  
 
  <!-------------------------------------------------------------------------------------------------------------------------->
  
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  <thead>
   <td style="border-width:2px;border-color:black;padding:0;text-align:center;"colspan=6><label>ACEDEMICS DETAILS</label></td>	 
  </thead>

  <tbody>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=3><label>CGPA till last semister:&nbsp&nbsp&nbsp&nbsp </label><?php  echo $s1;?></td>
  
   
  <td style="border-width:2px;border-color:black;"colspan=3><label>Backlogs:&nbsp&nbsp&nbsp&nbsp</label><?php  echo $back;?></td>
  
  </tr>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Acedemics Affairs Clearence</label></td>
  <td style="border-width:2px;border-color:black;"colspan=4><label>Comment: .............................................................................</label>
  <p><b><h5 style="float:right;">Dean Acedemics Affairs&nbsp&nbsp&nbsp&nbsp</b></h5></p></td>
  </tr>
  </tbody>
  </table>
  
  
  <table class="table table-bordered" style="border-width:2px;border-color:black;table-layout: fixed;" >
  

  <tbody>
  
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Date:</label>&nbsp&nbsp&nbsp&nbsp<?php echo date("Y-m-d");?></td>
  <td style="border-width:2px;border-color:black;"colspan=4><label>Signature of the student:</label></td>
  </tr>
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Date:</label></td>
  <td style="border-width:2px;border-color:black;"colspan=4><label>Seal & Signature of the HOD/Adviser:</label><p><br><br></P></td>
  </tr>
  
  <tr>
  <td style="border-width:2px;border-color:black;"colspan=2><label>Student Affairs Clearence</label></td>
  <td style="border-width:2px;border-color:black;"colspan=4><label>Comment: .............................................................................</label>
  <p><b><h5 style="float:right;">Dean Student Affairs&nbsp&nbsp&nbsp&nbsp</b></h5></p></td>
  </tr>
  </tbody>
  </table>
  
  
 
  
  
  






	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	
  
  
  </form>
  

							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
    </div>				
							
							
							
							
	<div class="col-md-12">
	   <br>
	   
    <div class=" col-sm-6" style="padding-left:35%;">
      <a href="edit_form.php"><button type="button" class="btn btn-warning btn-lg"><b>&#10001;&nbspEdit your form</b></button></a>
    </div>
	<div class=" col-sm-6" >
      <button type="button"  onclick="printPDF();" class="btn btn-success btn-lg"><b>&#128439&nbspClick to PRINT</b></button>
    </div>
	<br><br><br><br><br><br><br><br>
	
	
  </div>						
				
				
				
												
					
				
				
					
			
				
  
  
</div>
</div>

<script>

function printPDF() {
  var element = document.getElementById('toprint');
  
  html2pdf(element);
  console.log('printPDF()');
}
	
	
    </script>

  <!--script>
   $(document).ready(function() {
    
    
    $('#download').click(function() {       
        html2canvas([$("#canvas").get(0)], {
			scale : 0.01,
            onrendered: function(canvas) {         
                var imgData = canvas.toDataURL(
                    'image/png');              
                var doc = new jsPDF('p', 'mm');
                doc.addImage(imgData, 'JPEG', .01, .01);
                doc.save('sample-file.pdf');
            }
        });
    });
});
</script-->

<!--------------------------------------------------------------------------------------------------------------------------------------------->



<?php include 'footer.php'; ?>
