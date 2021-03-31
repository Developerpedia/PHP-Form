<?php
include ("connection.php");
?>
<form action="" method="post">
username: <input type="text" name="username" value=""/><br><br>
password: <input type="pwd" name="password" value=""/><br><br>
<input type="submit" name="submit" value="login"/>
</form>

<?php
if(isset($_POST['submit']))
{
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    $query =  "SELECT * FROM LOGIN WHERE username='$user' && password='$pwd'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['user_name']=$user;
        header ('location:home.php');
    }
    else
    {
        echo "login failed";
    }
}