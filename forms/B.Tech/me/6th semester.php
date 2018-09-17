
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
            <input type="checkbox" name="subject[]" value="ME16101{6}">
            </div>
		</td>
        <td>ME16101</td>
        <td>Thermal Engineering-II</td>
        <td>3</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME16102{6}">
            </div>
		</td>
        <td>ME16102</td>
        <td>Metrology and Instrumentation</td>
        <td>3</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME16103{6}">
            </div>
		</td>
        <td>ME16103</td>
        <td>Machine Design-II</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME163XX{6}">
            </div>
		</td>
        <td>ME163XX</td>
        <td>Elective-I</td>
        <td>3</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="HS16101{6}">
            </div>
		</td>
        <td>HS16101</td>
        <td>Professional Communication</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME16401{6}">
            </div>
		</td>
        <td>ME16401</td>
        <td>Seminar</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME16201{6}">
            </div>
		</td>
        <td>ME16201</td>
        <td>Dynamics of Machine Laboratory</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME16202{6}">
            </div>
		</td>
        <td>ME16202</td>
        <td>Production Engineering Laboratory-II</td>
        <td>2</td>
      </tr>

    </tbody>
  </table>
</div>
</div><br>	
