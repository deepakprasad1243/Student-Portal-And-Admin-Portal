
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
            <input type="checkbox" name="subject[]" value="">
            </div>
    </td>
    <td></td>
        <td>Project Work- Phase-I</td>
        <td>-</td>
      </tr>      
      <tr>
	    <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC23401{3}">
            </div>
		</td>
        <td>EC23401</td>
        <td>Seminar & Viva-Voce</td>
        <td>10</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC23402{3}">
            </div>
		</td>
		<td>EC23402</td>
        <td>Dissertation & Thesis</td>
        <td>10</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="EC22242{3}">
            </div>
		</td>
		<td></td>
        <td>Evaluation of Internship (2nd  Sem)</td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
</div>
</div><br>	
