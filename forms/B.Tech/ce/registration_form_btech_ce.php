<div class="col-md-12" style="min-width: 420px;">
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick; ">
						<div class="panel-heading"style="border-radius: 1.5em 1.5em 0em 0em;border-width: thick;"id="annon_head">
						
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2 style="color:teal;"><b>
							<!------------------------------------EDIT course and department name------------------------------------>
							Registration Form (B.Tech) Civil Engineering Department
							<!-------------------------------------------------------------------------------------------------->
							</b></h2><hr style="border-width: thick;border-color:#3C7570;"></div>
						</div>
						<div class="panel-body">
						
						
					
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="rform.php" method="post" enctype="multipart/form-data">
  
  <!----------------------------------------photo-------------------------------------------------------------------------->
  <span style="color:red;text-align:center;"><h3><b><i>NOTE : All Uploads must be in jpg/png/jpeg format.No pdf allowed.</i></b></h3></span>
  
  <div  style="height:200px;width:220px;padding-top:50px;margin-top:25px;margin-left:40%;border-color:black;  border-style: solid; border-width: medium; " >
						<p style="text-align:center">
						Recent passport size photograph
						</p>
						<p style="text-align:center">
						(Not older than 6 months)
						</p>
						<input type="file" name="photo" class="form-control" required>
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
    <div class="col-md-9"><input type="text" name="category" class="form-control" id="category" placeholder="<?php echo $cat; ?>" value="<?php echo $cat; ?>" readonly   >
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
        <option value="1st semester"disabled>1st semester</option>
        <option value="2nd semester">2nd semester</option>
        <option value="3rd semester"disabled>3rd semester</option>
		<option value="4th semester">4th semester</option>
		<option value="5th semester"disabled>5th semister</option>
		<option value="6th semester">6th semester</option>
		<option value="7th semester"disabled>7th semester</option>
		<option value="8th semester">8th semester</option>
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
	<!--------------edit value="BRANCH NAME" AND DEPARTMENT NAME------------------------------->
        <option value="ce">Civil Engineering</option>
	<!----------------------------------------------------------------------------------------->	
      </select>
	</div>
  </div>
  
  </div> 
	 
	 
	 
	 
	 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<!--------------------------------------3rd line----------------------------------------------------------------->
	 




      <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="number"  style="float:right;">Mobile&nbspNo.:</label></div>
    <div class="col-md-9"><input type="text" name="number" pattern="[6789][0-9]{9}" class="form-control" id="number" placeholder="<?php echo $mn; ?>" value="<?php echo $mn; ?>"></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="fname"  style="float:right;">Father's&nbspName:</label></div>
    <div class="col-md-9"><input type="text" name="fname" class="form-control" id="fname" placeholder="<?php echo $fn; ?>" value="<?php echo $fn; ?>" readonly></div>
  </div>
  </div>
  
  
  
  
  
 
  
  
  
  
  
   <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="fnumber"  style="float:right;">Father's&nbspmobile&nbspNo.:</label></div>
    <div class="col-md-8"><input type="text" name="fnumber" pattern="[6789][0-9]{9}" class="form-control" id="fnumber" placeholder="<?php echo $fmn; ?>" value="<?php echo $fmn; ?>"></div>
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
    <div class="col-md-4"><input type="number" step="any" min="0" max="10" name="sgpa1" class="form-control" id="sgpa" placeholder="Enter your CGPA" required></div>
	
  </div>
  
  </div>
  
  
  
  
  <br>
  <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="fees" style="float:right;">Institute&nbspfees (Tuition+Hostel&nbspfees): </label></div>
    <div class="col-md-1"><input type="text" name="amount" class="form-control" id="fees" placeholder="Amount" required></div>
	<div class="col-md-2"><input type="text" name="transaction" class="form-control" id="fees" placeholder="Transaction No." required></div>
	<div class="col-md-2"><input type="date" name="date" class="form-control" id="fees" placeholder="transfer date" required></div>
	<div class="col-md-2"><label for="fees" style="float:right;">Upload&nbsptuition&nbspfee&nbspreceipt (Scanned&nbspin&nbspjpg/png): </label></div>
	<div class="col-md-3"><input type="file" name="imageInstitute" class="form-control" id="fees" required>
  </div>
  
	</div>
  
  </div>
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="mfees" style="float:right;">Mess Fees: </label></div>
    <div class="col-md-1"><input type="text" name="mamount" class="form-control" id="mfees" placeholder="Amount" required></div>
	<div class="col-md-2"><input type="text" name="mtransaction" class="form-control" id="mfees" placeholder="Transaction No." required></div>
	<div class="col-md-2"><input type="date" name="mdate" class="form-control" id="mfees" placeholder="transfer date" required></div>
	<div class="col-md-2"><label for="mfees" style="float:right;">Upload&nbspmess&nbspfee&nbspreceipt (Scanned&nbspin&nbspjpg/png): </label></div>
	<div class="col-md-3"><input type="file" name="imageMess" class="form-control" id="fees" required>
  </div>
  
	</div>
  
  </div>
	
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------course registered-------------------------------------------------------------------->
	
	 <hr  style="border-width: medium;border-color:#3C7570;"><div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Course Registered</h2><hr style="border-width: medium;border-color:#3C7570;"></div>
	<br>
<div class="row">

 <div class=" col-md-12" style="padding-bottom:10px;padding-left:30%;padding-right:30%;padding-top10px;">
    <div class="col-md-3"><label for="backlogs"  style="float:right;color:red;"><h4>Backlogs:</h4></label></div>
    <div class="col-md-9"><select class="form-control" name="backlogs" id="backlogs" style="width:100%;" onchange="showMe(this);">
        <option value="No Backlogs">No Backlogs</option>
		<option value="Semester Backlog">Semester Backlog</option>
        <option value="Year Backlog">Year Backlog</option>
        
      </select>
	</div>
  </div>

</div>	


	
	
	
<?php include $sem.'.php'; ?>








<!--?php include '1st semester.php'; ?>
<!--?php include '3rd semester.php'; ?>
<!--?php include '5th semester.php'; ?>
<!--?php include '7th semester.php'; ?>























	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	<div class="col-md-12">
	   <br>
	   
    <div style="padding-left:45%;">
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
	
  </div>
  
  
  </form>
  

							
							
							
							
						<!----------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>