<?php
require_once "connection.php";
if(!empty($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $role=$_POST['role'];
    $image=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_name'];
    if(!move_uploaded_file($tmp_image,"images/$image")){
        echo"Image not uploaded ";
    }
    $query="INSERT INTO users(name,email,password,gender,role,image)VALUES('$name','$email','$password','$gender','$role','$image')";
    $response=mysqli_query($conn,$query);
    if($response){
        echo"Post added successfully!";
    }
    }
    else{
        header("location:index.php");
    }

?>