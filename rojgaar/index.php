<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreatJob</title>
    
    <!-- <link rel="stylesheet" href="navstyle.css"> -->
    <link rel="stylesheet" href="navstyle.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav class="navbar background h-nav">
        <ul class="nav-list v-class">
            <div class="logo">
                <img src="untitled.png" alt="logo" >
            </div>
            <li> <a href="index.html">Home</a></li>
            <li> <a href="#about">About Us</a></li>
            <li> <a href="login.html">Login</a></li>
            <li> <a href="#contact">Contact Us</a></li>
            <li> <a href="adminlogin.html">Admin</a></li>

        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <section class="firstsection background">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">Welcome to GreatJob</p>
                <p class="text-small">Want To Kick Start Your Career ?</p>
                <div class="buttons">
                    <button id="build" class="btn" >Build Your Profile Now</button>
                </div>

            
            </div>
            <div class="secondhalf">
                <img src="Untitled.png" alt=""width="150px">
                
            </div>
        </div>
        
    </section>
    <div id="about"  class="about-section">
        <div class="inner-container">
          <h1>About Us</h1>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
          </p>
          <div class="skills">
            <span>Web Design</span>
            <span>Photoshop & Illustrator</span>
            <span>Coding</span>
          </div>
        </div>
      </div>

    <section class="contact" id="contact">
        <h2 class="text-center">
            Contact Us
        </h2>
        <div class="form">
            <input type="text" name="namec" id="namec" placeholder="Enter your name">
            <input type="text" name="phonenoc" id="phonenoc" placeholder="Enter your Phone No.">
            <input type="text" name="emailc" id="emailc" placeholder="Enter your E-Mail">
            <textarea  type="text" name="describec" id="describec" cols="47" rows="10"placeholder="Describe why do you want to contact"></textarea>
            <button class="btn">Submit</button>
        </div>

    </section>
    <footer class="footer">
        <h3>&copy; 2021 GreatJob All Rights Reserved</h3>
    </footer>

    <script src="res.js"></script>
   
</body>
</html>