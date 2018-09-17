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
            <input type="checkbox" name="subject[]" value="EE13101{3}">
            </div>
		</td>
		<td>EE13101</td>
        <td>Signals & Systems</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE13102{3}">
            </div>
		</td>
		<td>EE13102</td>
        <td>Circuit and Networks</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE13103{3}">
            </div>
		</td>
		<td>EE13103</td>
        <td>Electrical and Electronics Measurements</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE13104{3}">
            </div>
		</td>
		<td>EE13104</td>
        <td>Basic Electronic Circuits</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE13201{3}">
            </div>
		</td>
		<td>EE13201</td>
        <td>Basic Electrical Engineering Laboratory</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE13202{3}">
            </div>
		</td>
		<td>EE13202</td>
        <td>Electronics Laboratory-I</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE13203{3}">
            </div>
		</td>
		<td>EE13203</td>
        <td>Measurements Laboratory</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
