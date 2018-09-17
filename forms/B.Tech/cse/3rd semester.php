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
            <input type="checkbox" name="subject[]" value="MA13101{3}">
            </div>
		</td>
        <td>MA13101</td>
        <td>Mathematics-III</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS13102{3}">
            </div>
		</td>
		<td>CS13102</td>
        <td>JAVA programming</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS13101{3}">
            </div>
		</td>
		<td>CS13101</td>
        <td>Data Structures and Algorithms</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS13103{3}">
            </div>
		</td>
		<td>CS13103</td>
        <td>Computer Graphics</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS13104{3}">
            </div>
		</td>
		<td>CS13104</td>
        <td>Discrete Mathematics</td>
        <td>3</td>
      </tr>
      <tr>
          <td><div style="padding-left:30%;">
              <input type="checkbox" name="subject[]" value="CS13203{3}">
              </div>
  		</td>
  		<td>CS13203</td>
          <td>Computer Graphics Laboratory</td>
          <td>1</td>
        </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS13201{3}">
            </div>
		</td>
		<td>CS13201</td>
        <td>Data Structure Algorithm Laboratory</td>
        <td>1</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS13202{3}">
            </div>
		</td>
		<td>CS13202</td>
        <td>JAVA programming Laboratory </td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>
