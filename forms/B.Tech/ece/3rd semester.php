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
    <?php include '1st semester.php'; ?>
</div>

<!---------------------------------------------------------------->






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
            <input type="checkbox" name="subject[]" value="MA2001{3}">
            </div>
		</td>
        <td>MA2001</td>
        <td>Mathematics-III</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC2011{3}">
            </div>
		</td>
		<td>EC2011</td>
        <td>Network Theory</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC2012{3}">
            </div>
		</td>
		<td>EC2012</td>
        <td>Logical Design</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC2013{3}">
            </div>
		</td>
		<td>EC2013</td>
        <td>Solid State Devices</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC2014{3}">
            </div>
		</td>
		<td>EC2014</td>
        <td>Signals and Systems</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC2091{3}">
            </div>
		</td>
		<td>EC2091</td>
        <td>Basic Electronics Lab</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC2092{3}">
            </div>
		</td>
		<td>EC2092</td>
        <td>Electronics Workshop</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
