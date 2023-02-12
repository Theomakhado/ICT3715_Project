<?php 
$title = "Staff | Student Information";
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
<h2>My Student Information</h2>
<!--code here-->
<div id="printSection" >
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>Student Number</td>
<td>Full Name</td>
<td>Email</td>
</tr>";
//start SQL query
$staffNum = $_SESSION["staffnumber"];
$stmt = $conn->prepare("SELECT studentinfo.studentnumber, studentname, email
FROM studentinfo, moduleleader, studentmodule 
WHERE moduleleader.StaffNumber = $staffNum
AND moduleleader.ModuleCode = studentmodule.ModuleCode
AND studentmodule.StudentNumber = studentinfo.studentnumber
ORDER BY studentname, studentinfo.studentnumber");
$stmt->execute();
$students = $stmt->fetchAll();
//end SQL query
//start foreach loop to get information from the table
foreach($students as $student)
{
?>
<tr class='danger'><td>
<?php echo $student['studentnumber']; ?>
</td>
<td>
<?php echo $student['studentname']; ?>
</td>
<td>
<?php echo $student['email']; ?>
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