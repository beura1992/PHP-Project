<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SB Technical</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc4.jpeg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cc1.jpeg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpeg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  <h3></h3>
  <p></p>
</div>

<section class=""my-5">
    <div class="py-5">
        <h3 class="text-center">About Us</h3>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/cc6.jpeg" class="img-fluid aboutimg">

        </div>
        <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">SB Technical</h2>
         <p class="py-3">A technical writer isn’t marketing focused. They, like good technical content writers, 
            are almost always professionals in a technical field, not so much professional writers. 
            If you look at job listings for technical writers, you’ll see they often require a Bachelor of 
            Science, not a Bachelor of Arts. They might write proposals, manuals, documentation, 
            and other non-marketing materials that are technical in nature.

         </p>
         <a href="about.php" class="btn btn-success">Check More</a>
        </div>


    </div>
</div>
</section>

<section class=""my-5">
    <div class="py-5">
        <h3 class="text-center">Our Services</h3>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
         <img class="card-img-top" src="images/cc7.jpg" alt="Card image" height="250px">
         <div class="card-body">
         <h4 class="card-title">Software Development</h4>
         <p class="card-text">White papers and e-books provide an opportunity to dive deep into complex topics, 
            showcase your expertise, and offer valuable insights to your audience. Here's how you can effectively 
            leverage and implement 
            whitepapers and e-books for your content marketing efforts:.</p>
         <a href="services.php" class="btn btn-primary">Check details</a>
  </div>
</div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
         <img class="card-img-top" src="images/cc8.jpg" alt="Card image" height="250px">
         <div class="card-body">
         <h4 class="card-title">Cloud Computing</h4>
         <p class="card-text">Cloud computing enables customers to use infrastructure and applications via the internet, 
            without installing and maintaining them on-premises.Cloud services provide many ways for business team members to interact with the 
            technology they need. 
        ....</p>
         <a href="#" class="btn btn-primary">Check details</a>
  </div>
</div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
         <img class="card-img-top" src="images/cc9.jpg" alt="Card image" height="250px">
         <div class="card-body">
         <h4 class="card-title">Cybersecurity</h4>
         <p class="card-text">A subset of cybersecurity, anti-virus services are perhaps one of 
            the most common types of
             IT service found in the industry 
            Mandatory, anti-malware protection ...very useful for secure Personal data . mandatory for this It industry..................................... :.</p>
         <a href="#" class="btn btn-primary">Check details</a>
  </div>
</div>

            </div>



        </div>

        
    </div>
</section>

<section class=""my-5">
    <div class="py-5">
        <h3 class="text-center">Gallery</h3>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g7.jpg" class="img-fluid pb-3" height="200px">

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g6.jpg" class="img-fluid pb-3" height="200px">

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g9.jpg" class="img-fluid pb-3" height="200px">

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g1.jpg" class="img-fluid pb-3" height="200px">

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g2.jpg" class="img-fluid pb-3" height="200px">

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g3.jpg" class="img-fluid pb-3 height=200px">

            </div>

            
        </div>


    </div>
     

</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Contact Us</h3>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="user" class="form-control">

            </div>

            <div class="form-group">
                <label>Email id</label>
                <input type="email" name="email" class="form-control">

            </div>

            <div class="form-group">
                <label>Mobile No</label>
                <input type="text" name="mobile" class="form-control">

            </div>

            <div class="form-group">
                <label>Comment</label>
                <textarea class="form-control" name="comment">
                </textarea>

            </div>
            
        <button type="submit" class="btn btn-success">Submit</button>

        </form>
    </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@SB Technical</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html>