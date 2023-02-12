<?php 
$title = "Report 3";
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
<h1>Extra Report 3</h1>
<h3>Different Reports</h3>
<!--code here-->
<div id="printSection">
<p>
<h5>Count # of Students</h5><br/>
<?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>No of Student</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT count(*) as NumberOfStudent
FROM studentinfo");
$stmt->execute();
$modules = $stmt->fetchAll();
//end SQL query
//start foreach loop to get information from the table
foreach($modules as $module){
?>
<tr class='danger'><td>
<?php echo $module['NumberOfStudent']; ?>
</td>
<?php
}
?>
</tbody>
</table>    
<!--end display table-->  
</p>
<p>
<h5>Count # of Lecturer</h5><br/>
<?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>No of Lecturer</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT count(*) as NumberOfLecturer
FROM staffinfo");
$stmt->execute();
$modules = $stmt->fetchAll();
//end SQL query
//start foreach loop to get information from the table
foreach($modules as $module){
?>
<tr class='danger'><td>
<?php echo $module['NumberOfLecturer']; ?>
</td>
<?php
}
?>
</tbody>
</table>    
<!--end display table-->  
</p>
<p>
<h5>Count # of Module</h5><br/>
<?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='active'>
<td>No of Modules</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT count(*) as NumberOfModule
FROM moduleinfo");
$stmt->execute();
$modules = $stmt->fetchAll();
//end SQL query
//start foreach loop to get information from the table
foreach($modules as $module){
?>
<tr class='danger'><td>
<?php echo $module['NumberOfModule']; ?>
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