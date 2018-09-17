
      <?php include 'includes/header.php'; ?>       




	  <?php include 'connection.php'; ?>

 <style>
  .label:after{
     content:"*" ;
     color:red   
     }
 
 
 </style>
 
 

 
 
 
 

        <div id="annon_head" style="padding-left:32px;">
          <h2><b>Registration Form</b></h2>
          <hr>
        </div>
		
		
	
	
	
	
	
	
	
  <div class="row">
  
    
	         
			
	<div class="col-md-12">
					
							

		<div class="container" >
			
			<div class="row" >
				
				<div class="col-md-12" style="min-width: 420px;">
					<div class="panel panel-default"style="border-radius: 1.5em;border-color:#3C7570; background-color:#e5e0e0;border-width: thick; ">
						<div class="panel-heading"style="border-radius: 1.5em 1.5em 0em 0em;border-width: thick;"id="annon_head">
							<div   style="text-align:center;height:20px;color:#9E9EA7;padding-top:5px;"><h2 style="color:teal;"><b>NEW REGISTRATION</h2></b><hr style="border-width: thick;border-color:#3C7570;"></div>
						</div>
						<div class="panel-body">
						
						
					
						
						<!--------------------form header-------------------------------------------------------->
							
							
  
  <form action="new_form.php" method="post">
  
  <span style="color:red;text-align:center;"><h4><b><i>NOTE : Fields marked with asterisk ( * ) are mandatory.</i></b></h4></span>
  <!----------------------------------------------1st line--------------------------------------------------------------------------------->
  <br>
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" ><label  for="name"  style="float:right;">Name<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required ></div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="roll"  style="float:right;">Roll No.<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="roll" class="form-control" id="roll" placeholder="Enter your roll no." required ></div>
  </div>
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="email"  style="float:right;">Email id<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="email" name="email" class="form-control" id="email" placeholder="Institute email id" required ></div>
  </div>
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="aemail"  style="float:right;">Alternate Email id<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="email" name="aemail" class="form-control" id="aemail" placeholder="Alternate email id" required ></div>
  </div>
  
  </div>
  
  
  
  
 
 <div class="row">	 
	 
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="gender"  style="float:right;">Gender<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="gender" id="gender" style="width:100%;">
        <option>-----Choose Gender-----</option>
		<option value="Male">Male</option>
        <option value="Female">Female</option>
        
      </select>
	</div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="category"  style="float:right;">Category<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control " name="category" id="category">
	    <option>------Select category------</option>
		<option value="General">General</option>
        <option value="OBC">OBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
      </select>
	</div>
  </div>
  
  </div>
  
  
  
  <!----------------------------------------------end of 1st line----------------------------------------------------------------------------------->
  
  <div class="row">
 
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="dob"  style="float:right;">D.O.B<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="date" name="dob" class="form-control" id="dob" required>
	</div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="blood"  style="float:right;">Blood Group<span class="label">&nbsp</span>:</label>
    
    </div>
    <div class="col-md-9">
    <select class="form-control" name="blood" id="blood" style="width:100%;">
        <option>Choose Blood Group</option>
		<option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        
      </select>
	</div>
  </div>
  </div>
  
  
  
  <!------------------------------------------2nd line--------------------------------------------------------------------------->
     
	 <script>
function showMe(e) {
    var strdisplay = e.options[e.selectedIndex].value;
    var e = document.getElementById("idShowMe");
	var e1 = document.getElementById("idShowMe2");
    if(strdisplay == "B.tech"||strdisplay == "Phd") {
        e.style.display = "block";
    } else {
        e.style.display = "none";
    }
	if(strdisplay == "M.tech"||strdisplay == "M.sc") {
        e1.style.display = "block";
    } else {
        e1.style.display = "none";
    }
}
</script>

