<?php
include('../includes/connection.php');
include('../includes/session.php');
// Salamat Diasporana Design by: Daniel Adasho  08039575760
$idfromIvoice=$_GET['id'];
$inquery= mysqli_query($conn,"SELECT * FROM invoice WHERE id='$idfromIvoice' ")or die(mysqli_error($conn));
$inrow = mysqli_fetch_array($inquery, MYSQLI_ASSOC);
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
?>
<section class="content invoice">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <br><br><br>
                <h2>Current Transactions:
               <small class="text-muted">
                <?php 
                $Year = 2019; 
                $curYear = date('Y'); 
                echo (($Year != $curYear) ? $Year.' '.'To'.' ' . $curYear : '');
                ?>.
               </small>
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
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                        <div class="card" id="details">
                            <div class="body">                                
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <address>
                                            <strong><?php echo $inrow['compName'] ?></strong><br>
                                            <?php echo $inrow['compAddress'] ?><br>
                                            <abbr title="Phone">Call:</abbr> (234) <?php echo $inrow['contact'] ?>
                                        </address>
                                    </div>
                                    <div class="col-md-4 col-sm-4"><img src="assets/images/salamat_logo.jpg" width="150" alt="Salamat-Diasporona">
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-right">
                                        <p class="m-b-0"><strong>Order Date: </strong><?php echo $inrow['date'] ?></p>
                                        <p class="m-b-0"><strong>Order Status: </strong>            
                                        <!-- change background color and echo out transaction status -->
                                        <?php $st =$inrow['status'];
                                        if ($st=="Pending") {?>
                                        <span class="badge bg-orange"><?php echo $st?></span>
                                        <?php }elseif($inrow['approved']=="Approved" && $st=="Approved"){?>
                                        <span class="badge bg-green"><?php echo $st?></span>
                                        <?php }elseif($st=="Error"){?>
                                        <span class="badge bg-red"><?php echo $st?></span>
                                        <?php }else{?><span class="badge bg-blue"><?php echo"Processing..."?></span><?php }?></p>
                                        <p><strong>Order ID: </strong> <?php echo $inrow['orderID'] ?></p>
                                    </div>
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                         <table id="fixed_table" class="table table-condensed  row-border order-column" cellspacing="0">
                                                <thead>
                                                    <tr><th>S/N</th>
                                                    <th>Property Name</th>
                                                    <th>Property Location</th>
                                                    <th>Qty</th>
                                                    <th>Description</th>
                                                    <th>Date</th>
                                                    <th>Aount</th>
                                                </tr></thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                <td><?php if($inrow['landTitle']) {echo $inrow['landTitle'];}else{echo $inrow['propName'];} ?></td>
                                                        <td><?php if($inrow['landTitle']){ echo $inrow['landLocation'];}else{echo $inrow['propL'];} ?></td>
                                                        <td><?php echo $inrow['qty'] ?></td>
                                                        <td><?php echo $inrow['description'] ?></td>
                                                        <td><?php echo $inrow['date'] ?></td>
                                                        <td>&#8358;&nbsp;<?php if($inrow['landTitle']){ echo $inrow['landPrice'];}else{echo $inrow['amount'];} ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Note</h5>
                                        <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <p><b>Sub-total:</b> <?php if($inrow['landTitle']){ echo $inrow['landPrice'];}{echo $inrow['subTotal'];} ?></p>
                                        <p>Discout: <?php echo $inrow['discount'] ?>%</p>
                                        <p>VAT: <?php echo $inrow['vat'] ?></p>                                        
                                        <h3 class="m-b-0">&#8358; <?php if($inrow['landTitle']){ echo $inrow['landPrice'];}else{echo $inrow['total'];} ?></h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="hidden-print col-md-12 text-right">
    <?php if ($inrow['status']=='Approved') {?>
        
 <!-- print to pdf form -->
<form method="GET" action="printInvoice.php">
<a name="print" href="printInvoice.php?id=<?php echo $inrow['id'] ?>" class="btn btn-info btn-round"><i class="zmdi zmdi-print"></i></a>
<!--save as text format -->
<a name="exp" href="expInvoice.php?id=<?php echo $inrow['id'] ?>" class="btn btn-primary btn-round">Save</a>
</form>
<?php }else{
    echo "<p class='btn btn-info'>Please wait, order sent for processing.........</p>";
}?>
<a name="exp" href="transactions.php?id=<?php echo $inrow['id'] ?>" class="btn btn-primary btn-block btn-round">Back to transactions</a>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><button class="btn btn-danger btn-lg btn-block">Contact Support</button></div>
            </div>
        </div>
    </div>
</section>
<?php
// include footer 
// Jquery Core Js 

include('footer.php');
