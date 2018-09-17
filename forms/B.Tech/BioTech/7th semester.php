
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
  <h3>8th Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="HS17011{7}">
            </div>
		</td>
        <td>HS17011</td>
        <td>Principles of Management & Enterprenuership</td>
        <td>2</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT17101{7}">
            </div>
		</td>
		<td>BT17101</td>
        <td>Ethics  & Regulatory Issues in Biotechnology</td>
        <td>2</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT17102{7}">
            </div>
		</td>
		<td>BT17102</td>
        <td>Structural Biology </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT1730V{7}">
            </div>
		</td>
		<td>BT1730V</td>
        <td>Elective-II</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT1730W{7}">
            </div>
		</td>
		<td>BT1730W</td>
        <td>Elective-III</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT17401{7}">
            </div>
		</td>
		<td>BT17401</td>
        <td>Project Phase-I</td>
        <td>3</td>
      </tr>
	 
    </tbody>
  </table>
</div>
</div><br>	
