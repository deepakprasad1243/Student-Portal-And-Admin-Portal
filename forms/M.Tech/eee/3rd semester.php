
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
  <h3>3rd Semester</h3>
              
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
            <input type="checkbox" name="subject[]" value="EE23201">
            </div>
    </td>
    <td>EE23201</td>
        <td>Dissertation Phase-I </td>
        <td>20</td>
      </tr>      
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EE23401{3}">
            </div>
		</td>
        <td>EE23401</td>
        <td>Seminar-I</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
