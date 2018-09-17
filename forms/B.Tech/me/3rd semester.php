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
            <input type="checkbox" name="subject[]" value="MA13101{3}">
            </div>
		</td>
        <td>MA13101</td>
        <td>Mathematics-III</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME13101{3}">
            </div>
		</td>
		<td>ME13101</td>
        <td>Mechanics of Fluids</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME13102{3}">
            </div>
		</td>
		<td>ME13102</td>
        <td>Elements of Solid Mechanics</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME13103{3}">
            </div>
		</td>
		<td>ME13103</td>
        <td>Thermodynamics</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME13104{3}">
            </div>
		</td>
		<td>ME13104</td>
        <td>Materials Science and Metallurgy</td>
        <td>3</td>
      </tr>
    <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME13105{3}">
            </div>
    </td>
    <td>ME13105</td>
        <td>Electrical Measurements and Machines </td>
        <td>3</td>
      </tr>
    <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME13201{3}">
            </div>
		</td>
		<td>ME13201</td>
        <td>Machine Drawing</td>
        <td>2</td>
      </tr>
    <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME13202{3}">
            </div>
    </td>
    <td>ME13202</td>
        <td>Electrical Measurements and Machines Laboratory</td>
        <td>2</td>
      </tr>      
    </tbody>
  </table>
</div>
</div><br>	
