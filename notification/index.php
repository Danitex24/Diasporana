<?php
/*insert.php
$subject='';
$comment='';
if(isset($_POST["post"]))
{
 include("connect.php");
 $subject = mysqli_real_escape_string($con, $_POST["subject"]);
 $comment = mysqli_real_escape_string($con, $_POST["comment"]);
 $query = "INSERT INTO comments(subject,comment,status) VALUES ('$subject', '$comment',0)";
 mysqli_query($con, $query);
}*/
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Notification using PHP Ajax Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
  .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.open>a{
    background-color: inherit;
    box-shadow: none!important;
  }
</style>
 </head>
 <body>
    <nav class="navbar navbar-inverse" style>
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">Notification Tutorial</a>
     </div>
     <ul class="nav navbar-nav navbar-right" style="right: 20px;top: 0;position: absolute;">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="color:white;font-size:18px;"></span></a>
       <ul class="dropdown-menu" style="background-color: white"></ul>
      </li>
     </ul>
    </div>
   </nav>
  <br /><br />
  <div class="container">
   <br />
   <form method="post" id="comment_form">
    <div id="comment_msg" align="center"></div>
    <div class="form-group">
     <label>Enter Subject</label>
     <input type="text" name="subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
     <label>Enter Comment</label>
     <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
    </div>
   </form>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 //function to load notifications
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    $('.count').html('');
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }


 //comment submit action
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


 
 //notification dropdown action
 $(document).on('click', '.dropdown-toggle', function(){
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();
 }, 1000);
 
});
</script>

<script>
  //removes the notification once clicked
  function seen_notif(seen)
 {
  $.ajax({
   url:"seen.php",
   method:"POST",
   data:{seen:seen},
   success:function(data)
   {
   }
  });
 }
 
</script>

