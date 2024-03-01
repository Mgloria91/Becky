<?php
   include('database.php');


if (isset($_POST['add_student'])) {
	//echo " data succesfully submitted"; check!
	$reg_no =$_POST['reg_no'];
	$first_name =$_POST['first_name'];
	$last_name =$_POST['last_name'];
	$age =$_POST['age'];
	$course =$_POST['course'];
	$semester =$_POST['semester'];
	$phone =$_POST['phone'];
	$email =$_POST['email'];

    $errors = array();
//if  nothing is entered
    if (empty($reg_no) || empty($first_name) || empty($last_name) || empty($age) || empty($course) || empty($semester) || empty($phone) || empty($email)) {
    array_push($errors, "All fields are required");
}


	if ($reg_no == "" || empty($reg_no)) {
		//header( 'location:index.php?message=registration number required');
		 array_push($errors, "registration number required");
	}
	if ($first_name == "" || empty($first_name)) {
		//header('location:index.php?message=please kichwa enter your first name!');
		 array_push($errors, "please kichwa enter your first name!");
	}

 
 	}
	if ($last_name == "" || empty($last_name)) {
		//header('location:index.php?message=kindly enter last name!');
		 array_push($errors, "kindly enter last name!");
	}
	if ($age == "" || empty($age)) {
		//header( 'location:index.php?message=age required');
		 array_push($errors, "age required");
	}
if ($course == "" || empty($course)) {
		//header( 'location:index.php?message=please enter your course');
		 array_push($errors, "please enter your course");
}
		if ($semester == "" || empty($semester)) {
		//header( 'location:index.php?message=select your current semester');
		 array_push($errors, "select your current semester");
	
	}
	if ($phone == "" || empty($phone)) {
		//header( 'location:index.php?message=valid phone number  required');
		 array_push($errors, "valid phone number  required");
	}
	if ($email == "" || empty($email)) {
		//header( 'location:index.php?message=email required');
		 array_push($errors, "message=email required");
	}
	// check if email already exist.
      $sql = "SELECT * FROM students WHERE email = ?";
    $check = $mysqli->prepare($sql);

    if ($check) {
        // Bind the email parameter
        $check->bind_param("s", $email);

        // Execute the query
        $check->execute();

        // Get the result
        $result = $check->get_result();

        // Check if a row with the same email exists
        if ($result->num_rows > 0) {
            $errors[] = "Email already exists. Please choose a different email.";
        }
    }
    // check if registration no already exist.
      $sql = "SELECT * FROM students WHERE reg_no = ?";
    $check = $mysqli->prepare($sql);

    if ($check) {
        
        $check->bind_param("s", $reg_no);
        $check->execute();
        $result = $check->get_result();
        if ($result->num_rows > 0) {
            $errors[] = "registration number provided already exists.";
        }
    }
    // check if phone already exist.
      $sql = "SELECT * FROM students WHERE phone = ?";
    $check = $mysqli->prepare($sql);

    if ($check) {
        $check->bind_param("s", $phone);
        $check->execute();
        $result = $check->get_result();
        if ($result->num_rows > 0) {
            $errors[] = "please check your number.";
        }
    }
//if an error exist
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
	         }
    } 

    else{
 
	$query = "INSERT INTO `students` (`reg_no`,`first_name`, `last_name`, `age` ,`course`, `semester` ,`phone` ,`email`) VALUES ( '$reg_no', '$first_name', '$last_name', '$age' , '$course' , '$semester' , '$phone' , '$email')";

$result = $mysqli->query($query);

if ($result) {
  header('location:index.php?add_msg= new student successfully added');

}
else{
  die("Query Failed: " . mysqli_error($connection));
}
}
?>