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
                                    <center><h3>Diasporana Package Subscription</h3></center>
                                    <form method="POST" action="" multipart="" enctype="multipart/form-data">
                                        <div class="table-responsive">
<?php $query= mysqli_query($conn,"SELECT * FROM package ORDER BY id ASC")or die(mysqli_error($conn)); $n=1;?>
                            <table id="fixed_table" class="table table-bordered m-b-0 " >
                                <thead >
                                     <tr>
                                         <th>S/N</th>
                                         <th>User ID</th>
                                         <th>Property Name</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Requested Time</th>
                                         <th>Action</th>
                                         <th>Action</th>
                                     </tr>
                                </thead> 
                                      <tbody>
                                 <?php while ($r=mysqli_fetch_array($query, MYSQLI_ASSOC)) {?>
                                              	<tr>
                                              		<td><?php echo $n++; ?></td>
                                              		<td><?php echo $r['userID']?></td>
                                                  <td><?php echo $r['propName']?></td>
                                                  <td><?php echo $r['email']?></td>
                                              		<td><?php echo $r['phone']?></td>
                                              		<td><?php echo $r['subscribeDate']?></td>
                                              		<td>
                                    <?php if ($r['subscribed']=='Approved') {
                                      echo "<button class='btn btn-success btn-sm btn-round' disabled='yes'>Managed!</button>";
                                    }else{
                       //check if the request is yet to be approved then display this btn
                                      echo '<a href="approvePackage.php?id='.$r['propID'].'" name="approve" class="btn btn-info btn-sm btn-round">
                                     Approve</a>
                                      ';} ?></td>
                                              		<td><a href="deletePackageRequest.php?id=<?php echo $r['propID'] ?>" onclick="return confirm ('This request will be Cancel from the list')" class="btn btn-danger btn-sm btn-round">Cancel</a></td>
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
