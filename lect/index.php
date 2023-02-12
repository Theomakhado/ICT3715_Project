<?php
$title = "Lecturer Dashboard";
include('header.php');
?>

<!-- intro area -->
<div id="intro">
<br><br><br>
<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="brand">
<div class="text-center" style="font-size: 16pt; color: white;">
Welcome <?php echo $_SESSION["name"]; ?><br/><br/>
The module you handle is: 
<?php 
$staffNum =  $_SESSION["staffnumber"]; 
$stmt = $conn->prepare("SELECT ModuleCode, ModDesc 
FROM moduleleader, moduleinfo WHERE StaffNumber = '$staffNum'
AND ModCode = ModuleCode");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module){
echo $module['ModuleCode']. " - " . $module['ModDesc'] . "<br/>"; 
}
?><br/>
The number of students registered for your module is:
<?php
$link = mysqli_connect("localhost", "root", "", "ict3715_2022");
$staffNum = $_SESSION["staffnumber"];
$result = mysqli_query($link, "SELECT studentinfo.studentnumber, studentname, email
FROM studentinfo, moduleleader, studentmodule 
WHERE moduleleader.StaffNumber = $staffNum
AND moduleleader.ModuleCode = studentmodule.ModuleCode
AND studentmodule.StudentNumber = studentinfo.studentnumber
ORDER BY studentname, studentinfo.studentnumber");
$num_rows = mysqli_num_rows($result);
echo "$num_rows\n";
?>
<br/><br/>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include('footer.php');
?>