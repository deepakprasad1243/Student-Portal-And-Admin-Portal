
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
            <input type="checkbox" name="subject[]" value="">
            </div>
		</td>
        <td></td>
        <td>Project Work- Phase-II</td>
        <td>-</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC24401{4}">
            </div>
		</td>
		<td>EC24401</td>
        <td>Final Seminar and Viva Voce</td>
        <td>10</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC24402{4}">
            </div>
		</td>
		<td>EC24402</td>
        <td>Dissertation& Thesis</td>
        <td>10</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
