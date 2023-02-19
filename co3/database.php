<?php
$host_name="localhost";
$user_name="root";
$password="";
$db_name="demo";

$conn=mysqli_connect($host_name,$user_name,$password,$db_name);

if($conn){
echo"connection succesfull";
}
else{
echo"unsuscceful";
}

if(isset($_POST['submit'])){
 $username=$_POST['username'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
 $sql="INSERT INTO login(username,password,confirmpassword)VALUES('$username','$password','$cpassword')";

 $result=mysqli_query($conn,$sql);

if($result){
echo'<script>alert("succesfully inserted")</script>';
}
else{
echo'<script>alert("unsuccesfull")</script>';
}
}
?>

<html>
<body>
<form action="" method="post">
<h1>login form</h1>
<input type="text" name="username" placeholder="username"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
<input type="password" name="cpassword" placeholder="confirm password"><br><br>
<input type="submit" value="submit" name="submit">

</form>
</body>
</html>
