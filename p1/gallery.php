<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.js"></script>
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
              <img src="images/logo1.png" class="mx-auto d-block img-fluid">
            </div>
       </div>       
  </div> <!-- container end -->      
  <!-- navbar start -->  
	<?php include 'header.php'; ?>
      		<!-- third row start -->
       <h3 class="text-center font-weight-bold">Photo Gallery</h3>
       &nbsp;
         <div class="row">
          <div class="col-sm-3">
            <a href="img/1.jpg"><img src="img/1.jpg" alt="1" class="img-thumbnail"></a>
          </div>
          <div class="col-sm-3">
            <a href="img/4.jpg"><img src="img/4.jpg" alt="4" class="img-thumbnail"></a>
          </div>
          <div class="col-sm-3">
            <a href="img/3.jpg"><img src="img/3.jpg" alt="3" class="img-thumbnail"></a>
          </div>
          <div class="col-sm-3">
            <a href="img/2.jpg"><img src="img/2.jpg" alt="2" class="img-thumbnail"></a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <a href="img/5.jpg"><img src="img/5.jpg" alt="5" class="img-thumbnail"></a>
          </div>
          <div class="col-sm-3">
            <a href="img/6.jpg"><img src="img/6.jpg" alt="6" class="img-thumbnail"></a>
          </div>
          <div class="col-sm-3">
            <a href="img/7.jpg"><img src="img/7.jpg" alt="7" class="img-thumbnail"></a>
          </div>
          </div>
         <script>
        $(document).ready(function() {
        $('.row').magnificPopup({type:'image',
        delegate:'a',
          gallery:{enabled: true}
     });
        });
    </script>
        &nbsp;
    <?php include 'footer.php'; ?>
      </body>
    </html>