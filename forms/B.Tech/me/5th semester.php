
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
            <input type="checkbox" name="subject[]" value="ME15101{5}">
            </div>
		</td>
        <td>ME15101</td>
        <td>Mechine Design-I</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME15102{5}">
            </div>
		</td>
        <td>ME15102</td>
        <td>Thermal Engineering-I</td>
        <td>3</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME15103{5}">
            </div>
		</td>
        <td>ME15103</td>
        <td>Theory of Metal Cutting</td>
        <td>3</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME15104{5}">
            </div>
		</td>
        <td>ME15104</td>
        <td>Machine Tool Design</td>
        <td>4</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME15105{5}">
            </div>
		</td>
        <td>ME15105</td>
        <td>Dynamics of Machinery</td>
        <td>3</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME15201{5}">
            </div>
		</td>
        <td>ME15201</td>
        <td>Heat Transfer Laboratory</td>
        <td>2</td>
      </tr>
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="ME15202{5}">
            </div>
		</td>
        <td>ME15202</td>
        <td>Production Engineering Laboratory -II</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
