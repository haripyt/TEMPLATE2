<?php
$submit=false;
if(isset($_POST['name']))
{
   $server="localhost";
   $username="root";
   $password="";

   $con =mysqli_connect($server,$username,$password);
   if(!$con){
   	 die("Connect failed due to" .mysqli_connect_error());

   }
   // echo "sucessfull";

   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $dept=$_POST['dept'];
   $onstage=$_POST['onstage'];
   if(!empty($onstage))
    {
      foreach($onstage as $on);
    }
   else
   {
      $on="-";
   } 
   $offstage=$_POST['offstage'];
   if(!empty($offstage))
   {
      foreach($offstage as $off);
   }
   else
   {
      $off="-";
   } 
   $sql="INSERT INTO `register`.`registration` (`name`, `email`, `phone`, `dept`, `onstage`, `offstage`, `date`) VALUES ('$name', '$email', '$phone', '$dept', '$on', '$off',current_timestamp());";
   
  
   // echo $sql;

   if($con->query($sql)== true){
      $submit = true;
   }
   else{
      echo"ERROR: $sql <br> $con->error";
   }
   $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+flaticon.css+style.css.pagespeed.cc.bxoDsg8y1N.css" />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration</title>
</head>
<body>
        <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md d-flex align-items-center">
                    <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="mailto:hh128734@gmail.com"><span class="__cf_email__" data-cfemail="bbded6dad2d7c8dad6cbd7defbded6dad2d795d8d4d6">hh128734@gmail.com</span></a></p>
                </div>
                <div class="col-12 col-md d-flex justify-content-md-end align-items-center">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                    <p class="mb-0"><a href="https://docs.google.com/forms/d/e/1FAIpQLSc5MMAICVYw8wQhbu6wYRlTB7sQ0zZswx4_3PIHN3h2e9dQzA/viewform" target="blank" class="btn btn-primary">Register Now</a></p>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="text-decoration:none;color: white;text-shadow: 2px 1px red;">CYBERFEST|2K22</a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span  class="oi oi-menu"></span> Menu
</button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto" style="color:black;text-shadow: 1px 2px black;">
                    <li class="nav-item "><a href="index.html" class="nav-link" >Home</a></li>
                    <li class="nav-item "><a href="about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="schedule.html" class="nav-link">Schedule</a></li>
                    <li class="nav-item"><a href="speaker.html" class="nav-link">Guest</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item active"><a href="register.html" class="nav-link">Register Now</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-wrap hero-wrap-2" style="background-image:url(https://previews.123rf.com/images/houbacze/houbacze1701/houbacze170100393/70912329-red-easy-vector-illustration-isolated-circle-tag-banner-register-now-this-element-is-well-adapted-fo.jpg);height:430px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Contact us</h1><br>
                    <a href="register.html"  class="btn btn-primary px-3 py-2">Register Now </a>

                </div>
            </div>
        </div>
    </section>
    <div class="container py-5" >
        <div class="row" >
            <div class="col-lg-5 col-md-8 mx-auto shadow border bg-white p-4 rounded" >
                <h2 class="text-center fw-bold mb-3">Register Here</h2>
                <?php
             if($submit == true){
             echo"<div class='alert alert-success'>Registered Successfully.</div>";
             }
             ?>   
                <form action='register.php' method='post'>
                    
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Email Id</label>
                        <input type="email" id="phone" name="email" class="form-control" placeholder="Enter your Email ID" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="Number" id="phone" name="phone" class="form-control" placeholder="Enter your Phone Number" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message" class="form-label">Department</label>
                        <input id="Department" name="dept" class="form-control" placeholder="Enter your Department" rows="5" required></input>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message" class="form-label">Select your Event</label><br>
                        <label for="phone" class="form-label">ON STAGE EVENTS:</label><br>
                        <input type=checkbox  name="onstage[]" value='adzap' >ADZAP</input><br>
                        <input type=checkbox  name="onstage[]" value='channel surfing' >CHANNEL SURFING</input><br>
                        <input type=checkbox  name="onstage[]" value='mime' >MIME</input><br>
                        <input type=checkbox  name="onstage[]" value='mr&ms' >MR & MS CYBERFEST</input><br>
                        <input type=checkbox  name="onstage[]" value='none' > None</input><br><br>
                        <label for="phone" class="form-label">OFF STAGE EVENTS:</label><br>

                        <input type=checkbox  name="offstage[]" value='poster' >POSTER MAKING</input><br>
                        <input type=checkbox  name="offstage[]" value='photography' >PHOTOGRAPHY</input><br>
                        <input type=checkbox  name="offstage[]" value='coding' >CODNG</input><br>
                        <input type=checkbox  name="offstage[]" value='treasure' >TRESURE HUNT</input><br>
                        <input type=checkbox  name="offstage[]" value='quiz' >QUIZ</input><br>
                        <input type=checkbox  name="offstage[]" value='gaming' >GAMING</input><br>
                        <input type=checkbox  name="offstage[]" value='none' > None</input>



                    </div>
                    <div>
                        <button class="btn btn-primary me-2" type="submit">Confirm Registration!</button>
                    </div>
             </form><br>
            
            </div>
         </div><br><br>
                 <h2 class="text-center fw-bold mb-3">Form Owned By <a href="https://www.instagram.com/_ha.re_here/" target="_blank" rel="nofollow noopener">HARIHARAN</a></h2>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycby-HKWWxeRXl0d8t4J3MeJeNpcWh2sXMZcYm5Sezoswv_DLyAtK-nrkKR2UebrHUP6H/exec'
        const form = document.forms['google-sheet']
        
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => $("#form_alerts").html("<div class='alert alert-success'>Registered Successfully.</div>"))
            .catch(error => $("#form_alerts").html("<div class='alert alert-danger'>Registration closed temporarily.</div>"))
        })
    </script>
</body>
</html>
