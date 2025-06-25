<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @stack('style')
    <style>
        :root {
          --primary-color: #00adb5;
          --dark-color: #1e1e2f;
          --light-color: #f4f4f4;
          --text-color: #444;
        }
        
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        
        body {
          font-family: Arial, sans-serif;
          background-color: var(--light-color);
          color: var(--text-color);
          line-height: 1.6;
        }
        
        .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 20px;
        }
        
        section {
          padding: 80px 0;
        }
        
        h1, h2, h3 {
          color: var(--dark-color);
        }
        
        h1 {
          font-size: 42px;
          margin-bottom: 20px;
        }
        
        h2 {
          font-size: 36px;
          margin-bottom: 40px;
          text-align: center;
        }
        
        p {
          margin-bottom: 15px;
        }
        
        .btn {
          display: inline-block;
          background-color: var(--primary-color);
          color: white;
          padding: 12px 30px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          font-size: 16px;
          font-weight: 500;
          text-decoration: none;
          transition: all 0.3s ease;
          text-transform: uppercase;
          letter-spacing: 1px;
        }
        
        .btn:hover {
          background-color: #00777d;
          transform: translateY(-3px);
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        /* Navbar Styles */
        .navbar {
          background-color: var(--dark-color);
          padding: 20px 40px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          position: fixed;
          top: 0;
          width: 100%;
          z-index: 1000;
          box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .logo {
          display: flex;
          align-items: center;
        }
        
        .logo-circle {
          width: 40px;
          height: 40px;
          background-color: var(--primary-color);
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-right: 10px;
          font-weight: 700;
          font-size: 20px;
          color: white;
        }
        
        .logo-text {
          color: white;
          font-size: 20px;
          font-weight: 600;
        }
        
        .nav-links {
          display: flex;
          list-style: none;
        }
        
        .nav-links a {
          color: #ffffff;
          text-decoration: none;
          margin-left: 25px;
          font-size: 16px;
          font-weight: 500;
          text-transform: uppercase;
          letter-spacing: 1px;
          transition: all 0.3s ease;
          position: relative;
        }
        
        .nav-links a::after {
          content: '';
          position: absolute;
          width: 0;
          height: 2px;
          background-color: var(--primary-color);
          left: 0;
          bottom: -5px;
          transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
          width: 100%;
        }
        
        .nav-links a:hover {
          color: var(--primary-color);
        }
        
        .hamburger {
          display: none;
          cursor: pointer;
        }
        
        .hamburger div {
          width: 25px;
          height: 3px;
          background-color: white;
          margin: 5px;
          transition: all 0.3s ease;
        }
        
        /* Hero Section */
        .hero {
          padding-top: 120px;
          padding-bottom: 80px;
        }
        
        .hero-content {
          display: flex;
          align-items: center;
          justify-content: space-between;
          flex-wrap: wrap;
        }
        
        .hero-text {
          flex: 1;
          min-width: 300px;
          padding-right: 40px;
        }
        
        .hero-text h1 {
          font-size: 48px;
          line-height: 1.2;
        }
        
        .hero-text p {
          font-size: 18px;
          margin-bottom: 30px;
          max-width: 500px;
        }
        
        .hero-image {
          flex: 1;
          min-width: 300px;
          text-align: center;
        }
        
        .hero-image img {
          max-width: 70%;
          border-radius: 10px;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Services Section */
        .services {
          background-color: white;
        }
        
        .services-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
          gap: 30px;
          margin-top: 40px;
        }
        
        .service-card {
          background-color: var(--light-color);
          padding: 30px;
          border-radius: 10px;
          text-align: center;
        }
        
        .service-icon {
          font-size: 50px;
          color: var(--primary-color);
          margin-bottom: 20px;
        }
        
        .service-card h3 {
          margin-bottom: 15px;
        }
        
        .learn-more {
          display: inline-flex;
          align-items: center;
          color: var(--primary-color);
          font-weight: 600;
          margin-top: 15px;
          text-decoration: none;
        }
        
        .services-btn {
          text-align: center;
          margin-top: 40px;
        }
        
        /* About Section */
        .about-content {
          display: flex;
          align-items: center;
          justify-content: space-between;
          flex-wrap: wrap;
        }
        
        .about-image {
          flex: 1;
          min-width: 300px;
          text-align: center;
          padding-right: 40px;
        }
        
        .about-image img {
          max-width: 50%;
          border-radius: 10px;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .about-text {
          flex: 1;
          min-width: 300px;
        }
        
        .about-stats {
          display: flex;
          justify-content: space-between;
          margin: 30px 0;
          flex-wrap: wrap;
        }
        
        .stat-item {
          text-align: center;
          padding: 20px;
          min-width: 120px;
        }
        
        .stat-number {
          font-size: 36px;
          font-weight: 700;
          color: var(--primary-color);
          margin-bottom: 5px;
        }
        
        .stat-text {
          font-size: 16px;
          color: var(--text-color);
        }
        
        /* Contact Section */
        .contact {
          background-color: var(--light-color);
        }
        
        .contact-container {
          display: flex;
          flex-wrap: wrap;
          gap: 40px;
        }
        
        .contact-info {
          flex: 1;
          min-width: 300px;
        }
        
        .contact-info h3 {
          margin-bottom: 20px;
          font-size: 24px;
        }
        
        .contact-details {
          margin-bottom: 30px;
        }
        
        .contact-item {
          display: flex;
          align-items: flex-start;
          margin-bottom: 20px;
        }
        
        .contact-icon {
          width: 40px;
          height: 40px;
          background-color: var(--primary-color);
          color: white;
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-right: 15px;
          flex-shrink: 0;
        }
        
        .contact-text h4 {
          margin-bottom: 5px;
        }
        
        /* Social Media */
        .social-media {
          display: flex;
          gap: 15px;
        }
        
        .social-link {
          width: 40px;
          height: 40px;
          border-radius: 50%;
          background-color: var(--dark-color);
          color: white;
          display: flex;
          justify-content: center;
          align-items: center;
          text-decoration: none;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
          .nav-links {
            position: absolute;
            right: 0;
            top: 80px;
            background-color: var(--dark-color);
            width: 100%;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
            clip-path: circle(0px at 90% -10%);
            transition: all 0.5s ease-out;
          }
          
          .nav-links.active {
            clip-path: circle(1000px at 90% -10%);
          }
          
          .nav-links a {
            margin: 15px 0;
          }
          
          .hamburger {
            display: block;
          }
          
          .hamburger.active div:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
          }
          
          .hamburger.active div:nth-child(2) {
            opacity: 0;
          }
          
          .hamburger.active div:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
          }
          
          .hero-text, .about-text {
            padding-right: 0;
            margin-bottom: 40px;
          }
          
          .hero-content, .about-content {
            flex-direction: column;
          }
          
          .about-image {
            padding-right: 0;
            margin-bottom: 40px;
          }
          
          .stat-item {
            min-width: 100px;
            padding: 15px 10px;
          }
          
          .stat-number {
            font-size: 28px;
          }
        }
        
        @media (max-width: 480px) {
          .navbar {
            padding: 15px 20px;
          }
          
          h1 {
            font-size: 36px;
          }
          
          h2 {
            font-size: 30px;
          }
          
          .stat-item {
            min-width: 80px;
            padding: 10px 5px;
          }
          
          .stat-number {
            font-size: 24px;
          }
          
          .stat-text {
            font-size: 14px;
          }
        }

        /* Footer Styles */
.site-footer {
  background-color: #1e1e2f;
  color: white;
  text-align: center;
  padding: 20px 0;
  margin-top: 50px;
  font-family: Arial, sans-serif;
}

.site-footer .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.copyright-text {
  margin: 0;
  font-size: 14px;
}

/* Projects Section */
.projects {
  background-color: white;
  padding: 80px 0;
}

.projects-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  margin-top: 40px;
}

.project-card {
  border: 1px solid #eee;
  border-radius: 8px;
  overflow: hidden;
  transition: transform 0.3s ease;
}


.project-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.project-card h3 {
  padding: 15px 20px 0;
  color: #1e1e2f;
}

.project-card p {
  padding: 0 20px 20px;
  color: #444;
}
      </style>
</head>
<body>
    @yield('main-content')
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <footer class="site-footer">
        <div class="container">
          <p class="copyright-text">&copy; <span id="copyright-year"></span> Nijhum. All Rights Reserved.</p>
        </div>
      </footer>
        
</body>
</html>



