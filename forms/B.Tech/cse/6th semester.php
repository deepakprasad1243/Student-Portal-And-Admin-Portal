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
            <input type="checkbox" name="subject[]" value="CS16101{6}">
            </div>
		</td>
        <td>CS16101</td>
        <td>Compiler Design</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS16102{6}">
            </div>
		</td>
		<td></td>
        <td>CS16102</td>
        <td>Software Engineering</td>
        <td>3</td>
      </tr>
      <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS16103{6}">
            </div>
		</td>
		<td></td>
        <td>CS16103</td>
        <td>Artificial Intelligence</td>
        <td>4</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="CS16104{6}">
            </div>
		</td>
		<td></td>
        <td>Image Processing</td>
        <td>3</td>
      </tr>
	  <tr>
        <td><div style="padding-left:30%;">
            <input type="checkbox" name="subject[]" value="HS16101{6}">
            </div>
		</td>
		<td>HS16101</td>
        <td>Professional Communication </td>
        <td>2</td>
      </tr>

      <tr>
          <td><div style="padding-left:30%;">
              <input type="checkbox" name="subject[]" value="CS16201{6}">
              </div>
     </td>
     <td>CS16201</td>
          <td>Software Engineering Laboratory </td>
          <td>1</td>
        </tr>

        <tr>
            <td><div style="padding-left:30%;">
                <input type="checkbox" name="subject[]" value="CS16202{6}">
                </div>
       </td>
       <td>CS16202</td>
            <td>Compiler Design Laboratory </td>
            <td>1</td>
          </tr>

          <tr>
              <td><div style="padding-left:30%;">
                  <input type="checkbox" name="subject[]" value="CS16203{6}">
                  </div>
         </td>
         <td>CS16203</td>
              <td>Image Processing Laboratory </td>
              <td>1</td>
            </tr>

            <tr>
                <td><div style="padding-left:30%;">
                    <input type="checkbox" name="subject[]" value="Summer Tranning (to be Evaluated in VII Semester){6}">
                    </div>
           </td>
           <td></td>
                <td>Summer Tranning (to be Evaluated in VII Semester)</td>
                <td></td>
              </tr>

    </tbody>
  </table>
</div>
</div><br>
