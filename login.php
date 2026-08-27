<?php
require_once"header.php";
require_once"connection.php";
if(!empty($_POST)){
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $data=mysqli_query($conn,$sql);
    if(mysqli_num_rows($data)>0){
        $user=mysqli_fetch_assoc($data);
       $_SESSION['success']="Login Successful!";
       $_SESSION['auth']=$user;
            header("Location:index.php");
    }else{
      $_SESSION['error']="Invalid Credentials!";
      header("Location:login.php");
    }
}
?>
<div class="Container" style="padding:20px;">
<h1>Login</h1>
<blockquote>
<form action=""  method ="post" >
    Email:<input type="email" name="email" class="form-control"  required><br><br>
    Password:<input type="password" name="password" class="form-control" required><br><br>

<button class="btn btn-success" style="width:100%;">Create Login</button>
</form>
</blockquote>
<div>

<?php
require_once"footer.php";
?>
           
