<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FITEnthusiast</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="styles\index.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


   
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">FITEnthusiast</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#trainers">Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#plans">Plan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
  </div>
</nav>

      <!-- Home Section -->
    

    <!-- About Us Section -->
    <section id="about" class="about-section">
    <h2></h2>
    <div class="about-content">
      <p>Welcome to FITEnthusiast. We offer a variety of fitness classes and personal training sessions to help you achieve your fitness goals. Our experienced trainers are here to guide and motivate you every step of the way.</p>
    </div>
  </section>


<!-- Trainers Section -->
<section id="trainers" class="container my-5 mt-5"> <!-- Added mt-5 here -->
    <h2 class="text-center mb-4">Our Trainers</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card trainer-card">
                <img loading="lazy" src="styles/Trainer1.jpg" alt="Trainer 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Name: Joseph</h5>
                    <p class="card-text">Certified Personal Trainer</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card trainer-card">
                <img loading="lazy" src="styles/Trainer2.jpg" alt="Trainer 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Name: Ahmed</h5>
                    <p class="card-text">Fitness Instructor</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card trainer-card">
                <img loading="lazy" src="styles/Trainer3.jpg" alt="Trainer 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Name: Joe</h5>
                    <p class="card-text">Yoga Specialist</p>
                </div>
            </div>
        </div>
    </div>
</section>

    
  <!-- Plan Section -->
  <section id="plans" class="plans-section container-fluid">
  <center><h2>Choose a Plan</h2><center/>
  <div class="container">
    <div class="row">
    <div class="col-md-4 mb-4">
  <div class="card plan-card shadow-lg border-0">
    <div class="card-body">
      <h5 class="card-title text-uppercase text-center font-weight-bold mb-3">Basic Plan</h5>
      <p class="card-text text-center">
        <span class="display-4 text-primary font-weight-bold">₱1,699</span><small>/month</small>
      </p>
      <ul class="list-unstyled mt-4">
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Access to gym facilities</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free group classes (2 per week)</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 1 personal training session per month</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Locker and shower room access</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 5% discount on merchandise</li>
      </ul>
      <div class="text-center mt-4">
        <button class="btn btn-outline-primary btn-lg add-to-cart" data-plan="Basic Plan" data-fee="1699">Enroll Now</button>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="card plan-card shadow-lg border-0">
    <div class="card-body">
      <h5 class="card-title text-uppercase text-center font-weight-bold mb-3">Standard Plan</h5>
      <p class="card-text text-center">
        <span class="display-4 text-primary font-weight-bold">₱2,799</span><small>/month</small>
      </p>
      <ul class="list-unstyled mt-4">
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Unlimited access to gym facilities</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free group classes (4 per week)</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 2 personal training sessions per month</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Locker and shower room access</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free sauna and steam room access</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 10% discount on merchandise</li>
      </ul>
      <div class="text-center mt-4">
        <button class="btn btn-outline-primary btn-lg add-to-cart" data-plan="Standard Plan" data-fee="2799">Enroll Now</button>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 mb-4">
  <div class="card plan-card shadow-lg border-0">
    <div class="card-body">
      <h5 class="card-title text-uppercase text-center font-weight-bold mb-3">Premium Plan</h5>
      <p class="card-text text-center">
        <span class="display-4 text-primary font-weight-bold">₱4,499</span><small>/month</small>
      </p>
      <ul class="list-unstyled mt-4">
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 24/7 access to gym facilities</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Unlimited group classes</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 4 personal training sessions per month</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Access to locker, shower, sauna, and steam rooms</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free monthly nutritional consultations</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 20% discount on fitness gear and merchandise</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free premium events & workshops</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> VIP lounge access</li>
      </ul>
      <div class="text-center mt-4">
        <button class="btn btn-outline-primary btn-lg add-to-cart" data-plan="Premium Plan" data-fee="4499">Enroll Now</button>
      </div>
    </div>
  </div>
</div>
<!-- Remove the container if you want to extend the Footer to full width. -->

<div class="container my-5">

  <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section id="contact" class="contact-section mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <a class="text-white" href="https://mdbootstrap.com/">© 2024 FITEnthusiast. All Rights Reserved.</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<!-- End of .container -->


 

  <!-- Bootstrap and jQuery Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




 
</body>
</html>