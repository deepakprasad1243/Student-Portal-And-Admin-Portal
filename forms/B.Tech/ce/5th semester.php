
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
    <?php include '3rd semester.php'; ?>
</div>

<!-------------------------------------------------------------->



<div class="row">
  <div class=" col-md-12" style="padding-bottom:10px;">
  <h3>5th Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="CE15101{5}">
            </div>
		</td>
        <td>CE15101</td>
        <td>Structure Analysis II</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE15102{5}">
            </div>
		</td>
        <td>CE15102</td>
        <td>Structure Design I</td>
        <td>3</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE15103{5}">
            </div>
		</td>
        <td>CE15103</td>
        <td>Geotechnical Engineering-II</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE15104{5}">
            </div>
		</td>
        <td>CE15104</td>
        <td>Transportation Engineering-II</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE15105{5}">
            </div>
		</td>
        <td>CE15105</td>
        <td>Evnironmental Engineering-I</td>
        <td>3</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE15201{5}">
            </div>
		</td>
        <td>CE15201</td>
        <td>Geotechnical Engineering Lab</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE15202{5}">
            </div>
		</td>
        <td>CE15202</td>
        <td>Transportation Engineering Lab</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE15203{5}">
            </div>
		</td>
        <td>CE15203</td>
        <td>CE Planning, Estimation and Drawing</td>
        <td>3</td>
      </tr>

    </tbody>
  </table>
</div>
</div><br>	
