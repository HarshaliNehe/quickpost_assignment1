
<?php 

  include 'signup_details.php';

?>


<!DOCTYPE html>
          <html>
                <head>
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                            <!-- Add icon library -->
                          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                          <link rel="stylesheet" type="text/css" href="signup.css">


                            <script>
        function validate()
        {

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_pass").value;
            if (a!=b)
            {

               alert("Passwords do no match");
               return false;
            }
        }
                            
</script>
                </head>

                        <body>

                          <form action="signup_details.php" style="max-width:500px;margin:auto" method="POST">


                   <div class="main">

                           <h1>Register Form</h1>
                          <div class="container">
                                <i class="fa fa-user icon"></i>
                                <input  type="text" placeholder="first name" name="first_name" class="input-field">
                          </div>

                          <div class="container">
                              <i class="fa fa-user icon"></i>
                              <input  type="text" placeholder="last name" name="last_name" class="input-field" required>
                          </div>


                         <div class="container">
                              <i class="fa fa-user icon"></i>
                              <input  type="text" placeholder="user name" name="user_name" class="input-field" required>
                          </div>

                        <div class="container">
                             <i class="fa fa-envelope icon"></i>
                              <input  type="text" placeholder="Email id" name="user_mail_id" class="input-field" required>
                        </div>
  
                        <div class="container">
                              <i class="fa fa-key icon"></i>
                               <input  type="password" placeholder="password" name="password" class="input-field" id="password" >
                        </div>

                         <div class="container">
                              <i class="fa fa-key icon"></i>
                               <input  type="password" placeholder="confirm pass" name="confirm_pass" class="input-field" id="confirm_pass">
                        </div>

                            
                       <div class="container">
                        <input   type="submit" name="submit" value="Submit" class="int" onclick="validate()">
                      </div>

                       

</div><!--main-->
</form>

  
    </body>
</html>