<script>
function showMe2(e) {
    var strdisplay = e.options[e.selectedIndex].value;
    var e = document.getElementById("idShowMe3");
	var e1 = document.getElementById("idShowMe4");
	var e2 = document.getElementById("idShowMe5");
	var e3 = document.getElementById("idShowMe6");
    if(strdisplay == "1st year") {
        e.style.display = "block";
    } else {
        e.style.display = "none";
    }
	if(strdisplay == "2nd year") {
        e1.style.display = "block";
    } else {
        e1.style.display = "none";
    }
	 if(strdisplay == "3rd year") {
        e2.style.display = "block";
    } else {
        e2.style.display = "none";
    }
	if(strdisplay == "4th year") {
        e3.style.display = "block";
    } else {
        e3.style.display = "none";
    }
}
</script>
	 
	 
	<!-----------------------------js-------------------------------------------------------------------------------------> 
	 
	 
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="course" style="float:right;">Course<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control " name="course" id="course" style="width:100%;" onchange="showMe(this);">
	<option>----------Select course---------</option>
	<option value="B.tech">B.Tech</option>
	<option value="M.tech">M.Tech</option>
	<option value="Phd">Phd</option>
	<option value="M.sc">M.sc</option>
	</select>
	</div>
  </div>
  
  
  <div id="idShowMe" style="display: none">
   <div class="form-group col-md-6" style="padding-bottom:10px;" >
    <div class="col-md-3"><label for="year"  style="float:right;">Year<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="byear" id="year" style="width:100%;" onchange="showMe2(this);" >
        <option>--Select year--</option>
		<option value="1st year">1st year</option>
        <option value="2nd year">2nd year</option>
        <option value="3rd year">3rd year</option>
        <option value="4th year">4th year</option>
      </select>
	</div>
  </div>
  </div>
  <div id="idShowMe2" style="display: none">
   <div class="form-group col-md-6" style="padding-bottom:10px;" >
    <div class="col-md-3"><label for="year"  style="float:right;">Year<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="myear" id="year" style="width:100%;" onchange="showMe2(this);" >
        <option>--Select year--</option>
		<option value="1st year">1st year</option>
        <option value="2nd year">2nd year</option>
        
      </select>
	</div>
  </div>
  </div>
  
  
  
  </div> 
	 
	 
	 
	 
	 <div class="row">
