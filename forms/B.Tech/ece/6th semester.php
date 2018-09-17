<!---for backlogs-----------ME4104------------------------------>
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
            <input type="checkbox" name="subject[]" value="ME4104{6}">
            </div>
		</td>
        <td>ME4104</td>
        <td>Principles of Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3021{6}">
            </div>
		</td>
		<td>EC3021</td>
        <td>Computer Organiztion & Architecture</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3022{6}">
            </div>
		</td>
		<td>EC3022</td>
        <td>Information Theory </td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3023{6}">
            </div>
		</td>
		<td>EC3023</td>
        <td>Computer Networks</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="{6}">
            </div>
		</td>
		<td></td>
        <td>Elective-II</td>
        <td>3</td>
      </tr>
	   <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3093{6}">
            </div>
		</td>
		<td>EC3093</td>
        <td>Analog Communication Lab</td>
        <td>2</td>
      </tr>
           <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3009{6}">
            </div>
		</td>
		<td>EC3009</td>
        <td>Mini Project</td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	

