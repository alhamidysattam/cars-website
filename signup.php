
<!-- php code -->
<?php

       // initializes session 
       session_start();
       
       if(isset($_POST['submit']))
       {
              //getting the data from the form 
              $username = $_POST['name'];
              $email = $_POST['email'];
              $password = $_POST['psw'];
              
              // is not necessary because we have chrome validation (required)
              if($username!=''  && $password!= '' && $email != '') 
              {

              //SQL statement to insert the data 
              $sql = "INSERT INTO users(username , email , password )  
                     VALUES('$username' , '$email' , '$password')";

              //Making connection by include db.php (config file)
              include_once('db.php');

              //Making a query 
              $query = mysqli_query($conn , $sql) or die("Data insert error");
              
                     if($query)
                     {
                            echo "$username Register Successfully";
                            /// header to login page
                            header("Location:login.php");
                     }else
                     {
                             ///else header to signup page
                            header("Location:signup.php");
                     }

              }
              else 
              {
                     echo "Please Fill all the Fields";
              
              } 
       }


?>



<!-- end PHP code-->


<!DOCTYPE html>
<html>
<!-- sing up Page -->

<link rel="stylesheet" href="css/formStyle.css">

<body>
       <div class="backgroundVid">

              <video autoplay muted loop id="myVideo">
                     <source src="carRental.mp4" type="video/mp4">
              </video>
              <form  style="box-shadow: 5px  5px 30px rgba(94, 94, 94, 0.909);" class="modal-content" action="" method="post">
                     <div class="container">
                            <h1>Sign Up Page</h1>
                            <p>Please fill in this form to create an account.</p>
                            <hr>
                            <label><b>User Name</b></label>
                            <input type="text" placeholder="Enter User Name" name="name" required>

                            <label><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" name="email" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>


                            <p> Already, Have account? <a href="login.php" style="color:rgb(56, 30, 255);">Login</a>.
                            </p>

                            <div class="clearfix">
                                   <button type="reset" class="Resetbtn">Reset</button>
                                   <button type="submit" name = "submit" class="signupbtn">Sign Up</button>
                            </div>
                     </div>
              </form>

       </div>

</body>

</html>