
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
<?php $image = $row['profilePix']; if(empty($image)) {?>
<!-- display user image if user has upuploaded his profile pix-->
<div class="member-image"> <img class="rounded-circle" src='assets/images/diasporana-avatar.png' class='rounded-circle'width='80' height='80' alt='profile image'></div>

 <?php }elseif($image){?>
<!-- display default avatar if user has upupload his profile pix--><br>
<?php echo '<img class="rounded-circle"src="' . $row['profilePix']. '" width="80" height="80">'; ?>
                            <?php }?>
                    <div class="detail">
                        <h4><?php echo $row['firstName']." ".$row['lastName']; ?></h4>
                        <b>Role:</b>&nbsp;<small><?php echo $row['role']; ?></small>                        
                    </div>
                    <a href="my-profile.php" title="Acount"><i class="zmdi zmdi-account"></i></a>
                    <a href="#" title="Email"><i class="zmdi zmdi-email"></i></a>
                    <a href="tel:+2347025004795" title="Contact Suport"><i class="zmdi zmdi-phone"></i></a>
                    <a href="#" title="Notification"><i class="zmdi zmdi-notifications"></i></a>
                    <a href="../includes/logout.php" title="Logout out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="active open"><a href="../user"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
             <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-circle"></i><span>Users</span> </a>
                <ul class="ml-menu">
                    <li><a href="./viewUsers.php"><i class="zmdi zmdi-account-circle"></i>&nbsp;View All</a></li>
                    <li><a href="./"><i class="zmdi zmdi-money"></i>&nbsp;Approve Transactions</a></li>
                    <li><a href="propertyRequest.php"><i class="zmdi zmdi-settings"></i>&nbsp;Property Request</a></li>
                </ul>
            </li>            
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Property & Request</span> </a>
                <ul class="ml-menu">
                    <li><a href="properties.php" title="Choose property">Properties</a></li>
                    <li><a href="addProperties.php">Add Properties</a></li>  
                    <li><a href="freshLand.php">Add FreshLand</a></li>                     
                    <li><a href="propertyRequest.php">Property Request</a></li>
                    <li><a href="landRequest.php">FreshLand Request</a></li>
                </ul>
            </li>
            <li class=""><button class="btn btn-danger btn-icon btn-round hidden-sm-down" type="button"><i class="zmdi zmdi-plus"></i></button>&nbsp;DIASPORA PLUS
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Property Management</span> </a>
                <ul class="ml-menu">
                    <li><a href="packageRequest.php">Approve Request</a></li>
                    <li><a href="manageProperties.php">Manage Properties</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Property Development</span> </a>

                <ul class="ml-menu">
                    <li><a href="#">Property Update</a> </li>
                    <li><a href="#">Update Progress</a> </li>
                </ul>
            </li>
                                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Reports</span> </a>
                <ul class="ml-menu">
                    <li><a href="request-report.php"><i class="zmdi zmdi-collection-text"></i><span>Send Report</span></a></li>                     
                    <li><a href="documents.php"><i class="zmdi zmdi-file-text"></i>&nbsp;Upload Documents</a></li>
                </ul>
            </li>
                </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
