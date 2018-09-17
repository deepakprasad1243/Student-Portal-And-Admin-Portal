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
    <?php include '5th semester.php'; ?>
</div>

<!-------------------------------------------------------------->







<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>7th Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="">
            </div>
		</td>
        <td></td>
        <td>Principles of Management and Entrepreneurship</td>
        <td>2</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE17101{7}">
            </div>
		</td>
		<td>EE17101</td>
        <td>Control Systems -II</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE17102{7}">
            </div>
		</td>
		<td>EE17102</td>
        <td>Electrical Drives</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-V{7}">
            </div>
		</td>
		<td></td>
        <td>Elective-V </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-VI{7}">
            </div>
		</td>
		<td></td>
        <td>Elective-VI</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE16201{6}">
            </div>
		</td>
		<td>EE17201</td>
        <td>Power Electronics and Drives Laboratory</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE17202{7}">
            </div>
		</td>
		<td>EE17202</td>
        <td>Control Systems Laboratory</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE17203{6}">
            </div>
		</td>
		<td>EE17203</td>
        <td>Project</td>
        <td>2</td>
      </tr>
	  
    </tbody>
  </table>
</div>
</div><br>	

