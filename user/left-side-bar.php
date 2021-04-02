<?php 
if ($_SESSION['id']==NULL) {
 header('Location: ../includes/logout.php');
}

$userID=$_SESSION['id'];
$query= mysqli_query($conn,"SELECT * FROM package ORDER BY id ASC")or die(mysqli_error($conn));
$package = mysqli_fetch_array($query, MYSQLI_ASSOC);  



?>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
<?php $image = $usrow['profilePix']; if(empty($image)) {?>
<!-- display user image if user has upuploaded his profile pix-->
<div class="member-image"> <img class="rounded-circle" src='assets/images/diasporana-avatar.png' class='rounded-circle'width='80' height='80' alt='profile image'></div>

 <?php }elseif($image){?>
<!-- display default avatar if user has upupload his profile pix--><br>
<?php echo '<img class="rounded-circle"src="' . $usrow['profilePix']. '" width="80" height="80">'; ?>
                            <?php }?>
                    <div class="detail">
                        <h4><?php echo $usrow['firstName']." ".$usrow['lastName']; ?></h4>
                                               
                    </div>
                    <a href="my-profile.php" title="Acount"><i class="zmdi zmdi-account"></i></a>
                    <a href="#mail-inbox.html" title="Email"><i class="zmdi zmdi-email"></i></a>
                    <a href="tel:+2347025004795" title="Contact Suport"><i class="zmdi zmdi-phone"></i></a>
                    <a href="#" title="Notification"><i class="zmdi zmdi-notifications"><?php require_once('../notification/count.php'); echo $count; ?></i></a>
                    <a href="../includes/logout.php" title="Logout out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="active open"><a href="../user"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
             <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-circle"></i><span>My Profile</span> </a>
                <ul class="ml-menu">
                    <li><a href="./my-profile.php"><i class="zmdi zmdi-account-circle"></i>&nbsp;Profile Details</a></li>
                    <!--<li><a href="./transactions.php"><i class="zmdi zmdi-money"></i>&nbsp;Transactions</a></li>
                    <li><a href="agent.html"><i class=""><img src="assets/icons/Referrals.png"></i>&nbsp;All Menbers</a></li> -->
                    <li><a href="./reset-password.php"><i class="zmdi zmdi-settings"></i>&nbsp;Reset Password</a></li>
                    <li><a href="../sign-in.php"><i class="zmdi zmdi-power"></i>&nbsp;Logout</a></li>
                </ul>
            </li> 
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Property</span> </a>
                <ul class="ml-menu">
                    <li><a href="properties.php" title="Choose property">Properties</a></li>
                    <li><a href="my-properties.php">My Properties</a></li>
                    <li><a href="../submit_property.php">Submit Property</a></li>                       
                </ul>
            </li>

            <li> <a href="./transactions.php" ><i class="zmdi zmdi-money"></i><span>Transactions</span> </a>
            </li>
    <li class=""><button class="btn btn-danger btn-icon btn-round hidden-sm-down" type="button"><i class="zmdi zmdi-plus"></i></button>&nbsp;DIASPORANA PLUS
<?php 
//check if user has any active package approved
if ($package['subscribed']=='Approved' && $package['uID'] == $userID) {
    echo '
<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Property Management</span> </a>
                <ul class="ml-menu">
                    <li><a href="#">Managed Properties</a></li>
                </ul>
            </li>
             <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Reports</span> </a>
                <ul class="ml-menu">
                    <li><a href="request-report.php"><i class="zmdi zmdi-collection-text"></i><span>Reports</span></a></li>                     
                    <li><a href="documents.php"><i class="zmdi zmdi-file-text"></i>&nbsp;Documents</a></li>
                </ul>
            </li>
            ';
 }else{
    echo '<button class="btn btn-default btn-sm">You need to subscribe to begin</button>';
} ?>   
            <div>
                <button class="btn btn-danger btn-block" >Need Help?</button>
            </div>
                </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

