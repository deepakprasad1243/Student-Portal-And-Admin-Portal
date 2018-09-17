
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
            <input type="checkbox" name="subject[]" value="HS18101{8}">
            </div>
		</td>
        <td>HS18101</td>
        <td>Engineering  Economics</td>
        <td>2</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT1830X{8}">
            </div>
		</td>
		<td>BT1830X</td>
        <td>Elective-IV</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT1830Y{8}">
            </div>
		</td>
		<td>BT1830Y</td>
        <td>Elective-V</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT1830Z{8}">
            </div>
		</td>
		<td>BT1830Z</td>
        <td>Elective-VI</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT18401{8}">
            </div>
		</td>
		<td>BT18401</td>
        <td>Project Phase-II</td>
        <td>5</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT18402{8}">
            </div>
		</td>
		<td>BT18402</td>
        <td>Seminar</td>
        <td></td>
      </tr>
	 
    </tbody>
  </table>
</div>
</div><br>	
