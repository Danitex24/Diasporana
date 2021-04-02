<?php
include('../includes/connection.php');
include('../includes/session.php');
// Salamat Diasporana Design by: Daniel Adasho  08039575760
//include header section
//header 
include('header.php');

//include left-sidebar
// Left Sidebar 

include('left-side-bar.php');

//include right sidebar 
//Right Sidebar 

include('right-side-bar.php');

//include chat scripts
// Chat-launcher 

include('chat.php');

// include main content 
// Main Content 

//check user id to echo out transaction base on user id
$userID=$_SESSION['id'];
$query= mysqli_query($conn,"SELECT * FROM invoice ORDER BY id ASC")or die(mysqli_error($conn));
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    # counter for table serial number
    $sn=1;
?>
<section class="content invoice">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <br><br><br>
                <h2>Transaction History
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Diasporona</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Transactions</a></li>
                    <li class="breadcrumb-item active">History</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                    <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                        <div class="card" id="details">
                            <div class="body">                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">  
                                        <address>
                                            <strong><?php echo $row['compName'] ?></strong><br>
                                            <?php echo $row['compAddress'] ?><br>
                                    <abbr title="Phone">Call:</abbr> (234) <?php echo $row['contact'] ?>
                                        </address>
                                    </div>
                                    <div class="col-md-2 col-sm-2"><img src="assets/images/salamat_logo.jpg" width="150" alt="Salamat-Diasporona">
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-right">
                                        <p class="m-b-0"><strong>Transaction From: </strong>
                                        <?php 
                                        $Year = 2019; 
                                        $curYear = date('Y'); 
                                        echo (($Year != $curYear) ? $Year.' '.'To'.' ' . $curYear : '');
                                        ?>.</p>
                                    <p class="m-b-0"><strong>Order: </strong>
                                <!-- change background color and echo out transaction status -->
                                        <?php $st =$row['status'];
if ($st =='Approved' && $st =$row['approved']=='Approved' && $row['userID'] == $userID) {
                                        if ($st=="Pending") {?>
                                        <span class="badge bg-orange"><?php echo"Processing..."?></span></span>
                                        <?php }elseif($row['approved']=="Approved" && $st=="Approved"){?>
                                        <span class="badge bg-green"><?php echo $st?></span>
                                        <?php }elseif($st=="Error"){?>
                                        <span class="badge bg-red"><?php echo $st?></span>
                                        <?php }else{?><span class="badge bg-blue"><?php echo"Processing..."?></span><?php }}else{
                                            echo '#XXXX';
                                        }?>
                                    </div>
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
    <!-- get the record store in invoice table -->
<?php  $tquery= mysqli_query($conn,"SELECT * FROM invoice ORDER BY id ASC")or die(mysqli_error($conn)); ?>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Description</th>
                                                        <th>Transaction Date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                    <!--fetch data from the invoice tabel  -->
                            <tbody><?php while ($trow=mysqli_fetch_array($tquery, MYSQLI_ASSOC)) {?>
                                     <?php  if ($trow['userID'] == $userID) {?>
                                                    <tr class="bg-gray">
                                                        <td><?php echo $sn++; ?></td>
                                                        <td><?php if ($trow['status'] !== 'Approved') {
                                                            echo $trow['description'];
                                                        }else{
                                                            echo "<p>Purchased</p>";
                                                        } ?></td>
                                                        <td><?php echo $trow['date']?></td>
                                                        <td><a href="invoice.php?id=<?php echo $trow['id'] ?>">
                                <!-- check status before doing anything-->
                                        <?php $st =$trow['status'];
                                        if ($st=="Pending") {?>
                                        <span class="badge bg-orange"><?php echo $st?></span>
                                     <?php }elseif($trow['approved']=="Approved" && $st=="Approved"){?>
                                        <span class="badge bg-green"><?php echo $st?></span>
                                        <?php }elseif($st=="Error"){?>
                                        <span class="badge bg-red"><?php echo $st?></span>
                                        <?php }else{?><span class="badge bg-blue"><?php echo"Processing..."?></span><?php }?></a></td>
                                        <td><a href="invoice.php?id=<?php echo $trow['id'] ?>"><span class="btn btn-info btn-sm">View</span></a></td>
                                                    </tr>
                                                <?php }else{
                                                  //do nothing
                                                }?>
                                                <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div><button class="btn btn-danger btn-lg btn-block">Contact Support</button></div>
    <?php
    include('copyright.php');
    ?>
</section>
<?php
// include footer 
// Jquery Core Js 

include('footer.php');
