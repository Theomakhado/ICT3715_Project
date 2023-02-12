<?php
$title = "Student Dashboard | Take Exam";
include('header.php');
?>

<!-- intro area -->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-md-10">
<div class="brand">
<div class="text-center" style="font-size: 14pt; color: black;">
<div class="col-md-10">
<h3>Take Exam</h3>
<br/>
<div id="container">
<table class="table table-bordered table-condensed">
<thead>
<tr class="warning">
<th>Module Code</th>
<th>Module Description</th>
<th>Take Exam</th>
</tr>
</thead>
<tbody>
<?php 
$studNum =  $_SESSION["studentnumber"]; 
$stmt1 = $conn->prepare("SELECT ModuleCode FROM studentmodule WHERE StudentNumber = '$studNum'");
$stmt1->execute();
$modules1 = $stmt1->fetchAll();
foreach($modules1 as $module1){
//echo $module1['ModuleCode']. "<br/>"; 
}
$mod1 = $module1['ModuleCode'];
$stmt = $conn->prepare("SELECT examsetup.ModuleCode, ModDesc 
FROM examsetup, moduleinfo 
WHERE examsetup.ModuleCode = moduleinfo.ModCode 
AND DateExam = CURRENT_DATE
ORDER BY ModuleCode");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module)
{
?>
<tr>
<td><?php echo $module['ModuleCode']; ?></td>
<td><?php echo $module['ModDesc']; ?></td>
<td>
<a style="color: red;" href="downloadPapers/<?php echo $module['ModuleCode'];?>_Exam.pdf" target="_blank">Download Exam | 
<?php echo $module['ModuleCode']; ?></a>
</td>
<?php
}
?>
</tbody>
</table>
</div>

</div>
<div class="clearfix"></div>
<br><br/>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include('footer.php');
?>