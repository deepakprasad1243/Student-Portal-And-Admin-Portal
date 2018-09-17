
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
            <input type="checkbox" name="subject[]" value="CS17101{7}">
            </div>
		</td>
        <td>CS17101</td>
        <td>Criptography and Network Security </td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="HS17101{7}">
            </div>
		</td>
		<td></td>
        <td>HS17101</td>
        <td>Principle of Management and Entrepreneurship</td>
        <td>2</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS17201{7}">
            </div>
		</td>
		<td></td>
        <td>CS17201</td>
        <td>Criptography and Network Security Laboratory</td>
        <td>1</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS17401{7}">
            </div>
		</td>
		<td></td>
        <td>CS17401</td>
        <td>Summer Tranning (Carried out after VI Semester)</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS17402{7}">
            </div>
		</td>
		<td>CS17402</td>
        <td>Project (Literature Survey and problem formulation) </td>
        <td>4</td>
      </tr>
      <tr>
          <td><div style="padding-left:30%;">
              <input type="checkbox" name="subject[]" value="Elective-I{7}">
              </div>
      </td>
      <td></td>
          <td>Elective-I</td>
          <td>4</td>
        </tr>
        <tr>
            <td><div style="padding-left:30%;">
                <input type="checkbox" name="subject[]" value="Elective-II{7}">
                </div>
        </td>
        <td></td>
            <td>Elective-II</td>
            <td>4</td>
          </tr>
    </tbody>
  </table>
</div>
</div><br>
