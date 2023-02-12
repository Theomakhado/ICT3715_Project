<?php
$title = "Exam Staff Profile";
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
<h3>Exam Department | Staff Profile</h3>
<br/>
Staff Fullname: <?php echo $_SESSION["staffname"]; ?><br/><br/>
Staff Number: <?php echo $_SESSION["staffnum"]; ?><br/><br/>
Staff Email: <?php echo $_SESSION["email"]; ?><br/><br/>
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