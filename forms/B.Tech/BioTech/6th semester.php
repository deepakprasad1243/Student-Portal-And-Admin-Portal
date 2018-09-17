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
            <input type="checkbox" name="subject[]" value="HS16101{6}">
            </div>
		</td>
        <td>HS16101</td>
        <td>Professional Communication </td>
        <td>2</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT16101{6}">
            </div>
		</td>
		<td>BT16101</td>
        <td>Bioinformatics  </td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT16102{6}">
            </div>
		</td>
		<td>BT16102</td>
        <td>System Biology  </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT16103{6}">
            </div>
		</td>
		<td>BT16103</td>
        <td>Enzyme Kinetics & Technology </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT16104{6}">
            </div>
		</td>
		<td>BT16104</td>
        <td>Environmental Biotechnology</td>
        <td>3</td>
      </tr>
	   <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT1630U{6}">
            </div>
		</td>
		<td>BT1630U</td>
        <td>Elective - I </td>
        <td>3</td>
      </tr>
           <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT16201{6}">
            </div>
		</td>
		<td>BT16201</td>
        <td>Enzyme Technology Laboratory</td>
        <td>2</td>
      </tr>
          <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT16202{6}">
            </div>
		</td>
		<td>BT16202</td>
        <td>Bioinformatics Laboratory</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	

