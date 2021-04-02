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
                                    <center><h3>Add Fresh Land</h3></center>
                                    <form method="POST" action="uploadLand.php" multipart="" enctype="multipart/form-data">
                                        <div class="table-responsive">
                                         <table id="fixed_table" class="table table-condensed  row-border order-column" cellspacing="0" cellpadding="20px" cellspacing="20px">
                                         	<tbody>
                                              <tr>        
                                              <td><label for="title">Land Title</label>
                                              	<input type="text" class="form-control" name="title" required="yes" >
                                              </td>
                                               <td><label for="price">Price</label>
                                              	<input type="text" class="form-control" name="price" required="yes" >
                                              </td> 
                                               <td><label for="landSize">Land Size </label>
                                              	<input type="text" class="form-control" name="landSize">
                                              </td>
                                          	</tr>
                                              <tr>
                                               <td><label for="location">Location</label>
                                              	<input type="text" class="form-control" name="location" required="yes" >
                                              </td>
                                               <td><label for="purpose">Purpose</label>
                                              	<input type="text" class="form-control" name="purpose" required="yes" >
                                              </td>
                                               

                                             <td colspan="3"><label for="description">Description</label>
                                              	<input type="text" class="form-control" name="description" placeholder="Enter property description here">
                                              </td>
                                              </tr>
                                              <tr>
                                              <td colspan="3"><label for="landimage">Land Image</label>
                                              	<input type="file" class="form-control" name="userImage[]" required="yes" >
                                              </td>                                              	
                                              </tr> 
                                              <tr>
                                              <td><label for="image1">Image 1</label>
                                              	<input type="file" class="form-control" name="userImage[]">
                                              </td>
                                              <td><label for="image2">Image 2</label>
                                              	<input type="file" class="form-control" name="userImage[]">
                                              </td> 
                                              <td><label for="image3">Image 3</label>
                                                <input type="file" class="form-control" name="userImage[]">
                                              </td>
                                          	</tr>
                                              <tr>

                                              <td colspan="3"><label for="image4">Image 4</label>
                                              	<input type="file" class="form-control" name="userImage[]">
                                              </td>                                              
                                              </tr> 
                                              <tr>
                                              	<td colspan="3">
                                              		<button name="addLand" class="btn btn-block" style="background-color:#996600">Add Property</button>
                                              	</td>
                                              </tr>                                                    
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
