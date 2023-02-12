<?php
$title = "Student Dashboard | Profile";
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
<div class="text-center" style="font-size: 14pt; color: white;">
<div class="col-md-10">
<h3>Student Profile</h3>
<br/>
Student Fullname: <?php echo $_SESSION["studentname"]; ?><br/><br/>
Student Number: <?php echo $_SESSION["studentnumber"]; ?><br/><br/>
Student Email: <?php echo $_SESSION["email"]; ?><br/><br/>
Registered Module(s) Code <br/><?php $studNum =  $_SESSION["studentnumber"]; 
$stmt = $conn->prepare("SELECT ModuleCode FROM studentmodule WHERE StudentNumber = '$studNum'");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module){
echo $module['ModuleCode']. "<br/>"; 
}
?>
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