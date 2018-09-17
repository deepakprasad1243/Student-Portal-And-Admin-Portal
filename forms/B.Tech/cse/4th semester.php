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
            <input type="checkbox" name="subject[]" value="CS14101{4}">
            </div>
		</td>
		<td>CS14101</td>
        <td>Computer Organization Architecture</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS14102{4}">
            </div>
		</td>
		<td>CS14102</td>
        <td>Computer Networks</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS14103{4}">
            </div>
		</td>
		<td>CS14103</td>
        <td>Graph Theory and Combinatories</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC14101{4}">
            </div>
		</td>
		<td>EC14101</td>
        <td>Digital Electronics</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS14201{4}">
            </div>
		</td>
		<td>CS14201</td>
        <td>Computer Organization Architecture  Laboratory </td>
        <td>1</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS14201{4}">
            </div>
		</td>
		<td>CS14201</td>
        <td>Computer Networks Laboratory</td>
        <td>1</td>
      </tr>
      <tr>
          <td><div style="padding-left:30%;">
              <input type="checkbox" name="subject[]" value="EC14201{4}">
              </div>
     </td>
     <td>EC14201</td>
          <td>Digital Electronics Laboratory</td>
          <td>1</td>
        </tr>
        <tr>
            <td><div style="padding-left:30%;">
                <input type="checkbox" name="subject[]" value="CS14401{4}">
                </div>
       </td>
       <td>CS14401</td>
            <td>Composite Viva-Voce</td>
            <td>1</td>
          </tr>
    </tbody>
  </table>
</div>
</div><br>
