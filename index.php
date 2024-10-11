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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

   
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
        <a class="nav-link" href="index.php">Home</a>
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
        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
      </li>
    </ul>
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
  <!-- Trainers Section -->
  <section id="trainers" class="container my-5">
      <h2 class="text-center mb-5">Our Trainers</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card trainer-card">
            <img loading="lazy" src="styles/Trainer1.jpg" alt="Trainer 1">
            <div class="card-body text-center">
              <h5 class="card-title">Name : Joseph</h5>
              <p class="card-text">Certified Personal Trainer</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card trainer-card">
            <img loading="lazy" src="styles/Trainer2.jpg" alt="Trainer 2">
            <div class="card-body text-center">
              <h5 class="card-title">Name : Ahmed</h5>
              <p class="card-text">Fitness Instructor</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div  class="card trainer-card">
            <img loading="lazy" src="styles/Trainer3.jpg" alt="Trainer 3">
            <div class="card-body text-center">
              <h5 class="card-title">Name : Joe</h5>
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
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 1 personal trainer</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Locker and shower room access</li>
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
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 2 personal trainer</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Locker and shower room access</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free sauna and steam room access</li>
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
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 3 personal trainer</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Access to locker, shower, sauna, and steam rooms</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free nutritional consultations</li>
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


  <!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="login.php" id="loginForm">
                    <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="email" class="form-control" id="username" name="username" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary" id="togglePasswordLogin" onclick="togglePassword('password', this)">
                                    <i class="fas fa-eye" id="eyeIconLogin"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <p class="mt-3 text-left">Don't have an account? <a href="#" data-toggle="modal" data-target="#registerModal">Register here</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="register.php" id="registerForm">
                    <div class="form-group">
                        <label for="registerUsername">Username:</label>
                        <input type="text" class="form-control" id="registerUsername" name="username" placeholder="Choose a username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Create a password" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary" id="togglePasswordRegister" onclick="togglePassword('registerPassword', this)">
                                    <i class="fas fa-eye" id="eyeIconRegister"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword" onclick="togglePassword('confirmPassword', this)">
                                    <i class="fas fa-eye" id="eyeIconConfirm"></i>
                                </button>
                            </div>
                        </div>
                        <small id="passwordHelp" class="form-text text-muted">Make sure to type the same password.</small>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Register</button>
                    <p class="mt-3 text-left">Already have an account? <a href="#" data-toggle="modal" data-target="#loginModal">Login here</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="login.php" id="loginForm">
                    <div class="form-group">
                        <label for="loginUsername">Username:</label>
                        <input type="text" class="form-control" id="loginUsername" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary" id="togglePasswordLogin" onclick="togglePassword('loginPassword', this)">
                                    <i class="fas fa-eye" id="eyeIconLogin"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <p class="mt-3 text-left">Don't have an account? <a href="#" data-toggle="modal" data-target="#registerModal">Register here</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap and jQuery Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Toggle password visibility
    function togglePassword(inputId, btn) {
        const input = document.getElementById(inputId);
        const eyeIcon = btn.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }

    // Handle login form submission
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Prepare form data for submission
        const formData = new FormData(this);

        fetch('login.php', { // Adjust to your actual login script path
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Check if login is successful
            if (data.success) {
                window.location.href = 'home.php'; // Redirect to home.php
            } else {
                alert(data.message); // Show error message
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred during login. Please try again.'); // Show error alert
        });
    });

    // Handle register form submission
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Password confirmation validation
        var password = document.getElementById('registerPassword').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        if (password !== confirmPassword) {
            alert("Passwords do not match. Please try again."); // Show error message
            return; // Exit if passwords do not match
        }

        // Prepare form data for submission
        const formData = new FormData(this);

        fetch('register.php', { // Adjust to your actual register script path
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Registered successfully!'); // Alert if registration is successful
                $('#registerModal').modal('hide'); // Hide registration modal
                $('#loginModal').modal('show'); // Show login modal
            } else {
                alert(data.message); // Show error message
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred during registration. Please try again.'); // Show error alert
        });
    });
</script>


 
</body>
</html>