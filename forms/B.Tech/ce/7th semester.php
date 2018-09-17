
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
            <input type="checkbox" name="subject[]" value="CE1730X{7}">
            </div>
		</td>
        <td>CE1730X</td>
        <td>Elective-I</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE1730X{7}">
            </div>
		</td>
		<td>CE1730X</td>
        <td>Elective-II</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE1730X{7}">
            </div>
		</td>
		<td>CE1730X</td>
        <td>Elective-II</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE1730X{7}">
            </div>
		</td>
		<td>CE1730X</td>
        <td>Elective-III</td>
        <td>3</td>
      </tr>
	<tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE1730X{7}">
            </div>
		</td>
		<td>CE1730X</td>
        <td>Elective-IV(CE/Open)</td>
        <td>3</td>
      </tr>
	<tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="HS17101{7}">
            </div>
		</td>
		<td>HS17101</td>
        <td>Principle of Management and Enterpreneurship</td>
        <td>2</td>
      </tr>
	<tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE17201{7}">
            </div>
		</td>
		<td>CE17201</td>
        <td>Computer Application in Civil Engineering</td>
        <td>4</td>
      </tr>
	<tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE17401{7}">
            </div>
		</td>
		<td>CE17401</td>
        <td>Project (Part-I) and Seminar</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
