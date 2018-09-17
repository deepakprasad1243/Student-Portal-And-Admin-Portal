<!---for backlogs----------------------------------------------->
<script>
function showMe(e) {
    var strdisplay = e.options[e.selectedIndex].value;
    var e = document.getElementById("idShowMe");
    if(strdisplay == "No Backlogs") {
        e.style.display = "none";
    } else {
        e.style.display = "block";
    }
}
</script>


<div id="idShowMe" style="display: none">
    <?php include '3rd semester.php'; ?>
</div>

<!-------------------------------------------------------------->







<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>5th Semester</h3>
              
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
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE15101{5}">
            </div>
		</td>
        <td>EE15101</td>
        <td>Microprocessors & Microcontrollers</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE15102{5}">
            </div>
		</td>
		<td>EE15102</td>
        <td>Control System-I</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE15103{5}">
            </div>
		</td>
		<td>EE15103</td>
        <td>Electrical Machines-II</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE15104{5}">
            </div>
		</td>
		<td>EE15104</td>
        <td>Power Systems-I</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-I{5}">
            </div>
		</td>
		<td></td>
        <td>Elective-I</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-II{5}">
            </div>
		</td>
		<td></td>
        <td>Elective-II</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE15201{5}">
            </div>
		</td>
		<td>EE15201</td>
        <td>Embedded Systems Laboratory</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE15202{5}">
            </div>
		</td>
		<td>EE15202</td>
        <td>Electrical Machines Laboratory-II</td>
        <td>2</td>
      </tr>
	  
    </tbody>
  </table>
</div>
</div><br>	

