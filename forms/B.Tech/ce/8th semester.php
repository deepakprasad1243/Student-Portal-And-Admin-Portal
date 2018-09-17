
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
            <input type="checkbox" name="subject[]" value="CE18101{8}">
            </div>
		</td>
        <td>CE18101</td>
        <td>Construction Technology and Project Management</td>
        <td>4</td>
      </tr>
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
            <input type="checkbox" name="subject[]" value="CE18401{8}">
            </div>
		</td>
		<td>CE18401</td>
        <td>Project (Part-II) and Seminar</td>
        <td>8</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CE18402{8}">
            </div>
		</td>
		<td>CE18402</td>
        <td>Final Viva-Voce</td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
