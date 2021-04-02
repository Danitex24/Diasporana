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
                                    <center><h3>Property Request</h3></center>
                                    <form method="POST" action="uploadPropertity.php" multipart="" enctype="multipart/form-data">
                                        <div class="table-responsive">
<?php $query= mysqli_query($conn,"SELECT * FROM propertyRequest ORDER BY id ASC")or die(mysqli_error($conn)); $n=1;?>
                            <table id="fixed_table" class="table table-bordered m-b-0 " >
                                <thead >
                                     <tr>
                                         <th>S/N</th>
                                         <th>User ID</th>
                                         <th>Property Name</th>
                                         <th>Price</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Req. Date</th>
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
                                              	 <td><?php echo $r['price'] ?></td>
                                                  <td><?php echo $r['contactNo']?></td>
                                              		<td><?php echo $r['contactEmail']?></td>
                                              		<td><?php echo $r['requestDate']?></td>
                                              		<td>
                                    <?php if ($r['status']=='Approved') {
                                      echo "<button class='btn btn-success btn-sm btn-round' disabled='yes'>Aquired</button>";
                                    }else{
                                      echo '<a href="approveRquest.php?id='.$r['id'].'" class="btn btn-info btn-sm btn-round">
                                     Approve</a>
                                      ';} ?></td>
                                              		<td><a href="deleteRequest.php?id=<?php echo $r['id'] ?>"onclick="return confirm ('This request will be deleted from the list')"><button class="btn btn-danger btn-sm btn-round">Delete</button></td>
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
