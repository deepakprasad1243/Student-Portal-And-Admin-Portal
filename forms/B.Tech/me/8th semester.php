
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
    <?php include '6th semester.php'; ?>
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
            <input type="checkbox" name="subject[]" value="HS18101{8}">
            </div>
    </td>
    <td>HS18101</td>
        <td>Engineering Economics</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME183XX{8}">
            </div>
		</td>
        <td>ME183XX</td>
        <td>Elective-III</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME183XX{8}">
            </div>
		</td>
		<td>ME183XX</td>
        <td>Elective-IV</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME18401{8}">
            </div>
		</td>
		<td>ME18401</td>
        <td>Major Project</td>
        <td>6</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