<div id="idShowMe3" style="display: none">
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semester<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="semister1" id="semister"  style="width:100%;">
        <option value="invalid">--------Select semester--------</option>
        <option value="1st semester">1st semester</option>
        <option value="2nd semester">2nd semester</option>
        
      </select>
	</div>
  </div>
 </div>
  
  <div id="idShowMe4" style="display: none">
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semester<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="semister2" id="semister"  style="width:100%;">
        <option value="invalid">--------Select semester--------</option>
        
        <option value="3rd semester">3rd semester</option>
		<option value="4th semester">4th semester</option>
		
      </select>
	</div>
  </div>
 </div>
 <div id="idShowMe5" style="display: none">
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semester<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="semister3" id="semister"  style="width:100%;">
        <option value="invalid">--------Select semester--------</option>
        
		<option value="5th semester">5th semester</option>
		<option value="6th semester">6th semester</option>
		
      </select>
	</div>
  </div>
 </div>
 <div id="idShowMe6" style="display: none">
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="semister"  style="float:right;">Semester<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="semister4" id="semister"  style="width:100%;">
        <option value="invalid">--------Select semester--------</option>
        
		<option value="7th semester">7th semester</option>
		<option value="8th semester">8th semester</option>
      </select>
	</div>
  </div>
 </div>
  
  
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="branch"  style="float:right;">Branch<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="branch" id="branch"  style="width:100%;">
                <option>------------select branch------------</option>
        <option value="cse">Computer Science And Engineering</option>
        <option value="ece">Electronics And Communication Engineering</option>
        <option value="eee">Electrical And Electronics Engineering</option>
		<option value="me">Mechanical Engineering</option>
		<option value="ce">Civil Engineering</option>
		<option value="bt">Biotechnology</option>
		<option value="math">Mathematics</option>
		<option value="phy">Physics</option>
		<option value="chem">Chemistry</option>
		<option value="sst">Humanities And Social Sciences</option>
      </select>
	</div>
  </div>
  
  </div> 
  
  
  
   <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="quota"  style="float:right;">Quota<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="quota" id="quota" style="width:100%;">
        <option>-----Choose Quota-----</option>
		<option value="Home State Quota">Home State Quota</option>
        <option value="Other State Quota">Other State Quota</option>
        
      </select>
	</div>
  </div>
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="AllotedCategory"  style="float:right;">Seat Alloted Category<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><select class="form-control" name="AllotedCategory" id="AllotedCategory" style="width:100%;">
        <option>-----Choose Category-----</option>
		<option value="general">General</option>
        <option value="obc">OBC</option>
        <option value="sc">SC</option>
        <option value="st">ST</option>
      </select>
	</div>
  </div>
  </div>
	 
	 
	 
 
	 
	
	  
 
	<!----------------------------------------end of 2nd line------------------------------------------------------------>
	
	<!--------------------------------------3rd line----------------------------------------------------------------->
	 




      <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="number"  style="float:right;">Mobile&nbspNo.<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="number" pattern="[6789][0-9]{9}" class="form-control" id="number" placeholder="Enter your mobile No." required></div>
  </div>
    <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="religion"  style="float:right;">Religion<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="religion" class="form-control" id="religion" placeholder="<?php  ?>" value="<?php  ?>" required></div>
  </div>
  </div>
  
  
  
  <div class="row">
  <div class="form-group col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="fname"  style="float:right;">Father's&nbspName<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your father's Name" required></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="fnumber"  style="float:right;">Father's mobile&nbspNo.<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-9"><input type="text" name="fnumber" pattern="[6789][0-9]{9}" class="form-control" id="fnumber" placeholder="Enter your father's mobile number." required></div>
  </div>
  
 
  </div>	 
	 
  
  
  
  
  
  
  
  
  
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="address"  style="float:right;">Residential&nbspaddress<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-10"><textarea rows="5" type="text" name="address" class="form-control" id="address" placeholder="Enter your residential address" required></textarea></div>
  </div>
  
  </div>
   <div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
    <div class="col-md-2"><label for="caddress"  style="float:right;">Corresponding address<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-10"><textarea rows="5" type="text" name="caddress" class="form-control" id="caddress" placeholder="Enter your corresponding address" required></textarea></div>
  </div>
  
  </div>


    <hr style="border-width: medium;border-color:#3C7570;">


     
	 
	 <div   style="text-align:center;color:#9E9EA7;" id="annon_head"><h2>Acedemic details</h2><hr style="border-width: medium;border-color:#3C7570;"></div>
	 
	 


	 
	
	<!-------------------------------------end of third line------------------------------------------------------------------------->
	<!------------------------------------acedemic and payment details---------------------------------------------------------------->
	<br>
	<div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="10" style="float:right;">10th&nbsp(%/CGPA)<span class="label">&nbsp</span>: </label></div>
    <div class="col-md-8"><input type="number" step="any" min="0" max="100" name="ten" class="form-control" id="10" placeholder="%age/CGPA" required></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="12" style="float:right;">12th&nbsp(%)<span class="label">&nbsp</span>: </label></div>
    <div class="col-md-9"><input type="number" step="any" min="0" max="100" name="twelve" class="form-control" id="12" placeholder="%age/CGPA" required></div>
  </div>
  
  </div>
  
  
  
  <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="mainroll" style="float:right;">JEE&nbspmain roll&nbspno.<span class="label">&nbsp</span>:</label></div>
    <div class="col-md-8"><input type="number" name="mainroll" class="form-control" id="mainroll" placeholder="JEE main roll no." required></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3"><label for="mainrank" style="float:right;">JEE&nbspmain rank: </label></div>
    <div class="col-md-9"><input type="number" name="mainrank" class="form-control" id="mainrank" placeholder="JEE main rank"></div>
  </div>
  
  </div>
  
  
  
  
   <div class="row">
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-4"><label for="advanceroll" style="float:right;">JEE&nbspadvance roll&nbspno.:</label></div>
    <div class="col-md-8"><input type="number" name="advanceroll" class="form-control" id="advanceroll" placeholder="JEE advance roll no." ></div>
  </div>
  
  <div class=" col-md-6" style="padding-bottom:10px;">
    <div class="col-md-3" style="padding-left:0px;"><label for="advancerank" style="float:right;">JEE&nbspadvance rank: </label></div>
    <div class="col-md-9"><input type="number" name="advancerank" class="form-control" id="advancerank" placeholder="JEE advance rank"></div>
  </div>
  
  </div>
  
  
  
  
  
  
 
	
	
	
	
	
	<!---------------------------------------------------------------------------------------------------------------------------------->
	<!---------------------------------------------course registered-------------------------------------------------------------------->
	
	 
	
	
	







	
	<!----------------------------------------------------------------------------------------------------------------------------------->
	
	
	
	
	
	<div class="col-md-12">
	   <br>
	   
    <div style="padding-left:45%;">
      <button type="submit" class="btn btn-primary">Submit</button>
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
