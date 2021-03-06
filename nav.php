<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Black Woman Can - Dashboard</title>
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
<style>
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
}
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 17px;
  font-weight: 500;
  color: black;
  display: block;
  border: none;
  background: white;
  width: 100%;
  text-align: left;
  outline: none;
}
a:hover{
  color:#c500ff;
}
.image:hover{
  background-color: white;
}
button:hover{
  color: #c500ff;
}
i:hover{
  color:#c500ff;
}
.dropdown-container {
  display: none;
  background-color: white;
}
i{
  background-color:white;
}
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ffffff;
}
td {
  padding: 16px 16px 16px 16px;
  background-color: #ffffff;
  border-bottom: 1px solid #f0f0f0;
}
</style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">

        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
<div class="sidenav" style="color:white">
<!--BWC Logo-->
    <a class="image" href="dashboard.php" style="font-size:30px;padding-left:10px;color:black;text-decoration:none">
      <img src="images/logo.png" alt="Black Woman Can Logo" style="width:40%;background-color:white;padding-bottom:20px">
      BWC
    </a>
<!--Dashboard dropdown-->
  <button class="dropdown-btn" syle="background-color:white">DASHBOARD
    <i class="fa fa-angle-down" style="color:#c500ff"></i>
  </button>
  <div class="dropdown-container" style="color:white">
    <a href="contact.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Contact Us</a>
    <!--Forms dropdown-->
    <button class="dropdown-btn" syle="background-color:white">Forms
      <i class="fa fa-angle-down" style="color:#c500ff"></i>
    </button>
    <div class="dropdown-container" style="color:white">
      <a href="BecomeaMember.php"><i class="fa fa-circle icon" style="font-size:12px;color:#c500ff"></i> Become a Member</a>
      <a href="partnerwithus.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Partner with Us</a>
      <!--volunteer dropdown-->
        <button class="dropdown-btn" syle="background-color:white">Volunteer
          <i class="fa fa-angle-down" style="color:#c500ff"></i>
        </button>
        <div class="dropdown-container" style="color:white">
          <a href="showhost.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Show Host</a>
          <a href="guestspeaker.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Guest Speaker</a>
          <a href="contentcreator.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Content Creator</a>
          <a href="graphicdesigner.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Graphic Designer</a>
          <a href="livecoach.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Live Coach</a>
          <a href="businesseducator.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Business Educator</a>
          <a href="medicalpractitioner.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Medical Practitioner</a>
          <a href="legalaid.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Legal Aid</a>
          <a href="counsellor.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Counsellor</a>
          <a href="others.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Others</a>
        </div>
      <a href="donate.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Donate</a>

    </div>
    <!--share experience dropdown-->
      <button class="dropdown-btn" syle="background-color:white">Share Experience
        <i class="fa fa-angle-down" style="color:#c500ff"></i>
      </button>
      <div class="dropdown-container" style="color:white">
        <a href="article.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Articles</a>
        <a href="video.php"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Videos</a>
      </div>
  </div>

      <!--Uploads dropdown-->
        <button class="dropdown-btn" syle="background-color:white">UPLOADS
          <i class="fa fa-angle-down" style="color:#c500ff"></i>
        </button>
        <div class="dropdown-container" style="color:white">
          <a href="#"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Programme</a>
          <a href="#"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Announcement</a>
          <a href="#"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Projects</a>
          <a href="#"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Our Partners</a>
          <a href="#"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Blog</a>
          <a href="#"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> BWC Achievements</a>
          <a href="#"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Profile</a>
          <a href="#"><i class="fa fa-circle" style="font-size:12px;color:#c500ff"></i> Logout</a>
        </div>
</div>

        </div>

        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">

        </div>
      </div>
    </div>

    <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content -
     This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    </script>

  </body>
</html>
