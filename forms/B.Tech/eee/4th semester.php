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
            <input type="checkbox" name="subject[]" value="EE14101{4}">
            </div>
		</td>
		<td>EE14101</td>
        <td>Digital Electronics</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE14102{4}">
            </div>
		</td>
		<td>EE14102</td>
        <td>Applied Electromagnetics</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE14103{4}">
            </div>
		</td>
		<td>EE14103</td>
        <td>Electrical Machines-I</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE14104{4}">
            </div>
		</td>
		<td>EE14104</td>
        <td>Analog Electronic Circuits & Systems</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE14105{4}">
            </div>
		</td>
		<td>EE14105</td>
        <td>Power Plant Engineering</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE14201{4}">
            </div>
		</td>
		<td>EE14201</td>
        <td>Electronics Laboratory-II</td>
        <td>2</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE14202{4}">
            </div>
		</td>
		<td>EE14202</td>
        <td>Electrical Machines Laboratory-I</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
