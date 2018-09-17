
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
            <input type="checkbox" name="subject[]" value="CY23101{3}">
            </div>
		</td>
        <td>CY23101</td>
        <td>Organic Chemistry–III</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CY23102{3}">
            </div>
		</td>
		<td>CY23102</td>
        <td>Inorganic Chemistry–III</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CY23103{3}">
            </div>
		</td>
		<td>CY23103</td>
        <td>Physical Chemistry–III</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CY23104{3}">
            </div>
		</td>
		<td>CY23104</td>
        <td>Spectroscopy–II</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CY2330W{3}">
            </div>
		</td>
		<td>CY2330W</td>
        <td>Elective-I</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CY23201{3}">
            </div>
		</td>
		<td>CY23201</td>
        <td>Physical Chemistry Laboratory & Computational Laboratory</td>
        <td>6</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CY23202{3}">
            </div>
		</td>
		<td>CY23202</td>
        <td>Mini Project 4</td>
        <td>4</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
