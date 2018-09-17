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
    <?php include '4th semester.php'; ?>
</div>

<!-------------------------------------------------------------->







<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>6th Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="EE16101{6}">
            </div>
		</td>
        <td>EE16101</td>
        <td>Digital Signal Processing</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE16102{6}">
            </div>
		</td>
		<td>EE16102</td>
        <td>Power System-II</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE16103{6}">
            </div>
		</td>
		<td>EE16103</td>
        <td>Power Electronics</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-III{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-III </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-IV{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-IV</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE16201{6}">
            </div>
		</td>
		<td>EE16201</td>
        <td>Power Systems Laboratory</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE16202{6}">
            </div>
		</td>
		<td>EE16202</td>
        <td>Mini Project</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="{6}">
            </div>
		</td>
		<td></td>
        <td>Professional Communication</td>
        <td>2</td>
      </tr>
	  
    </tbody>
  </table>
</div>
</div><br>	

