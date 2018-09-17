
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
            <input type="checkbox" name="subject[]" value="HS17101{7}">
            </div>
		</td>
        <td>HS17101</td>
        <td>Principle of Management and Entrepreneurship </td>
        <td>2</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME17101{7}">
            </div>
		</td>
		<td>ME17101</td>
        <td>Refrigeration and Air Conditioning </td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME17102{7}">
            </div>
		</td>
		<td>ME17102</td>
        <td>Operations Research </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME173XX{7}">
            </div>
		</td>
		<td>ME173XX</td>
        <td>Elective-II</td>
        <td>3</td>
      </tr>
	<tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME17201{7}">
            </div>
		</td>
		<td>ME17201</td>
        <td>Heat Engines Laboratory</td>
        <td>2</td>
      </tr>
	<tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME17202{7}">
            </div>
		</td>
		<td>ME17202</td>
        <td>Metrology and Instrumentation Laboratory</td>
        <td>2</td>
      </tr>
	<tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME17401{7}">
            </div>
		</td>
		<td>ME17401</td>
        <td>Minor Project</td>
        <td>3</td>
      </tr>
	<tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME17402{7}">
            </div>
		</td>
		<td>ME17402</td>
        <td>Industrial Internship</td>
        <td>1</td>
      </tr>
  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME17403{7}">
            </div>
    </td>
    <td>ME17403</td>
        <td>Comprehensive Viva</td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
