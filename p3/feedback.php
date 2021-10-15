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
            <div class="col-sm-9">
               <h3 class="text-center">Feedback</h3><br/>
                 <form action="feedbacksubmit.php" method="POST">
                 <label>Name</label>
                 <span class="text-danger">*</span>
                 <input type="text" name="name" class="form-control form-group" required>
                 <label>Email</label>
                 <span class="text-danger">*</span>
                 <input type="email" name="email" class="form-control form-group" required>
                 <label>Mobile Number</label>
                 <span class="text-danger">*</span>
                 <input type="text" name="mobile" value="" class="form-control form-group" required>
                 <label>Address</label>
                 <span class="text-danger">*</span>
                 <textarea name="address" class="form-control form-group" required ></textarea>
                 <label>Suggestion</label>
         <textarea class="form-control form-group" name='suggestion'></textarea>
          <button type="submit" class="btn btn-outline-primary my-3 mx-1" style="width:20%;">Submit</button>
          <button type="reset" class="btn btn-outline-danger my-3 mx-1" style="width:15%;">Reset</button>
        </form>
        </div>
      </div>
    </div>
&nbsp;
<!-- third row end -->

<!-- forth row start -->
<!-- <div class="row">
  <div class="col-sm-12"> -->
    <?php include 'footer.php' ?>
    </body>
    </html>