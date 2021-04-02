<?php
include('../includes/connection.php');
include('../includes/session.php');
if ($_SESSION['id']==NULL) {
 header('Location: ../includes/logout.php');
}
include('header.php');
include('left-side-bar.php');
?>
<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="tab-content"><br><br>
                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                        <div class="card" id="details">
                            <div class="body">                                
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <center><h3>All users on Diasporana Platform</h3></center>
                                    <form method="POST" action="uploadPropertity.php" multipart="" enctype="multipart/form-data">
                                        <div class="table-responsive">
<?php $query= mysqli_query($conn,"SELECT * FROM users ORDER BY id ASC")or die(mysqli_error($conn)); $n=1;?>
                            <table id="fixed_table" class="table table-bordered m-b-0 " >
                                <thead >
                                     <tr>
                                         <th>S/N</th>
                                         <th>User ID</th>
                                         <th>Package</th>
                                         <th>Name</th>
                                         <th>City</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Status</th>
                                         <th>Action</th>
                                         <th>Action</th>
                                     </tr>
                                </thead> 
                                      <tbody>
                                 <?php while ($r=mysqli_fetch_array($query, MYSQLI_ASSOC)) {?>
                                              	<tr>
                                              		<td><?php echo $n++; ?></td>
                                              		<td><?php echo $r['userID']?></td>
                                              		<td><?php echo $r['package']?></td>
                                              	<td><?php echo $r['firstName']." ".$r['lastName'] ?></td>
                                              		<td><?php echo $r['city']?></td>
                                              		<td><?php echo $r['email']?></td>
                                              		<td><?php echo $r['phone']?></td>
                                              		<td><?php echo $r['status']?></td>
                                              		<td><a href="blockUser.php?id=<?php echo $r['id'] ?>" onclick (" return comfirm ('Block user?')); "><button class="btn btn-info btn-sm btn-round">Block</button></a></td>
                                              		<td><a href="deleteUser.php?id=<?php echo $r['id'] ?>" <a href="deletelink" onclick="return confirm ('This User will be deleted from this platform')"><button class="btn btn-danger btn-sm btn-round">Delete</button></a></td>
                                              	</tr>
                                             <?php }?>                                                  
                                            </tbody>
                                            </table>
                                        </div>
                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include('footer.php');
