<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>9To9 Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">

</head>

<body>

  <!-- Header -->

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark" x-data="{ open: false }" data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.jpeg') }}" alt="9To9 Schools Logo" class="logo" data-aos="zoom-in"
          style="max-width: 80px;">
      </a>
      <span class="text-light">📍 India | 📞 +1234567890</span>
      <button @click="open = !open" class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-left" data-aos-delay="200">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-left" data-aos-delay="300">Timetable</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-left" data-aos-delay="400">Programs</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-left" data-aos-delay="500">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-aos="fade-left" data-aos-delay="600">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Hero Section -->
  <section class="hero" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>Welcome To <span class="text-warning">9To9 Schools</span></h1>
          <p>Providing quality education with a fun learning environment.</p>
          <button class="btn btn-warning">Apply Today</button>
        </div>
        <div class="col-md-6">
          <img src="img/phone-mockup.png" alt="App Interface" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="container my-5 text-center" data-aos="zoom-in">
    <div class="row">
      <div class="col-md-4">
        <div class="stats-box">82k<br>Active Users</div>
      </div>
      <div class="col-md-4">
        <div class="stats-box">4.8/5⭐<br>Based on 2000 reviews</div>
      </div>
      <div class="col-md-4">
        <div class="stats-box">100+<br>Programs</div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features text-center my-5" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-md-3" data-aos="flip-left">
          <div class="icon-box">
            <img src="img/happy-env.png" alt="">
            <h5>Happy Environment</h5>
          </div>
        </div>
        <div class="col-md-3" data-aos="flip-left" data-aos-delay="200">
          <div class="icon-box">
            <img src="img/active-learning.png" alt="">
            <h5>Active Learning</h5>
          </div>
        </div>
        <div class="col-md-3" data-aos="flip-left" data-aos-delay="400">
          <div class="icon-box">
            <img src="img/creative-lessons.png" alt="">
            <h5>Creative Lessons</h5>
          </div>
        </div>
        <div class="col-md-3" data-aos="flip-left" data-aos-delay="600">
          <div class="icon-box">
            <img src="img/playground.png" alt="">
            <h5>Amazing Playground</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="container text-center my-5" data-aos="fade-up">
    <h2>Why Choose Us?</h2>
    <p>Our platform offers a range of features designed to make learning accessible, flexible, and tailored to your
      child's unique needs.</p>
  </section>

  <!-- Customized Classes Section -->
  <section class="custom-section" data-aos="fade-right">
    <div class="container">
      <!-- First Row -->
      <div class="row align-items-center custom-box blue-bg">
        <div class="col-md-6">
          <img src="img/phone-mockup.png" alt="Customized Classes" class="img-fluid">
        </div>
        <div class="col-md-6 custom-text">
          <h2>Customized Classes</h2>
          <p>Customized classes refer to tailored learning experiences where content, pace, and teaching methods
            are adjusted based on the learner’s needs, preferences, and goals.</p>
          <a href="#" class="custom-btn">1 day free trial</a>
        </div>
      </div>
      <!-- Second Row -->
      <div class="row align-items-center custom-box pink-bg mt-4" data-aos="fade-left">
        <div class="col-md-6 order-md-2">
          <img src="img/phone-mockup.png" alt="Personalized Timetable" class="img-fluid">
        </div>
        <div class="col-md-6 custom-text order-md-1">
          <h2>Personalized Timetable</h2>
          <p>A Personalized Timetable is a customized schedule designed to fit an individual’s needs, preferences,
            and constraints. It is commonly used in educational platforms and productivity tools.</p>
          <a href="#" class="custom-btn">1 day free trial</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Flexible Fee Plans Section -->
  <section class="custom-section" data-aos="fade-up">
    <div class="container">
      <!-- First Row -->
      <div class="row align-items-center custom-box green-bg">
        <div class="col-md-6">
          <img src="img/phone-mockup.png" alt="Flexible Fee Plans" class="img-fluid">
        </div>
        <div class="col-md-6 custom-text">
          <h2>Flexible Fee Plans</h2>
          <p>A Flexible Fee Plan allows users to pay based on their needs, usage, and budget rather than a fixed cost.
            This approach makes pricing more accessible, scalable, and user-friendly.</p>
          <a href="#" class="custom-btn">1 day free trial</a>
        </div>
      </div>
      <!-- Second Row -->
      <div class="row align-items-center custom-box yellow-bg mt-4" data-aos="fade-down">
        <div class="col-md-6 order-md-2">
          <img src="img/phone-mockup.png" alt="Live Chat With Teachers" class="img-fluid">
        </div>
        <div class="col-md-6 custom-text order-md-1">
          <h2>Live Chat With Teachers</h2>
          <p>The Live Chat with Teachers feature allows students and parents to directly communicate with teachers in
            real time. This enhances engagement, provides instant support, and improves learning experiences.</p>
          <a href="#" class="custom-btn">1 day free trial</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-section" data-aos="zoom-in">
    <div class="container">
      <h2>See Our Platform in Action</h2>
      <p>Watch how our platform makes learning interactive and engaging for children.</p>
      <div class="video-container">
        <img src="img/video-thumbnail.jpg" alt="Video Preview">
        <a href="#" class="play-button">
          <i class="fas fa-play"></i>
        </a>
      </div>
      <div class="mt-3">
        <a href="#" class="btn btn-warning">Download App</a>
        <a href="#" class="btn btn-link">Demo</a>
      </div>
    </div>
  </section>

  <!-- App Download Guide Section -->
  <section class="download-section" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2>Start Your Child's Learning Journey Today</h2>
          <p>Discover the magic of EduPlay in just a few simple steps! Download the app and unlock a world where
            learning meets play.</p>
          <ul>
            <li>Download our app</li>
            <li>Explore and Sign Up</li>
            <li>Customize preferences for personalized learning</li>
            <li>Dive into Playful Learning</li>
            <li>Track Progress and Celebrate Achievements</li>
            <li>Stay Connected & Enjoy the Benefits of EduPlay</li>
          </ul>
          <div class="app-buttons mt-3">
            <a href="#"><img src="{{ asset('assets/images/google-play.jpeg') }}" alt="Google Play"></a>
            <a href="#"><img src="{{ asset('assets/images/app-store.jpeg') }}" alt="App Store"></a>
          </div>
        </div>
        <div class="col-md-6">
          <img src="img/phone-mockup.png" alt="App Preview" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonial-section" data-aos="fade-up">
    <div class="container">
      <h2>What Parents Say About Us</h2>
      <p>Read success stories from parents who have transformed their children's education journey</p>
      <div class="d-flex justify-content-center">
        <a href="#" class="review-button">Give Us Review</a>
      </div>
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="testimonial-box" data-aos="fade-right">
            <img src="img/parent1.jpg" alt="Parent 1">
            <h5>Rajesh Kumar</h5>
            <p class="testimonial-text">This platform has transformed my children's learning experience...</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-box" data-aos="fade-right" data-aos-delay="200">
            <img src="img/parent2.jpg" alt="Parent 2">
            <h5>Rajesh Kumar</h5>
            <p class="testimonial-text">The personalized approach and flexible scheduling made education fun...</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-box" data-aos="fade-right" data-aos-delay="400">
            <img src="img/parent3.jpg" alt="Parent 3">
            <h5>Rajesh Kumar</h5>
            <p class="testimonial-text">My children now enjoy learning more than ever before...</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery-section" data-aos="fade-up">
    <div class="container">
      <h2>Gallery</h2>
      <div class="gallery-grid">
        <img src="img/gallery1.jpg" alt="Gallery Image 1">
        <img src="img/gallery2.jpg" alt="Gallery Image 2">
        <img src="img/gallery3.jpg" alt="Gallery Image 3">
        <img src="img/gallery4.jpg" alt="Gallery Image 4">
        <img src="img/gallery5.jpg" alt="Gallery Image 5">
        <img src="img/gallery6.jpg" alt="Gallery Image 6">
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section" data-aos="fade-left">
    <div class="container">
      <div class="contact-container">
        <!-- Left Side - Mobile App Mockup -->
        <div class="contact-image">
          <img src="img/chat-app-mockup.png" alt="Chat App" style="max-width: 100%;">
        </div>

        <!-- Right Side - Contact Form -->
        <div class="contact-form">
          <h2>How To Enroll Your Child?</h2>
          <p>Need help? Have some feedback for us? Get in touch now!</p>
          <form>
            <div class="row">
              <div class="col-6">
                <input type="text" placeholder="First Name">
              </div>
              <div class="col-6">
                <input type="text" placeholder="Last Name">
              </div>
            </div>
            <input type="email" placeholder="Email">
            <input type="text" placeholder="Phone Number">
            <textarea placeholder="Message" rows="4"></textarea>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
  AOS.init();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>