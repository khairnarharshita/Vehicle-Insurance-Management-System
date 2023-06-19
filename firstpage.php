<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Car Insurance Information</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-size: 16px;
        line-height: 1.4;
        /* letter-spacing: 0.5em; */
        text-align: center;
        color: black;
        background-color: #B9EBFF;
      }

      .slider {
        position: relative;
        width: 100%;
        height: 500px;
        overflow: hidden;
      }

      .slider img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
      }

      .slide.active {
        opacity: 1;
      }

      .info {
        padding: 50px;
      }

      .info h1 {
        font-size: 2.1rem;
      }

      .info ul {
        list-style-type: disc;
        margin-left: 2em;
      }

      .info li {
        margin-bottom: 10px;
        /* text-align:left; */
        letter-spacing: 0.2em;

      }

      footer {
        background-color: #333;
        color: white;
        padding: 10px;
      }
    </style>
  </head>
  <h1>VEHICLE INSURANCE COMPANY</h1>
  <body>
    <section class="slider">
      <div class="slide active">
        <img src="slide1.jpg">
      </div>
      <div class="slide">
        <img src="slide2.jpg">
      </div>
      <div class="slide">
        <img src="slide3.jpg">
      </div>
      <div class="slide">
        <img src="slide4.jpg">
      </div>
      <div class="slide">
        <img src="slide5.jpg">
      </div>
    </section>

    <!DOCTYPE html>


    <button onclick="window.location.href='adminlogin.php';"id="ok-button" >ADMIN LOGIN</button>
    <button onclick="window.location.href='login.php';"id="ok-button" >USER LOGIN</button>

<style>
  #ok-button {
    padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 30px;
			margin: 10px;
    cursor: pointer;
  }
</style>
    <section class="info">
      <h1><b>Car Insurance Information</b></h1>
      <p><b>Here is some information about our car insurance:</b></p>
      <ul>
        <li>Our car insurance provides comprehensive coverage for your vehicle.</li>
        <li>We offer competitive rates and discounts for safe driving.</li>
        <li>You can customize your coverage to fit your needs.</li>
        <li>We have a 24/7 claims service.</li>
        <li>Our customer service team is available to assist you with any questions or concerns.</li>
      </ul>
    </section>
    <footer>
      <p>&copy; 2023 Car Insurance Information</p>
    </footer>
    <script>
      let slideIndex = 0;
      const slides = document.querySelectorAll('.slide');
      const totalSlides = slides.length;

      setInterval(() => {
        slides[slideIndex].classList.remove('active');
        slideIndex = (slideIndex + 1) % totalSlides;
        slides[slideIndex].classList.add('active');
      }, 2500);

    </script>
  </body>
</html>
