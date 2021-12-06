


<!-- php code -->
<?php

       // initializes session 
       session_start();

       if(isset($_POST['submit']))
       {
              //getting the data from the form 
              $username = $_POST['name'];
              $password = $_POST['psw'];
              
              // is not necessary because we have chrome validation (required)
              if($username!=''  && $password!= '' ) 
              {

              //SQL statement to select the data 
              $sql = "SELECT * FROM  users  WHERE username = '$username'  &&  password = '$password' ";  
              
              //Making connection by include db.php (config file)
              include_once('db.php');

              //Making a query 
              $query = mysqli_query($conn , $sql) or die("Data insert error");
              $count = mysqli_num_rows($query);
              
                     if($count == 1 )
                     {

                            // session var will prevent unauthorized users to login to the home page or any in navbar page
                            $_SESSION['user'] = $username;

                            echo "$username Login Successfully";

                              /// header to home page
                            header("Location:home.php");
                     }
                     else
                     {
                      ///else header to login page
                            header("Location:login.php");
                     }
              }
              else 
              {
                     echo "Please Fill all the Fields";
              
              } 
       }


?>






<!DOCTYPE html>
<html>
<!-- login Page -->
<link rel="stylesheet" href="css/formStyle.css">
<body>
       <div class="backgroundVid">

              <video autoplay muted loop id="myVideo">
                     <source src="carRental.mp4" type="video/mp4">
              </video>
              <form  style="box-shadow: 5px  5px 30px rgba(94, 94, 94, 0.909);" class="modal-content" action="#" method="post">
                     <div class="container">

                            <h1>Login Page</h1>
                            <p>Please Enter your account.</p>
                            <hr>
                            <label><b>User Name</b></label>
                            <input type="text" placeholder="Enter User Name" name="name" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <p> Create an account? <a href="signup.php" style="color:rgb(56, 30, 255)">Sing up</a>.</p>

                            <div class="clearfix">
                                   <button type="reset" class="Resetbtn">Reset</button>
                                   <button type="submit" name= "submit" class="loginpbtn">Login</button>
                            </div>
                     </div>
              </form>
       </div>


</body>

</html>

