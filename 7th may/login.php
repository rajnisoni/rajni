


<html>
    <body>
        <?php

if(isset($_POST['loginbtn'])) {

echo'hello';
$con=mysqli_connect("localhost","root","", "login");
//mysql_select_db("login");
$a=$POST['email'];

$a=$_POST['password'];

mysqli_query($con"insert into loginpage values('$a','$b') ");
echo'saved';
}
?>
</body>
</html>
