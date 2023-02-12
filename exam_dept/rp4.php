<?php 
$title = "Report 4";
include("header.php"); 
?>

<!--code here-->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="brand">
<div class="box">
<div class="text-center" style="color: black;">
<h1>Infromation Report 4</h1>
<h3>Modules and Lecturer Information</h3>
<!--code here-->
<div id="printSection" >
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<th>Module Code</th>
<th>Module Description</th>
<th>Lecturer Name</th>
<th>Email</th>
<th>Date of Exam</th>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT Distinct(moduleleader.ModuleCode), ModDesc, name, email, DateExam 
FROM moduleleader, moduleinfo, staffinfo, examsetup 
WHERE moduleleader.ModuleCode = moduleinfo.ModCode
AND examsetup.ModuleCode = moduleinfo.ModCode
AND moduleleader.StaffNumber = staffinfo.StaffNumber
ORDER BY ModuleCode");
$stmt->execute();
$modules = $stmt->fetchAll();
//end SQL query
//start foreach loop to get information from the table
foreach($modules as $module){
?>
<tr class='danger'><td>
<?php echo $module['ModuleCode']; ?>
</td>
<td>
<?php echo $module['ModDesc']; ?>
</td>
<td>
<?php echo $module['name']; ?>
</td>
<td>
<?php echo $module['email']; ?>
</td>
<td>
<?php echo $module['DateExam']; ?>
</td>
<?php
}
?>
</tbody>
</table>    
<!--end display table-->  
</p>
</div>
<p><input class="btn btn-default btn-lg" type='button' value='Print Data' onclick="PrintDoc();"/>
<input class="btn btn-default btn-lg" type='button' value='Print Preview' onclick="PrintPreview();"/></p>
</div>
</div>	
<br>
</div>			
</div>
</div>
</div>
</div>
</div>

<?php include("footer.php"); ?>