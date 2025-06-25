@extends('index')
@push('style')
<title> home </title>
@endpush
@section('main-content')

  <nav class="navbar">
    <div class="logo">
      <div class="logo-circle">N</div>
      <div class="logo-text">Nijhum</div>
    </div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#services"> My Services</a></li>
      <li><a href="#projects">Project</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
      
    </ul>
    <div class="hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <h1>Assalamualaikum, I'm Nijhum</h1>
          <p>I am a Graphics Designer based in Bangladesh. I'm an experienced Graphics Designer with 5+ years in the field, collaborating with many companies and startups.</p>
          <a href="#contact" class="btn">Hire Me</a>
        </div>
        <div class="hero-image">
          <img src="{{asset('assets/image/2.jpeg')}}" alt="Nijhum's Photo">
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services">
    <div class="container">
      <h2>My Services</h2>
      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon">L</div>
          <h3>Logo Design</h3>
          <p>Professional logo design that represents your brand identity and makes you stand out from competitors.</p>
          <a href="#" class="learn-more">Learn More</a>
        </div>
        <div class="service-card">
          <div class="service-icon">P</div>
          <h3>Poster Design</h3>
          <p>Eye-catching poster designs for events, promotions, and advertisements that grab attention.</p>
          <a href="#" class="learn-more">Learn More</a>
        </div>
        <div class="service-card">
          <div class="service-icon">T</div>
          <h3>Thumbnail Design</h3>
          <p>Engaging YouTube thumbnails that increase click-through rates and help grow your channel.</p>
          <a href="#" class="learn-more">Learn More</a>
        </div>
      </div>
      <div class="services-btn">
        <a href="#services" class="btn">View All Services</a>
      </div>
    </div>
  </section>
    <!-- Project Section -->
  <section id="projects" class="projects">
    <div class="container">
        <h2>My Projects</h2>
        <div class="projects-grid">
            <div class="project-card">
                <img src="{{ asset('assets/image/3.png') }}" alt="Brand Identity Design">
                <h3>Brand Identity Design</h3>
                <p>Complete branding package for a local business including logo, business cards, and stationery.</p>
            </div>
            <div class="project-card">
                <img src="{{ asset('assets/image/4.png') }}" alt="Social Media Campaign">
                <h3>Social Media Campaign</h3>
                <p>Series of social media graphics for a product launch campaign.</p>
            </div>
            <div class="project-card">
                <img src="{{ asset('assets/image/5.png') }}" alt="Website Redesign">
                <h3>Website Redesign</h3>
                <p>UI/UX redesign for a corporate website focusing on improved user experience.</p>
            </div>
        </div>
    </div>
</section>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="container">
      <h2>About Me</h2>
      <div class="about-content">
        <div class="about-image">
          <
          <img src="{{asset('assets/image/2.jpeg')}}" alt="Nijhum's Photo">
        </div>
        <div class="about-text">
          <p>I'm a passionate graphic designer with over 5 years of experience creating visual concepts to communicate ideas that inspire, inform, and captivate consumers.</p>
          <p>My expertise includes logo design, branding, print design, and digital media. I work closely with clients to understand their needs and deliver designs that exceed expectations.</p>
          
          <div class="about-stats">
            <div class="stat-item">
              <div class="stat-number">25+</div>
              <div class="stat-text">Projects complete </div>
            </div>
            <div class="stat-item">
              <div class="stat-number">12</div>
              <div class="stat-text">Industries cover</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">5+</div>
              <div class="stat-text">experience Years</div>
            </div>
          </div>
          <a href="path/to/your-cv.pdf" class="btn" id="downloadCV">Download CV</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <div class="container">
      <h2>Get In Touch</h2>
      <div class="contact-container">
        <div class="contact-info">
          <h3>Contact Information</h3>
          <div class="contact-details">
            <div class="contact-item">
              <div class="contact-icon">L</div>
              <div class="contact-text">
                <h4>Location</h4>
                <p>Dhaka, Bangladesh</p>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-icon">P</div>
              <div class="contact-text">
                <h4>Phone</h4>
                <p>01302020202</p>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-icon">E</div>
              <div class="contact-text">
                <h4>Email</h4>
                <p>sumaiyabintemizan147@gmail.com</p>
              </div>
            </div>
          </div>
          <h3>Follow Me</h3>
          <div class="social-media">
            <a href="https://github.com/Sumaiya143" class="social-link" target="_blank">G</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection
