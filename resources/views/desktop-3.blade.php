<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Website</title>

  <!-- Link to CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <!-- AOS Library -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- <script>
  // Initialize AOS
  AOS.init();
  </script> -->
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="{{ asset('assets/images/logo.jpeg') }}" alt="9 TO 9 School" style="height: 40px;"
          data-aos="fade-down">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#" data-aos="fade-up">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-up" data-aos-delay="100">Timetable</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-up" data-aos-delay="200">Programs</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-up" data-aos-delay="300">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-up" data-aos-delay="400">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero text-center" data-aos="fade-up">
    <div class="container">
      <h1>Welcome to the <span class="text-primary">9 TO 9 School</span></h1>
      <p>Providing a fun and engaging learning environment for children.</p>
      <a href="#" class="btn btn-warning">Apply Today</a>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="why-choose" data-aos="fade-up">
    <div class="container">
      <h2 class="text-center">Why Choose Us?</h2>
      <p class="text-center">A platform designed for an interactive learning experience.</p>
      <div class="row">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-box">
            <h4>Customized Classes</h4>
            <p>Choose subjects & schedules for your child.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-box">
            <h4>Personalized Timetable</h4>
            <p>Flexible scheduling as per your child's needs.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-box">
            <h4>Flexible Fee Plans</h4>
            <p>Budget-friendly payment options.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-box">
            <h4>Live Chat with Teachers</h4>
            <p>Direct interaction for progress tracking.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-section text-center" data-aos="fade-up">
    <div class="container">
      <h2>See Our Platform in Action</h2>
      <p>Watch how our platform makes learning fun and engaging.</p>
      <div class="video-container">
        <img src="{{ asset('assets/images/video-thumbnail.jpg') }}" class="img-fluid" data-aos="zoom-in">
        <a href="{{ asset('assets/images/google.jpeg') }}" class="play-btn">&#9658;</a>
      </div>
      <a href="https://play.google.com" target="_blank" class="btn btn-warning">
        <img src="{{ asset('assets/images/google-play.jpeg') }}" alt="Google Play"
          style="height: 40px; margin-right: 10px;">
        Google Play
      </a>
      <a href="https://apps.apple.com" target="_blank" class="btn btn-warning">
        <img src="{{ asset('assets/images/app-store.jpeg') }}" alt="App Store"
          style="height: 40px; margin-right: 10px;">
        App Store
      </a>
    </div>
  </section>

  <!-- Contact Form -->
  <section class="contact-form" data-aos="fade-up">
    <div class="container">
      <h2>How To Enroll Your Child?</h2>
      <p>Get in touch with us today.</p>
      <form>
        <div class="row">
          <div class="col-md-6 mb-3"><input type="text" class="form-control" placeholder="First Name"></div>
          <div class="col-md-6 mb-3"><input type="text" class="form-control" placeholder="Last Name"></div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3"><input type="email" class="form-control" placeholder="Email"></div>
          <div class="col-md-6 mb-3"><input type="tel" class="form-control" placeholder="Phone Number"></div>
        </div>
        <textarea class="form-control mb-3" rows="3" placeholder="Message"></textarea>
        <button type="submit" class="btn btn-warning w-100">Send Message</button>
      </form>
    </div>
  </section>
  <script>
  // Initialize AOS after the DOM has loaded
  window.onload = function() {
    AOS.init();
  }
  </script>
</body>

</html>