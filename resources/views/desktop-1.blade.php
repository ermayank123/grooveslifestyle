<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>9 TO 9 School</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <!-- Hero Section -->
  <section class="hero text-center text-white d-flex align-items-center">
    <div class="container">
      <!-- Header Section -->
      <header class="d-flex justify-content-between align-items-center">
        <!-- Left Side: Logo -->
        <img src="{{ asset('images/logo.jpeg') }}" class="logo" alt="9 TO 9 School Logo">

        <!-- Right Side: Navigation -->
        <nav>
          <ul class="nav-list">
            <li><a href="#home" class="nav-link">Home</a></li>
            <li><a href="#timetable" class="nav-link">Timetable</a></li>
            <li><a href="#programs" class="nav-link">Programs</a></li>
            <li><a href="#gallery" class="nav-link">Gallery</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
          </ul>
        </nav>
      </header>

      <!-- Main Content -->
      <h1>Welcome to The <span class="text-warning">9 TO 9 School</span></h1>
      <p>Providing quality education with fun and interactive learning.</p>
      <a href="#" class="btn btn-warning">Apply Today</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="feature-item">
            <img src="{{ asset('images/feature1.png') }}" alt="Happy Environment">
            <h4>Happy Environment</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="feature-item">
            <img src="{{ asset('images/feature2.png') }}" alt="Active Learning">
            <h4>Active Learning</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="feature-item">
            <img src="{{ asset('images/feature3.png') }}" alt="Creative Lessons">
            <h4>Creative Lessons</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="feature-item">
            <img src="{{ asset('images/feature4.png') }}" alt="Amazing Playground">
            <h4>Amazing Playground</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ongoing Classes -->
  <section class="classes py-5 text-center">
    <div class="container">
      <h2>Take The Classes & Start Learning Today</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="class-card p-3">
            <img src="{{ asset('images/class1.jpg') }}" class="img-fluid" alt="Drawing Class">
            <h4>Drawing Class</h4>
            <p>Interactive learning for kids.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="class-card p-3">
            <img src="{{ asset('images/class2.jpg') }}" class="img-fluid" alt="Music Class">
            <h4>Music Class</h4>
            <p>Learning through melodies.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="class-card p-3">
            <img src="{{ asset('images/class3.jpg') }}" class="img-fluid" alt="Math Class">
            <h4>Math Class</h4>
            <p>Fun with numbers and logic.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Teachers Section -->
  <section class="teachers" data-aos="fade-up" data-aos-duration="1000">
    <h2>Our Talented Teachers</h2>
    <div class="teacher-list">
      <div class="teacher-card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
        <img src="{{ asset('images/teacher1.jpg') }}" alt="Teacher">
        <h3>Warso Setyo</h3>
        <p>Headmaster</p>
      </div>
      <div class="teacher-card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
        <img src="{{ asset('images/teacher2.jpg') }}" alt="Teacher">
        <h3>Warso Setyo</h3>
        <p>Headmaster</p>
      </div>
      <div class="teacher-card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
        <img src="{{ asset('images/teacher3.jpg') }}" alt="Teacher">
        <h3>Warso Setyo</h3>
        <p>Headmaster</p>
      </div>
    </div>
  </section>

  <!-- Weekly Schedule Section -->
  <section class="schedule" data-aos="fade-up" data-aos-duration="1200">
    <h2>Our Weekly Schedule</h2>
    <div class="schedule-table">
      <div class="schedule-row">
        <div class="schedule-item red" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
          Mathematics<br>8:00 AM</div>
        <div class="schedule-item yellow" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">Art
          Classes<br>9:00 AM</div>
        <div class="schedule-item green" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
          Geography<br>10:00 AM</div>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="how-it-works" data-aos="fade-up" data-aos-duration="1200">
    <h2>How it Works: Downloading 9 TO 9 School</h2>
    <p>Discover the magic of EduPlay in just a few simple steps!</p>
    <ol>
      <li>Download our app</li>
      <li>Explore and Sign Up</li>
      <li>Customize preferences</li>
      <li>Dive into Playful Learning</li>
      <li>Track Progress</li>
      <li>Stay Connected</li>
    </ol>
    <div class="app-buttons">
      <a href="https://play.google.com/store/apps/details?id=com.yourapp" target="_blank">
        <img src="{{ asset('images/google-play.jpeg') }}" alt="Google Play" data-aos="zoom-in" data-aos-duration="1000"
          data-aos-delay="400">
      </a>
      <a href="https://apps.apple.com/us/app/your-app-id" target="_blank">
        <img src="{{ asset('images/app-store.jpeg') }}" alt="App Store" data-aos="zoom-in" data-aos-duration="1000"
          data-aos-delay="600">
      </a>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery" data-aos="fade-up" data-aos-duration="1200">
    <h2>Gallery</h2>
    <div class="gallery-container">
      <img src="{{ asset('images/gallery1.jpg') }}" alt="Gallery Image" data-aos="flip-up" data-aos-duration="1000">
      <img src="{{ asset('images/gallery2.jpg') }}" alt="Gallery Image" data-aos="flip-up" data-aos-duration="1000"
        data-aos-delay="200">
      <img src="{{ asset('images/gallery3.jpg') }}" alt="Gallery Image" data-aos="flip-up" data-aos-duration="1000"
        data-aos-delay="400">
      <img src="{{ asset('images/gallery4.jpg') }}" alt="Gallery Image" data-aos="flip-up" data-aos-duration="1000"
        data-aos-delay="600">
      <img src="{{ asset('images/gallery5.jpg') }}" alt="Gallery Image" data-aos="flip-up" data-aos-duration="1000"
        data-aos-delay="800">
    </div>
  </section>

  <!-- Contact Us -->
  <section class="contact-us py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="{{ asset('images/contact1.jpg') }}" class="img-fluid rounded shadow" alt="Kids">
        </div>
        <div class="col-md-6">
          <div class="p-4 bg-white rounded shadow">
            <h6 class="text-warning">Contact Us</h6>
            <h3>How To Enroll Your Child?</h3>
            <form>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="Last Name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="tel" class="form-control" placeholder="Phone Number" required>
                </div>
              </div>
              <div class="mb-3">
                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
              </div>
              <button type="submit" class="btn btn-warning w-100">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>