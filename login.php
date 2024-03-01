<?php
include('header.php');
include('database.php');
?> 

<?php
   session_start();
   if (isset($_SESSION['users'])) {
    header("location:index.php");
   }
?>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password_hash = $_POST['password_hash'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        // Bind the email parameter
        $stmt->bind_param("s", $email);

        // Execute the query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Fetch the user data
        $user = $result->fetch_assoc();

        if ($user) {
            // Verify the password
            if (password_verify($password_hash, $user['password_hash'])) {
                session_start();
                $_SESSION['users']= "yes";


                header("location:index.php");
                die();
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Invalid username</div>";
        }
    }
}

?>
<h4>LOGIN</h4>
<form action="login.php" method="post" >
    <div class="form-group" >
        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
    </div>
    <div class="form-group" >
        <input type="password" name="password_hash" placeholder="Enter Your Password" class="form-control">
    </div>
    <div class="form-btn" >
        <input type="submit" name="login" value="login" class="btn btn-primary">
    </div>
</form>
<div>
    <p > Not yet registered.<a href="registration.php"> please register here</a></p>
    <p style="text-align: right;"> <a href="forgot-password.php"> forget your password</a></p>
</div>
<?php
include('footer.php');
?>