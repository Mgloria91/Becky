
<?php
include('header.php');
include('dbcon.php');
?> 

<?php



if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $connection->prepare($sql);

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
            if (password_verify($password, $user['password'])) {
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
<form action="log.php" method="post" >
    <div class="form-group" >
        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
    </div>
    <div class="form-group" >
        <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
    </div>
    <div class="form-btn" >
        <input type="submit" name="login" value="login" class="btn btn-primary">
    </div>
</form>

<?php
include('footer.php');
?>