
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
            <input type="checkbox" name="subject[]" value="CS18101{8}">
            </div>
		</td>
        <td>CS18101</td>
        <td>Paraller Distributed Computing </td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="HS18101{8}">
            </div>
		</td>
		<td></td>
        <td>HS18101</td>
        <td>Engineering </td>
        <td>2</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS18401{8}">
            </div>
		</td>
		<td></td>
        <td>CS18401</td>
        <td>Composite Viva-Voce</td>
        <td>1</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS18402{8}">
            </div>
		</td>
		<td></td>
        <td>CS18402</td>
        <td>Project</td>
        <td>5</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="Elective-III{8}">
            </div>
		</td>
		<td></td>
        <td>Elective-III</td>
        <td>4</td>
      </tr>

      <tr>
          <td><div style="padding-left:30%;">
              <input type="checkbox" name="subject[]" value="Elective-IV{8}">
              </div>
  		</td>
  		<td></td>
          <td>Elective-IV</td>
          <td>4</td>
        </tr>

    </tbody>
  </table>
</div>
</div><br>
