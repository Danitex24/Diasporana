<?php
include('../includes/connection.php');
include('../includes/session.php');
if ($_SESSION['id']==NULL) {
 header('Location: ../includes/logout.php');
}
include('header.php');
include('left-side-bar.php');
$query= mysqli_query($conn,"SELECT * FROM package ORDER BY id ASC")or die(mysqli_error($conn));
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

// Main Content 
?>

<section class="content invoice">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-12">
                <center><h4>Property Managment</h4></center>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                    <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                        <div class="card" id="details">
                            <div class="body">                                
                                <div class="row">
                                <div class="mt-40"></div>
                                <div class="col-md-1"></div>
                                    <div class="col-lg-10">
                                        <div class="" id="">
                                            <form method="POST" action="report.php" >
                                              <label for="property">Select Property</label>
                                              <select class="form-control" name="propID">
                                                <option selected="yes">Select property to send report</option>
                                                <option value="<?php echo $row['propID']; ?>"><?php if($row['subscribed']=="Approved"){ echo $row['propName'];}else{echo "You have not approve any user yet";} ?></option>
                                              </select>
                                              <label for="subject">Enter Subject</label>
                                              <input type="text" name="subject" class="form-control">
                                              <label for="content">Content</label>
                                              <textarea name="content" class="form-control">Type here....</textarea>
                                              <button name="send" class="btn btn-lg btn-primary btn-block">Send Report</button>

                                            </form>
                                        </div>
                                    </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div> 
               </div>
            </div>
        </div>
    </div>
</section>

<script>

 //submit report action
$('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_msg').html(data);
     setTimeout(function() { 
      $('#comment_form')[0].reset();
      $('#comment_msg').html('');
      load_unseen_notification();
   },1000);
    }
   });
  }
  else
  {
  $('#comment_msg').html("Both Fields are Required");
  }
 });

</script>


<?php
// include footer 
// Jquery Core Js 

include('footer.php');
