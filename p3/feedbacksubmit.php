<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
	$address=$_POST['address'];
    $suggestion=$_POST['suggestion'];
    $mailto='khangurha123sanbir@gmail.com';
    $subject='Feed back form';
    $mailBody="Name : $name\n\r  Subject : $subject \r\n Contact No : $mobile \r\n Address :$address \r\n  Suggestion : $suggestion";
		if(mail($mailto,$subject,$mailBody,"From: $name \r\n $email"))
		{
			$msg="Thanks for your submission, it will assist us in future to provide you better service ";
			if(mail($email,"Thanks",$msg,"From: Surjeet Memorial Senior Secondary School"))
			$msg=$msg.'<br/> Replied';
		}
		else
		{
			$msg="Sorry! Unable to submit your request";
		}
        //echo($msg);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <title>Surjeet Memrorial Sr. Secondary School</title>
    <style>
    .dotted{
    border-top: 1px dotted #999;
    }
  </style>
  </head>
  <body>
    <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 form-group">
    <img src="logo3.png" alt="" class="mx-auto d-block img-fluid">
        </div>
      </div>       
  </div> <!-- container end -->    
    <?php include 'header.php' ?>
      <!-- fist row end -->
    <!-- second row start -->
      <?php include 'sidebar.php' ?>
            <div class="col-sm-9">
          <img src="school33.png" alt="" class="mx-auto d-block img-fluid">
        </div>
      </div>
      <!-- second row end -->

          <!-- third row start -->
      <div class="row">
            <div class="col-sm-3">
              <h4>Photo Gallery</h4>
              <p><a href="gallery.php"><img src="images/002.jpg"></a></p>
              <p><a href="contact.php"><img src="images/callBackImg.png"></a></p>
            </div>
        <div class="col-sm-9 ">
		<p>&nbsp;</p>
          <h3 class="text-center">
		  <?php
		  echo($msg);
		  ?>
		  </h3><br/>
       </div>
      </div>
    </div>
&nbsp;
<!-- third row end -->

<!-- forth row start -->
<!-- <div class="row">
  <div class="col-sm-12"> -->
   <?php include 'footer.php'; ?>
    </body>
    </html>