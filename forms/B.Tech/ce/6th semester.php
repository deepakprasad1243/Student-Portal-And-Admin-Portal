
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
    <?php include '4th semester.php'; ?>
</div>

<!-------------------------------------------------------------->



<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>6th Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="CE16101{6}">
            </div>
		</td>
        <td>CE16101</td>
        <td>Structural Analysis -III</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE16102{6}">
            </div>
		</td>
        <td>CE16102</td>
        <td>Structural Design-II</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE16103{6}">
            </div>
		</td>
        <td>CE16103</td>
        <td>Environmental Engineering-II</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE16104{6}">
            </div>
		</td>
        <td>CE16104</td>
        <td>Water Resources Engineering-II</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE16105{6}">
            </div>
		</td>
        <td>CE16105</td>
        <td>Professional Communication</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE16201{6}">
            </div>
		</td>
        <td>CE16201</td>
        <td>Water Resources Engineering Lab</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE16202{6}">
            </div>
		</td>
        <td>CE16202</td>
        <td>Environmental Engineering Lab</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE16203{6}">
            </div>
		</td>
        <td>CE16203</td>
        <td>Fluid Mechanics Lab</td>
        <td>2</td>
      </tr>

    </tbody>
  </table>
</div>
</div><br>	
