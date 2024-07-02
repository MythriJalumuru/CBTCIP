<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="style.css">

<script src="script.js"></script> 
<title>Event Planner 360</title>
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
<section class="bannerbg" id="home">
<h1 style="color:white;">LET US MAKE YOUR EVENT MEMORABLE ONE</h1>
</section>
<section class="container">
<h2>
<center>
            Book your Event Now
        </center></h2>
        <form  id="myform" name="myform" action="mailto:mythri123@gmail.com"  method="post" onsubmit="return validate();">
        <center>
        <table style="">
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
                        <tr>  
                        <td>Event Date:</td>
                        <td><input type="date" id="plandate" name="plandate" value="" min="2024-06-03" max="2026-12-10" required ></td>
 			</tr>
			<tr>
			<td>Requirements:
			</td><td><textarea id="comments" name="comments" rows="4" cols="50"></textarea>
			</td></tr>
                       </table> 
		<input type="Submit" name="submit" id="submit" style="margin:0;" >
                        <input type="reset" value="Clear">
                  

</center>
</form>
</section>
<section class="container">

<h1 style="color:Tomato;"> 
Our Services
</h1>
<p>
<center> Get your events designed, planned and organized by us. Enjoy hassle-free events, parties, conferences, wedding, and what not!
</center></p>

<CENTER>
<div class="serbox">
<a href="corporate-events.php">
<img src="Corporate.jpeg" class="img-fluid">
<h4> CORPORATE EVENTS</h4>
</a>
</div>
<div class="serbox">
<a href="wedding-events.php">
<img src="Wedding.jpeg" class="img-fluid">
<h4> WEDDING EVENTS</h4>
</a>
</div>
<div class="serbox">
<a href="parties.php">
<img src="Party.jpeg" class="img-fluid">
<h4> PARTIES</h4>
</a>
</div>
</CENTER>

</section>
<section class="service">
<font size="10"> 
<center>What we offer
</center></font>0
<center><img src="Services.jpg"><br>
<button type="button" onclick="Home.php">More Services</button>
</center> 
</section>
<section class="bg">
<div class="container"><h1 style="color:yellow;">
Managing events is a cakewalk for us!<br>
 You have an upcoming event? <br>
We have the solutions!</h1>
<ol class="brief">
  <li>Find the<br>perfect <br>venue for<br> free
</li>
  <li>Connect with <br>the best <br>vendors
</li>
  <li>Let us help <br>you with <br>event management
</li>
</ol>  
</div>
</section>
<section>
<ul class="about">
<li><h2>
ABOUT US<br></h2>
Events360 is a leading event management company in India. We plan and organize parties, conferences, corporate events, wedding events and practically anything that our customers demand!<br>
We have creative and experienced event management planners on board to help us serve you better.
</li>
<li><h2>GET IN TOUCH</h2><br>
<i class='fas fa-phone-square-alt' style='font-size:24px'></i>999-999-9999<br>
<i class='fas fa-comment-alt' style='font-size:24px'></i>events360@gmail.com</li>
</ul>
</section>

</body>
</html>