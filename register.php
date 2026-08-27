<?php
require_once"header.php";
require_once"connection.php";
if(!empty($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $gender=$_POST['gender'];
    $sql="INSERT INTO users(name,email,password,gender)VALUES('$name','$email','$password','$gender')";
    $data=mysqli_query($conn,$sql);
    if($data){
       $_SESSION['success']="Account Created!";
            header("Location:index.php");
    }else{
      $_SESSION['error']="Account not created!";
      header("Location:regster.php");
    }
}
?>
<div class="Container" style="padding:20px;">
<h1>Register</h1>
<blockquote>
<form action=""  method ="post" >
    Name:<input type="text" name="name" class="form-control" required><br><br>
    Email:<input type="email" name="email" class="form-control"  required><br><br>
    Password:<input type="password" name="password" class="form-control" required><br><br>
    Gender:
    <br><select name="gender" class="form-select" required >
        <option value="" >-----Select Gender-----</option>
        <option value="male">Male</option>
         <option value="female">Female</option>
          <option value="others">Others</option>
</select><br><br>
<button class="btn btn-success" style="width:100%;">Create new account</button>
</form>
</blockquote>
<div>

<?php
require_once"footer.php";
?>
           
