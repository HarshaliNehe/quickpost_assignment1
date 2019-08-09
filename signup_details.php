<?php

session_start();
include_once'connection.php';


       $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 

    if($db->connect_error){
        die("connection failed:".$db);
    }
    
               


    if(isset($_POST['submit']))

    {


    	$first_name =$_POST['first_name'];
      $last_name =$_POST['last_name'];
      $user_name =$_POST['user_name'];
      $confirm_pass =$_POST['confirm_pass'];
      $user_mail_id=$_POST['user_mail_id'];
    	$password=$_POST['password'];
    	
         $hash_pass = password_hash($confirm_pass,PASSWORD_DEFAULT);//encrypt the password before saving in the database
    	$query ="INSERT INTO users(first_name,last_name,user_name,confirm_pass,user_mail_id,password) VALUES('$first_name','$last_name','$user_name','$confirm_pass','$user_mail_id','$password')";

        mysqli_query($db,$query);
  
        header('Location:signup.php');//rediect to index page after insertion



    }

    
     if(isset($_POST['submit'])&&($_POST['password']==$_POST['confirm_pass']))
     {
        header('location:indexs.sphp');
    }
else
{

  header('location:');
}
       
?>


