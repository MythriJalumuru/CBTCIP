<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="style.css">

<script src="script.js"></script> 
<title>Contact us - Event Planner 360</title>
<meta name="description"  content="We are doing it perfectly and professionally everytime. Get more details about us and all event management planners at one place for all services. " />


</head>

<body>
<header>


<nav class="navbar">
    <!-- LOGO -->
    <div class="logo">Events360</div>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">

      <!-- USING CHECKBOX HACK -->
      <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="menu-list">&#9776;</label>

      <!-- NAVIGATION MENUS -->
      <div class="menu">

        <li><a href="Home.php">Home</a></li>
        <li><a href="about-us.php">About</a></li>

        <li class="services">
          <a>Services</a>

          <!-- DROPDOWN MENU -->
          <ul class="dropdown">
            <li><a href="corporate-events.php">Corporate Events </a></li>
            <li><a href="wedding-event.php">Wedding Events</a></li>
            <li><a href="party.php">Parties</a></li>
           
          </ul>

        </li>

 
        <li><a href="contact-us.php">Contact</a></li>
      </div>
    </ul>
  </nav>
</header>
<section class="bg">
<div class="container"><h2 style="color:white;"> Contact Us</h2>
Home/Contact us</div>
</section>
<section class="service">
        <form  id="myform" name="myform" action="mailto:mythri123@gmail.com"  method="post" onsubmit="return validate();">
        <center>
        <table style="">
<br><h1>We are here to help you</h1>
        <tr>
        <td>Name:</td>
        <td><input type="text" id="name" name="name" required />
        <span class="error">*</span></td></tr>
        <tr>
        <td>Email Id:</td>
        <td><input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required  />
                        <span class="error">* </span>
                      </td>
                            </tr>
                            <tr>
                            <td>Phone Number:</td>
                            <td><input type="text" id="phone" name="phone" pattern="\d{10}" maxlength="10" required/>
  
                        <span class="error">*</span></td></tr>
                        
			<tr><td>Message:
			</td>
			<td><textarea id="comments" name="comments" rows="4" cols="50"></textarea>
			</td></tr>
                       </table> 
		<input type="Submit" name="submit" id="submit" style="margin:0;" >
</center>
</form>
</section>
<section>
<div class="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>

<section>
<ul class="about" style="background: url('bg.jpg');">
<li><h2>
ABOUT US<br></h2>
Events360 is a leading event management company in India. We plan and organize parties, conferences, corporate events, wedding events and practically anything that our customers demand! We have creative and experienced event management planners on board to help us serve you better.
</li>
<li><h2>GET IN TOUCH</h2><br>
<i class='fas fa-phone-square-alt' style='font-size:24px'></i>999-999-9999<br>
<i class='fas fa-comment-alt' style='font-size:24px'></i>events360@gmail.com</li>
</ul>
</section>
</body>
</html>