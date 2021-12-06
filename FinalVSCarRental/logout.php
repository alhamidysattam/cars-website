
<?php ///When clicking on the logout button we have to destroy user sessions. It will redirect to the login page.
session_start();
// Destroy session
if (session_destroy()) {
       // Redirecting To Home Page
       header("Location:login.php");
}
?>
