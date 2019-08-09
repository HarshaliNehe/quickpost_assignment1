<?php 

  include 'signin_details.php';

?>


<!DOCTYPE html>
          <html>
                <head>
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                            <!-- Add icon library -->
                          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                          <link rel="stylesheet" type="text/css" href="signin.css">


                </head>

                        <body>

                          <form action="signin_details.php" style="max-width:500px;margin:auto" method="POST">


                   <div class="main">

                           <h1>Sign_in Form</h1>
                          

                       <div class="container">
                              <i class="fa fa-user icon"></i>
                              <input  type="text" placeholder="user name" name="user_name" class="input-field" required>
                          </div>
                        <div class="container">
                              <i class="fa fa-key icon"></i>
                               <input  type="password" placeholder="password" name="password" class="input-field" id="confirm_pass" required>
                        </div>

 <input   type="submit" name="submit" value="Submit" class="int" onclick="validate()">
                 
                          




                       <div class="options">

                            <div class="options1">
                                <p> create new account</p>
                                <a href="signup.php">Sign in</a>
                           </div>


                            <div class="options2">
                                <p> forget password</p>
                                <a href="forget.php">Forget Password</a>
                            </div>
                                
                      </div>


                         
                 
                    
                  
                        
                       

</div><!--main-->
</form>
    </body>
</html>





