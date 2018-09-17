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
    <?php include '2nd semester.php'; ?>
</div>

<!-------------------------------------------------------------->






<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>4th Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="MA14101{4}">
            </div>
		</td>
        <td>MA14101</td>
        <td>Mathematics-IV</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT14101{4}">
            </div>
		</td>
		<td>BT14101</td>
        <td>Process Calculations</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT14102{4}">
            </div>
		</td>
		<td>BT14102</td>
        <td>Bioprocess Principles</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT14103{4}">
            </div>
		</td>
		<td>BT14103</td>
        <td>Cell Biology</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT14104{4}">
            </div>
		</td>
		<td>BT14104</td>
        <td>Molecular Biology</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT14105{4}">
            </div>
		</td>
		<td>BT14105</td>
        <td>Biostatistics</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT14106{4}">
            </div>
		</td>
		<td>BT14106</td>
        <td>Principal of Heat Transfer</td>
        <td>3</td>
      </tr>
         <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT14201{4}">
            </div>
		</td>
		<td>BT14201</td>
        <td>Bioprocess Laboratory</td>
        <td>2</td>
      </tr>
          <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT14202{4}">
            </div>
		</td>
		<td>BT14202</td>
        <td>Molecular Biology Laboratory</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
