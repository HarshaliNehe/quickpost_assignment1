<?php 
    //incluse database connection  value
    include_once'connection.php';
    
    
    session_start();

    $msg="";
    //connect to database
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    else{
        echo"connected";
    }

   if(isset($_POST['submit']))
        {
            $user_name=$_POST['user_name'];
            $password=$_POST['password'];

            $result = mysqli_query($db,"SELECT user_name, password,id FROM users WHERE user_name = '$user_name'");

                //echo$new_id;
                header('location:home_page.php');//rediect to index page after insertion
        
                header('Location:signin.php');
                }

            
   
?>




