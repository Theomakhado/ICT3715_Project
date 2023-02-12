<?php 
$title = "Lecturer Login";
session_start();
require_once 'include/conn_db.php';

if(ISSET($_POST['submit'])){
if($_POST['username'] != "" || $_POST['password'] != ""){
$email = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM `staffinfo` WHERE `email`=? AND `password`=? ";
$query = $conn->prepare($sql);
$query->execute(array($email,$password));
$row = $query->rowCount();
$fetch = $query->fetch();
if($row > 0) {
$_SESSION['staffnumber'] = $fetch['staffnumber'];
$_SESSION['name'] = $fetch['name'];
$_SESSION['email'] = $fetch['email'];
header("location: lect");
} else{
echo "<script>alert('Invalid username or password')</script>";
}
}
}

include('header.php');
?>
<!-- intro area -->
<div id="intro">
<div class="intro-text">
<div class="container">
<div class="col-md-8" style="margin-top: -12%; padding-left: 20%;">
<h1 style="text-align: center;">
<a href="index.php">Staff Login</a></h1>
<br/>
<form method="post" action="" class="agile_form">
<div class="form-group">
<input type="text" name="username" placeholder="Enter Email" class="form-control" required />
</div>
<br/>
<div class="form-group">
<input type="password" name="password" placeholder="Enter Password" class="form-control" required />
</div>
<br/>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<button type="reset" name="Clear" class="btn btn-warning">Reset</button>
</form>
</div>
</div>
<br/><br/>
</div>
</div>

<?php include('footer.php');?>