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
            <input type="checkbox" name="subject[]" value="ME14101{4}">
            </div>
		</td>
		<td>ME14101</td>
        <td>Fluid Machinery</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME14102{4}">
            </div>
		</td>
		<td>ME14102</td>
        <td>Applied  Fluid Mechanics </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME14103{4}">
            </div>
		</td>
		<td>ME14103</td>
        <td>Basic Manufacturing Processes </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME14104{4}">
            </div>
		</td>
		<td>ME14104</td>
        <td>Principles of Heat Transfer </td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME14201{4}">
            </div>
		</td>
		<td>ME14201</td>
        <td>Fluid Mechanics & Fluid Machinery Laboratory</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME14202{4}">
            </div>
		</td>
		<td>ME14202</td>
        <td>Strength of Materials Laboratory</td>
        <td>2</td>
      </tr>
    <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME14203{4}">
            </div>
    </td>
    <td>ME14203</td>
        <td>Production Engineering Laboratory-I</td>
        <td>2</td>
      </tr>      
    </tbody>
  </table>
</div>
</div><br>	
