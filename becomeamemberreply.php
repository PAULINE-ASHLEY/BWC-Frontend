<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Black Woman Can</title>
    <link rel="icon" type="image/logo.png" href="images/logo.png">
    <link rel="stylesheet" href="CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
          <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
            <?php include 'nav.php'; ?>
          </div>

        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10" style="padding:20px">

          <a class="nav-link" href="contact.php" style="background-color:black;padding-top:60px">
            <i class="fa fa-arrow-left" style="color:#c500ff;background-color:black;font-size:40px"></i>
          </a>
          <div style="background-color:black;padding-bottom:10px;padding-top:10px">
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Name: Chigozie Onyi</p>
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Email: chigozie@yahoo.com</p>
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Phone Number: +234 8069864358</p>
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Social Media URL</p>
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Country: Nigeria</p>
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Available Date: DD MM YY</p>
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Host Brief Bio: My Name is Stella
          the POF in BWC
          </p>
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Attach a CV:</p>
          <p style="padding-left:60px;font-size:20px;background-color:black;color:white">Headshot:</p>
<!--================ reply form popup ==============-->
                  <button class="open-button" onclick="openForm()">Reply</button>

                  <div class="reply-popup" id="myForm">
                  <form action="/action_page.php" class="form-container">
                  <h3>Reply</h3>

                  <label for="msg"><b>Message</b></label>
                  <textarea placeholder="Type message.." name="msg" required></textarea>

                  <button type="submit" class="btn">reply</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                  </form>
                  </div>
<!--========== end of reply form popup =============-->
            
        </div>

        </div>
      </div>
    </div>
<!--========= A script for the popup form  =========-->
        <script>
          function openForm() {
            document.getElementById("myForm").style.display = "block";
          }

          function closeForm() {
            document.getElementById("myForm").style.display = "none";
          }
        </script>
<!--============= end of script popup form =========-->
    

  </body>
</html>
