<?php
$title = "Landing Page";
include('header.php');
?>

<!-- intro area -->
<div id="intro">
<div class="intro-text">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="brand">
<h1><a href="index.php">Welcome to Our Online Exam System</a></h1>
<div class="line-spacer"></div>
<p><span>Please select an option to login</span></p>
<br>
<p><span>Below are some options</span></p><br>
<a href="login_stud.php" class="btn btn-primary" role="button">Student</a><br/><br/>
<a href="login_lect.php" class="btn btn-primary" role="button">Lecturer</a><br/><br/>
<a href="login_examDept.php" class="btn btn-primary" role="button">Exam Department</a>
<br><br><br>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include('footer.php');?>