 <?php
session_start();
if($_SESSION['isset']==false)
{
	$message = "you are not loged in!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("location:index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>log into email</title>
</head>
<body>
<div style="margin-top: 1%;float:center;">
<div class="container">
    <form class="form-horizontal" method="post" action="webemail.php">
	<div class="form-group">
         <label class="control-label col-sm-2" for="smtp">SMTP:</label>
         <div class="col-sm-10">
         <input type="text" class="form-control" id="smtp" name="smtp">
		 <input type="checkbox" name="ssl" value="1" id="ssl"><label for="ssl">Check if your email supports ssl!</label>
         </div>
     </div>
     <div class="form-group">
         <label class="control-label col-sm-2" for="myusername">Username:</label>
         <div class="col-sm-10">
         <input type="text" class="form-control" id="myusername" name="myusername">
         </div>
     </div>
        <div class="form-group">
     <label class="control-label col-sm-2" for="mypassword">Password:</label>
           <div class="col-sm-10"> 
           <input type="password" class="form-control" name="mypassword" id="mypassword">
           </div>
        </div>
        <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" class="btn btn-default" value="Log into mail">
      </div>
        </div>
    </form>
</div>
</div>
</body>

</html> 
