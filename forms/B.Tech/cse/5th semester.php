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
            <input type="checkbox" name="subject[]" value="CS15101{6}">
            </div>
		</td>
        <td>CS15101</td>
        <td>Theory of Computation</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS15102{6}">
            </div>
		</td>
		<td>CS15102</td>
        <td>Database Management System</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS15103{6}">
            </div>
		</td>
		<td>CS15103</td>
        <td>Operating System</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS15104{6}">
            </div>
		</td>
		<td>CS15104</td>
        <td>Design and Analysis of Algorithim</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC15102{6}">
            </div>
		</td>
		<td>EC15102</td>
        <td>Microprocessors and Microcontroller</td>
        <td>3</td>
      </tr>
      <tr>
          <td><div style="padding-left:30%;">
              <input type="checkbox" name="subject[]" value="CS15201{6}">
              </div>
     </td>
     <td>CS15201</td>
          <td>DBMS Laboratory</td>
          <td>1</td>
        </tr>
        <tr>
            <td><div style="padding-left:30%;">
                <input type="checkbox" name="subject[]" value="CS15202{6}">
                </div>
       </td>
       <td>CS15202</td>
            <td>Operating System Laboratory</td>
            <td>1</td>
          </tr>
          <tr>
              <td><div style="padding-left:30%;">
                  <input type="checkbox" name="subject[]" value="EC15202{6}">
                  </div>
         </td>
         <td>EC15202</td>
              <td>Microprocessors and Microcontroller Laboratory</td>
              <td>1</td>
            </tr>

    </tbody>
  </table>
</div>
</div><br>
