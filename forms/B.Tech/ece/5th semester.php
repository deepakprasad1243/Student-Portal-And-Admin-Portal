<!---for backlogs------------------------------------------------>
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
            <input type="checkbox" name="subject[]" value="EC3011{5}">
            </div>
		</td>
        <td>EC3011</td>
        <td>Electronic Circuits-II</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3012{5}">
            </div>
		</td>
		<td>EC3012</td>
        <td>Digital Communication</td>
        <td>4</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3013{5}">
            </div>
		</td>
		<td>EC3013</td>
        <td>Digital Signal Processing</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3014{5}">
            </div>
		</td>
		<td>EC3014</td>
        <td>Control Sysytems</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="{5}">
            </div>
		</td>
		<td></td>
        <td>Elective-I
</td>
        <td>3</td>
      </tr>
          <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3091{5}">
            </div>
		</td>
		<td>EC3091</td>
        <td>Electronic Circuits Lab-II
</td>
        <td>2</td>
      </tr>
           <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3092{5}">
            </div>
		</td>
		<td>EC3092</td>
        <td>Microprocessors and Microcontrollers Lab
</td>
        <td>2</td>
      </tr>
	        <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC3024{5}">
            </div>
    </td>
    <td>EC3024</td>
        <td>Environmental studies fir Electronics Engineering
</td>
        <td>3</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	

