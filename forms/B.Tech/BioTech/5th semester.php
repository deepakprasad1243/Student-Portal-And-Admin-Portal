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
            <input type="checkbox" name="subject[]" value="BT15101{5}">
            </div>
		</td>
        <td>BT15101</td>
        <td>Immunotechnology</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT15102{5}">
            </div>
		</td>
		<td>BT15102</td>
        <td>Bioreactor Design and Analysis</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT15103{5}">
            </div>
		</td>
		<td>BT15103</td>
        <td>Downstream Processing</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT15104{5}">
            </div>
		</td>
		<td>BT15104</td>
        <td>Instrumental Methods &  Analysis for Biotechnology
 </td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT15105{5}">
            </div>
		</td>
		<td>BT15105</td>
        <td>Genetic Engineering
</td>
        <td>3</td>
      </tr>
          <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT15201{5}">
            </div>
		</td>
		<td>BT15201</td>
        <td>Immuno Technology  Laboratory
</td>
        <td>3</td>
      </tr>
           <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="BT15202{5}">
            </div>
		</td>
		<td>BT15102</td>
        <td>Downstream Processing Laboratory
</td>
        <td>3</td>
      </tr>
	  
    </tbody>
  </table>
</div>
</div><br>	

