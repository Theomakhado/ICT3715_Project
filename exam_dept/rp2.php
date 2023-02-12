<?php 
$title = "Report 2";
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
<h1>Weekly Report 2</h1>
<h3>Count No of Students Registered per Module</h3>
<!--code here-->
<div id="printSection" >
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>Module Code</td>
<td>Module Description</td>
<td>No of Students</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT studentmodule.ModuleCode, ModDesc, 
count(studentmodule.ModuleCode) as NoOfStudentRegistered 
FROM studentmodule, moduleinfo
WHERE studentmodule.ModuleCode = moduleinfo.ModCode
GROUP BY studentmodule.ModuleCode
HAVING COUNT(ModuleCode) > 1");
$stmt->execute();
$modules = $stmt->fetchAll();
//end SQL query
//start while loop to get information from the table
foreach($modules as $module){
?>
<tr class='danger'><td>
<?php echo $module['ModuleCode']; ?>
</td>
<td>
<?php echo $module['ModDesc']; ?>
</td>
<td>
<?php echo $module['NoOfStudentRegistered']; ?>
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