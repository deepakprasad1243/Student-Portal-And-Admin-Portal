
<!---for backlogs------------------------------------------------>
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
            <input type="checkbox" name="subject[]" value="MS4003{7}">
            </div>
		</td>
        <td>MS4003</td>
        <td>Economics</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC4011{7}">
            </div>
		</td>
		<td>EC4011</td>
        <td>Fundamentals of wireless Communication</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="{7}">
            </div>
		</td>
		<td></td>
        <td>Elective-III</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="{7}">
            </div>
		</td>
		<td></td>
        <td>Elective-IV</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC4091{7}">
            </div>
		</td>
		<td>EC4091</td>
        <td>Digital Processing Lab</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC4092{7}">
            </div>
		</td>
		<td>EC4092</td>
        <td>Digital Communication Lab</td>
        <td>2</td>
      </tr>
	         <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC4098{7}">
            </div>
    </td>
    <td>EC4098</td>
        <td>Major Project</td>
        <td>3</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
