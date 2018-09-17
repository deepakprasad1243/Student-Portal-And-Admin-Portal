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
    <?php include '1st semester.php'; ?>
</div>

<!-------------------------------------------------------------->






<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>3rd Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="MA13101{3}">
            </div>
		</td>
        <td>MA13101</td>
        <td>Mathematics-III</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT13101{3}">
            </div>
		</td>
		<td>BT13101</td>
        <td>Advance Chemistry for Biotechnology</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT13102{3}">
            </div>
		</td>
		<td>BT13102</td>
        <td>Microbiology</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT13103{4}">
            </div>
		</td>
		<td>BT13103</td>
        <td>Biochemistry</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT13104{4}">
            </div>
		</td>
		<td>BT13104</td>
        <td>Thermodynamics in Biology</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT13105{4}">
            </div>
		</td>
		<td>BT13105</td>
        <td>Fluid Mechanics</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT13201{4}">
            </div>
		</td>
		<td>BT13201</td>
        <td>Microbiology Laboratory</td>
        <td>2</td>
      </tr>
         <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT13202{4}">
            </div>
		</td>
		<td>BT13202</td>
        <td>Biochemistry Laboratory</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
