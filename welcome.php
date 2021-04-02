<?php 
$pagename="Dashboard";
include('./includes/connection.php');
include('./inc/verify_email.php');
include ('./controllers/authController.php');
if (empty($_SESSION['id'])) {
  //check if the session is empty logout user
  //header('Location: ./login.php');
}else{
  //do nothing
}
//header section
include('./inc/header_home.php');

include('./inc/menu.php');
?>
<?php

require_once('./includes/connection.php');

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
            //$_SESSION['userID']=$stmt['userID'];
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
}
   //end big if
}
}
?>
<!-- ========================= Page Title Start=============================== -->
      <div class="page-title" style="background-color: #e21137; color: #fff;">
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-12 col-md-12 mt-5">
              
<h2 class="ipt-title">Welcome! &nbsp; <?php  //echo $_SESSION['username']; ?></h2>
              <center>
              <span class="ipn-subtitle text-white">Welcome To Your Dashboard. Here, your will find informations about your submited properties and your entire transactions.</span>
              </center>
            </div>
          </div>
        </div>
      </div>
<!-- ========================= Page Title End =============================== -->
<!-- ========================== User Dashboard =============================== -->
 <?php 
  require_once('./includes/connection.php');
$check = mysqli_query($conn, " SELECT * from user_meta ORDER BY id ASC ")OR die(mysqli_error($conn));
$result = mysqli_fetch_array($check, MYSQLI_ASSOC);
if ($result > 0 && $result['status'] == 'Active' && $result['verified']>0) {?>
<!-- if the user has verify his email echo this -->
      <div class="container mt-5">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 home-wrapper ">

        <!-- Display messages -->
        <div class="alert alert-success" >
      <?php
        $alert = "Your email address has been verified successfully, you can now login.";

            if ($result['verified'] >0) {
                echo $alert;
            }
        ?>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
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
    <?php }else{?>
      <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 offset-md-12 home-wrapper ">

        <!-- Display messages -->
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php

            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>

        <?php if ($result['verified'] == 0 && $result['status'] =='Pending'): ?>
          <div class="alert alert-danger" role="alert">
            <center>
              <p>
                  You need to verify your email address!<br>
                  Sign into your email account and click
                  on the verification link we just emailed to you.
              </p>
            </center>
          </div>

          <center>
          OR <br>
          <a href="./sign-up.php" class="btn btn-success btn-rounded">Register Here!</a>
          </center>
        <?php endif;?>
      </div>
    </div>
  </div>
  <div class="col-lg-12 mt-5"></div>
  <div class="col-lg-12 mt-5"></div>
  <div class="col-lg-12 mt-5"></div>

  <!-- ======================= User Dashboard End ============================== -->
 
   <?php } ?>

  


    

    <?php 
       include('./inc/footer_home.php');
//============================ Footer End ================================== 


    //============================================================== 
    //All Jquery -->
    //============================================================== 
   include('./inc/jq.php');

   ?>