<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.js"></script>
    <title>Surjeet Memrorial College Of Education</title>
    <style>
       .dotted{
        border-top: 1px dotted #999;
        }
         li{
          list-style: none;
        }
         a.footer{
          color:#414142; 
        }
        a:hover{
            color: #7e0ee6;
           }
        </style>
      </head>
      <body>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 form-group">
              <img src="log2.png" class="mx-auto d-block img-fluid">
            </div>
       </div>       
  </div> <!-- container end -->
<?php include 'header.php' ?>

           <h3 class="text-center font-weight-bold">Photo Gallery</h3>
       &nbsp;
        <div class="row">
          <div class="col-sm-3">
            <a href="images/classroom1.jpg"><img src="images/classroom1.jpg" alt="" class="img-thumbnail m-2"></a>
          </div>
          <div class="col-sm-3">
            <a href="images/classroom2.jpg"><img src="images/classroom2.jpg" alt="" class="img-thumbnail m-2"></a>
          </div>
          <div class="col-sm-3">
            <a href="images/OPMalhotra.jpg"><img src="images/OPMalhotra.jpg" alt="" class="img-thumbnail m-2"></a>
          </div>
          <div class="col-sm-3">
            <a href="images/honour2.jpg"><img src="images/honour2.jpg" alt="" class="img-thumbnail m-2"></a>
          </div>
          
        </div>
        <div class="row">
            <div class="col-sm-3">
            <a href="images/languageLab1.jpg"><img src="images/languageLab1.jpg" alt="" class="img-thumbnail m-2"></a>
          </div>
          <div class="col-sm-3">
            <a href="images/languageLab2.jpg"><img src="images/languageLab2.jpg" alt="" class="img-thumbnail m-2"></a>
          </div>
          <div class="col-sm-3">
            <a href="images/reception.jpg"><img src="images/reception.jpg" alt="" class="img-thumbnail m-2"></a>
          </div>
          <div class="col-sm-3">
            <a href="images/scienceLab.jpg"><img src="images/scienceLab.jpg" alt="" class="img-thumbnail m-2"></a>
          </div>
           
          </div>
          <div class="row">
          <div class="col-sm-3">
            <a href="images/library1.jpg"><img src="images/library1.jpg" alt="" class="img-thumbnail m-2"></a>
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
                  </br>
        <!-- Navbar Start -->
          <?php include 'footer.php' ?>
      </body>
    </html>