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
            <input type="checkbox" name="subject[]" value="CE13101{3}">
            </div>
		</td>
		<td>CE13101</td>
        <td>Mechanics of Solids</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE13102{3}">
            </div>
		</td>
		<td>CE13102</td>
        <td>Fluid Mechanics with Application</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE13103{3}">
            </div>
		</td>
		<td>CE13103</td>
        <td>Concrete Technology</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE13104{3}">
            </div>
		</td>
		<td>CE13104</td>
        <td>Surveying-I</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE13201{3}">
            </div>
		</td>
		<td>CE13201</td>
        <td>Surveying Practice- I</td>
        <td>2</td>
      </tr>
    <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE13202{3}">
            </div>
    </td>
    <td>CE13202</td>
        <td>Strength of Metrial Lab</td>
        <td>2</td>
      </tr>      
    </tbody>
  </table>
</div>
</div><br>	
