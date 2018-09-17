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
    <?php include '2nd semester.php'; ?>
</div>

<!-------------------------------------------------------------->






<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>4th Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="MA14101{4}">
            </div>
		</td>
        <td>MA14101</td>
        <td>Mathematics-IV</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE14101{4}">
            </div>
		</td>
		<td>CE14101</td>
        <td>Structure Analysis-I</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE14102{4}">
            </div>
		</td>
		<td>CE14102</td>
        <td>Water Resources Engineering-I</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE14103{4}">
            </div>
		</td>
		<td>CE14103</td>
        <td>Surveying-II</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE14104{4}">
            </div>
		</td>
		<td>CE14104</td>
        <td>Transportation Engineering-I</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE14105{4}">
            </div>
		</td>
		<td>CE14105</td>
        <td>Geotechnical Engineering-I</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE14201{4}">
            </div>
		</td>
		<td>CE14201</td>
        <td>Concrete Technology Lab</td>
        <td>2</td>
      </tr>
    <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE14202{4}">
            </div>
    </td>
    <td>CE14202</td>
        <td>Surveying Practice- II</td>
        <td>2</td>
      </tr>      
    </tbody>
  </table>
</div>
</div><br>	
