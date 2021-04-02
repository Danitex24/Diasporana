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
                                    <center><h3>Add new properties</h3></center>
                                    <form method="POST" action="uploadPropertity.php" multipart="" enctype="multipart/form-data">
                                        <div class="table-responsive">
                                         <table id="fixed_table" class="table table-condensed  row-border order-column" cellspacing="0" cellpadding="20px" cellspacing="20px">
                                         	<tbody>
                                              <tr>
                                              <td><label for="name">Property Name</label>
                                              	<input type="text" class="form-control" name="name" required="yes" >
                                              </td>
                                               <td><label for="price">Price</label>
                                              	<input type="text" class="form-control" name="price" required="yes" >
                                              </td> 
                                               <td><label for="vat">Vats</label>
                                              	<input type="text" class="form-control" name="vat">
                                              </td>
                                          	</tr>
                                              <tr>
                                               <td><label for="propLocation">Location</label>
                                              	<input type="text" class="form-control" name="propLocation" required="yes" >
                                              </td>
                                               <td><label for="sqf">Square-Feet </label>
                                              	<input type="text" class="form-control" name="sqf" required="yes" >
                                              </td>
                                               <td><label for="bedroom">Bedrrom </label>
                                              	<input type="text" class="form-control" name="bedroom">
                                              </td>
                                               </tr>
                                                <tr>
                                              <td><label for="pspace">Parking Space</label>
                                              	<input type="text" class="form-control" name="pspace">
                                              </td>
                                              <td><label for="garages">Garages</label>
                                              	<input type="text" class="form-control" name="garages">
                                              </td>
                                              <td><label for="otherInfo">Other Info</label>
                                              	<input type="text" class="form-control" name="otherInfo">
                                              </td>
                                         	 </tr>
                                              <tr>
                                              <td><label for="frent">For Rent</label>
                                              	<input type="text" name="frent" class="form-control" placeholder="eg. Yes">
                                              </td>
                                              <td><label for="fsale">For Sale</label>
                                              	<input type="text" name="fsale" class="form-control" placeholder="eg. Yes">
                                              </td>
                                              <td><label for="verified">Verify by AGIS</label>
                                              	<input type="text" name="verified" class="form-control" value="Document  to be processed" readonly="yes">
                                              </td>                                              
                                              </tr>
                                              <tr>                                              
                                             <td colspan="3"><label for="description">Description</label>
                                              	<input type="text" class="form-control" name="description" placeholder="Enter property description here">
                                              </td>
                                              </tr>
                                              <tr>
                                              <td colspan="3"><label for="propImage">Property Image</label>
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
                                              <td><label for="image4">Image 4</label>
                                              	<input type="file" class="form-control" name="userImage[]">
                                              </td>
                                              <td><label for="image5">Image 5</label>
                                              	<input type="file" class="form-control" name="userImage[]">
                                              </td>
                                              <td><label for="image6">Image 6</label>
                                              	<input type="file" class="form-control" name="userImage[]">
                                              </td>                                              
                                              </tr> 
                                              <tr>
                                              	<td colspan="3">
                                              		<button name="addprop" class="btn btn-block" style="background-color:#996600">Add Property</button>
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
