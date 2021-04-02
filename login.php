<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
$error="";
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
             header('Location: ./user/my-profile.php');

            }else{
            header('Location: ./welcome.php');
            }
        }
    }   //end big if
  }
}
?>
<?php 
include('./inc/header_home.php');

include('./inc/menu.php');
?>
<!-- ========================= Page Title Start=============================== -->
      <div class="page-title" style="background-color: #e21137; color: #fff;">
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-12 col-md-12 mt-5">
    
              <center>
              <p class=" text-white">Welcome to Diasporana <?php echo $pagename."page,"; ?> kindly login below to proceed.</p>
              </center>
            </div>
          </div>
        </div>
      </div>
<!-- ========================= Page Title End =============================== -->
<!-- ========================== User Dashboard =============================== -->

<!-- begin login form -->
<div class="container" id="" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="row" role="document">
          <div class="col-lg-2"></div>
          <div class="col-lg-8" id="registermodal">
            <div class="modal-body">
              <h4 class="modal-header-title">Log In</h4>
              <div class="login-form">
                <form method="POST" action="">
            
                  <div class="form-group">
                    <label>Email Address</label>
                    <?php  echo $emailErr; ?>
                    <div class="input-with-icon">
                      <input type="email" name="email" class="form-control" placeholder="example@email.com">
                      <i class="ti-user"></i>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <?php  echo $passwordErr; ?>
                    <label>Password</label>
                    <div class="input-with-icon">
                      <input type="password" name="password" class="form-control" placeholder="*******">
                      <i class="ti-unlock"></i>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" name="login-btn" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
                  </div>
                
                </form>
              </div>

              <div class="text-center">
                <p class="mt-5"><a href="#" class="link">Forgot password?</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
      <!-- End Modal -->

    <?php 
       include('./inc/footer_home.php');
//============================ Footer End ================================== 


    //============================================================== 
    //All Jquery -->
    //============================================================== 
   include('./inc/jq.php');

   ?>
