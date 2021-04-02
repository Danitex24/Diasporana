<?php 
//session_start();

//include('../includes/connection.php');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$email = $password = $cpassword ="";
$emailErr = $passwordErr = $cpasswordErr  = "";
$insert = 1;
if (isset($_POST['signup-btn'])) {

//select post info from user tb
    require_once('../includes/connection.php');
    $sql1= mysqli_query($conn,"SELECT * FROM user_meta LIMIT 1 ")
    or die(mysqli_error($conn));
    $resultID = mysqli_fetch_array($sql1, MYSQLI_ASSOC);

    //begin form validation 
    //check entered email
    if (empty($_POST['email'])) {
        $emailErr = "*Email is required";
        $insert = 0;
    }else{
         $email = test_input($_POST["email"]);
        $insert = "";
    }

    if (!preg_match("/^[a-zA-Z0-9\.]*@[a-z\.]{1,}[a-z]*$/",$email) || $email=='') {
        $emailErr = "*Enter a valid mail";
        $insert = 0;
    }

    //check entered password
    if (empty($_POST['password'])) {
        $passwordErr = "Enter password";
        $insert = 0;
    }else{
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password
        $insert = "";
    }

    //check password comfirm
        if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'Passwords does not match';
        $insert = 0;
    }

    $token = bin2hex(random_bytes(50)); // generate unique token
    $userID= "Diasporana-".mt_rand();
    $uID= $resultID['id'];
    $role= $_POST['role'];
    $status='Pending';
    $sts='Active';
    $CurrentTime = time();
    $regDate=strftime("%B/%d/%Y %H: %M: %S:", $CurrentTime);


if ($insert = 1) {
    require_once('../includes/connection.php');


 $stmt = "INSERT INTO user_meta (email, password, role, userID, status, token, regDate) VALUES (?, ?, ?, ?, ?,?, ?)";
$stmt = $conn->prepare($stmt);
$stmt->bind_param('sssssss', $email, $password, $role, $userID, $sts, $token, $regDate);
$stmt->execute();

if ($stmt) {
    $uID = mysqli_insert_id($conn);

///now insert user info into users table
$stmt = "INSERT INTO users (userID, uID, email, password, role, status, regDate) VALUES (?, ?, ?, ?, ?,?,?)";
$stmt = $conn->prepare($stmt);
$stmt->bind_param("sssssss", $userID, $uID, $email, $password, $role, $status, $regDate);
$stmt->execute();
    }
}

//check if instered the take user to welcome page
if ($insert = 1) {
    // TO DO: send verification email to user
    require_once('../inc/sendEmails.php');
    sendVerificationEmail($email, $token);
            $_SESSION['id']=$row['id'];
            $_SESSION['role']=$row['role'];
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            header('location: ../welcome.php');
}else{
    echo "<p class='btn btn-danger'>You need to sign up to continue!</p>";
   header('Location: ../sign-in.php');
}
   $stmt->close();     
}
?>


