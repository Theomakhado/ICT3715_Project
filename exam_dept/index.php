<?php
$title = "Exam Dept Dashboard";
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
Welcome <?php echo $_SESSION["staffname"]; ?>
<br/><br/>
You work as an Exam Department Staff
<br/><br/>
Here is a list of what you can do:<br/><br/>
1. View Daily Reports <br/>
2. View Weekly Reports <br/>
3. View MIS Reports <br/>
4. Many More...<br/>
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