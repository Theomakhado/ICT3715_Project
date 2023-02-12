<?php
$title = "Student Dashboard";
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
Welcome <?php echo $_SESSION["studentname"]; ?>
<br/><br/>
You are currently registered for :<br/><br/>
<?php 
$studNum =  $_SESSION["studentnumber"]; 
$stmt = $conn->prepare("SELECT ModuleCode FROM studentmodule WHERE StudentNumber = '$studNum'");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module){
echo $module['ModuleCode']. "<br/>"; 
}
?>
<br>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include('footer.php');
?>