<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stylish Top-Right Navbar</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
    }

    /* Navbar Styles */
    .navbar {
      background-color: #1e1e2f;
      padding: 16px 40px;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .navbar a {
      color: #ffffff;
      text-decoration: none;
      margin-left: 20px;
      font-size: 16px;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      position: relative;
    }

    .navbar a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      background-color: #00adb5;
      left: 0;
      bottom: -4px;
      transition: width 0.3s ease;
    }

    .navbar a:hover::after {
      width: 100%;
    }

    .navbar a:hover {
      color: #00adb5;
    }

  .content {
  padding-top: 100px;
  padding-left: 50px;
  text-align: left;
  }

    .content h1 {
      font-size: 42px;
      color: #222;
    }

    .content p {
      font-size: 18px;
      color: #444;
      max-width: 600px;
      margin: 20px auto;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <a href="#home">🏠 Home</a>
    <a href="#service">💼 Services</a>
    <a href="#about">👤 About</a>
    <a href="#project">📁 Projects</a>
    <a href="#blogs">📝 Blogs</a>
    <a href="#contact">📞 Contact</a>
  </div>

  <div class="content">
    <h1> Assalamualaikum </h1>
    <p style ="text-align: left; margin-left: 0;"> I am nijhum. Graphics Designer based in Bangladesh . I am experienced Graphics Designer with 5+ years in the field , collaborating with many companies and startups .</p>
  </div>
  <script src="{{asset('assets/js/script.js')}}">
  </script>

</body>
</html>

