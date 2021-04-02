<?php
$pagename="User Login";
require_once('./includes/connection.php');
//clean input befor submitting the form data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//LOGIN
$email = $password ="";
$emailErr = $passwordErr ="";
$login = 1;
if (isset($_POST['login-btn'])) {

    $email = test_input($_POST["email"]);
    $password = test_input($_POST['password']);


   if (empty($_POST['email'])) {
       $emailErr['email'] = 'Email is required';
       $login = 0;
   }

   elseif (empty($_POST['password'])) {
        $passwordErr['password'] = 'Password can not be empty!';
        $login = 0;
   }

   else{

        $login = 1;
   }

   if ($login >0) {
        
        $query = "SELECT * FROM user_meta WHERE email=?  LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $email);
   
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            //var_dump($user);

   //check the password and user status to do login
   if (password_verify($password, $user['password'])){
       

       $stmt->close();
       //begin login

             session_start();
            $_SESSION['id']=$user['id'];
            $_SESSION['role']=$user['role'];
            //$_SESSION['userID']=$_POST['userID'];
            if ($_SESSION['id'] >0) {
            }
            if ($_SESSION['role']=='admin' && $user['id'] >0) {
              header('Location: ./admin/index.php');

            }elseif($_SESSION['role']=='LandLord' && $user['id'] >0){
            header('Location: ./landLords/welcome.php');

            }elseif($_SESSION['role']=='Customer' && $user['id'] >0){
             header('Location: ./user/properties.php');

            }else{
            header('Location: ./welcome.php');
            }
        }
    }   //end big if
  }
}
?>