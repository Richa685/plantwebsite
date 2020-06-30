<?php 
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" type="text/Css" href="css/css.css">
   <style>
   body{
       border-width:500px;
       
   }
       /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
  font-size:25px;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 10px 12px 0;
  display: inline-block;
  font-size:30px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  font-size:25px;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 15px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 100%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 120%;
  margin-top: 10px;
  border:1px solid;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
   </style>
    </head>
         <nav class="navbar navbar-light bg-light" style="height:90px">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search Entire store" aria-label="Search" style="margin-left:550px;width:1200px;height:70px;font-size:30px">
  

    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="height:70px;widht:150px">Search</button>

   
    </form>
  
</nav>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" style="height:100px;line-height:50px;background-color:#44d7a8;">
<button class="navbar-toggler" data-toggle="collapse" data-target="#collapsable_target">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsable_target" style="background-color:#44d7a8;">
<a class="navbar-brand"></a>

<ul class="navbar-nav" style="padding-left:600px;line-height:95px">
 <li class="nav-item"><a class="nav-link" href="#"></a></li>

 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown-target" href="index.html" style="font-size:30px;color:#ffffff">PLANTS</a>
   <div class="dropdown-menu" aria-labelledby="dropdown-target">
   <a class="dropdown-item" href="flower.html" style="font-size:25px">FLOWER</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">DECORATIVE PLANTS</a>
    <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">PLANTS BY SEASON</a>
   </div>
   </li>
   <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown-target" href="index.html" style="font-size:30px;color:#ffffff">SEEDS & BULBS </a>
   <div class="dropdown-menu" aria-labelledby="dropdown-target">
   <a class="dropdown-item" href="#" style="font-size:25px">VEGETABLE SEEDS</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">FRUITS SEEDS</a>
    <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">FLOWER SEEDS</a>
   </div>
   </li>
   <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown-target" href="index.html" style="font-size:30px;color:#ffffff">POTS & PLANTERS</a>
   <div class="dropdown-menu" aria-labelledby="dropdown-target">
   <a class="dropdown-item" href="#" style="font-size:25px">CERAMIC POTS</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">COLORFUL PLASTIC PLANTERS</a>
    <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">DESIGNER POTS</a>
   </div>
   </li>

<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown-target" href="index.html" style="font-size:30px;color:#ffffff">GARDEN DECOR</a>
   <div class="dropdown-menu" aria-labelledby="dropdown-target">
   <a class="dropdown-item" href="#" style="font-size:25px">GARDEN FOUNTAINS</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">GARDEN TOOLS</a>
    <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">POT STANDS</a>
   </div>
   </li>
   <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown-target" href="index.html" style="font-size:30px;color:#ffffff">FERTILIZERS</a>
   <div class="dropdown-menu" aria-labelledby="dropdown-target">
   <a class="dropdown-item" href="#" style="font-size:25px">COCO BRICKS</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">MOIST BALL</a>
    <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">MOSS STICKS</a>
   </div>
   </li>
   <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown-target" href="index.html" style="font-size:30px;color:#ffffff">MY ACCOUNT</a>
   <div class="dropdown-menu" aria-labelledby="dropdown-target">
   <a class="dropdown-item" href="#" style="font-size:25px">LOGIN</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="#" style="font-size:25px">REGISTER</a>
  </div>
   </li>
 
</ul>
</div>
</nav>
    <body style="background-color:#f2f2f2;border:5px solid black;border-left-margin:400px">
        <div style="width:42%;height:90px;margin-top:50px;background-color:#99ccff;color:#ffffff;font-size:30px;padding-top:20px;padding-left:40px;margin-left:950px">REGISTER ACCOUNT</div>
        <div class="container" style="width:1250px">
  <form action="action_page.php" style="width:1250px">

    <div class="row" >
      <div class="col-25" >
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25"  >
        <label for="fname">Email</label>
      </div>
      <div class="col-75" style="border:1px solid">
        <input type="email" id="fname" name="email" placeholder="Your email address.." style="width:1280px;height:60px;font-size:25px;padding-left:12px">
      </div>
    </div>
    <div class="row" >
      <div class="col-25" >
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="usa">India</option>
          <option value="usa">Germany</option>
          <option value="usa">Iran</option>
          <option value="usa">Iraq</option>
          <option value="usa">Japan</option>
          <option value="usa">Korea</option>
          <option value="usa">Liberia</option>
          <option value="usa">Malaysia</option>
          <option value="usa">Maldives</option>
          <option value="usa">Nepal</option>
          <option value="usa">New Zealand</option>
          <option value="usa">Russia</option>
          
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
<div class="card-group" style="margin-top:40px">
  <div class="card" style="height:350px;background-color:#e6e6ff">
      <svg class="bi bi-gift-fill" width="7em" height="7em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-left:350px;margin-top:30px">
  <path fill-rule="evenodd" d="M10 1a1.5 1.5 0 0 0-1.5 1.5c0 .098.033.16.12.227.103.081.272.15.49.2A3.44 3.44 0 0 0 9.96 3h.015L10 2.999l.025.002h.014A2.569 2.569 0 0 0 10.293 3c.17-.006.387-.026.598-.073.217-.048.386-.118.49-.199.086-.066.119-.13.119-.227A1.5 1.5 0 0 0 10 1zm0 3h-.006a3.535 3.535 0 0 1-.326 0 4.435 4.435 0 0 1-.777-.097c-.283-.063-.614-.175-.885-.385A1.255 1.255 0 0 1 7.5 2.5a2.5 2.5 0 0 1 5 0c0 .454-.217.793-.506 1.017-.27.21-.602.322-.885.385a4.434 4.434 0 0 1-1.104.099H10z"/>
  <path fill-rule="evenodd" d="M6 1a1.5 1.5 0 0 0-1.5 1.5c0 .098.033.16.12.227.103.081.272.15.49.2A3.44 3.44 0 0 0 5.96 3h.015L6 2.999l.025.002h.014l.053.001a3.869 3.869 0 0 0 .799-.076c.217-.048.386-.118.49-.199.086-.066.119-.13.119-.227A1.5 1.5 0 0 0 6 1zm0 3h-.006a3.535 3.535 0 0 1-.326 0 4.435 4.435 0 0 1-.777-.097c-.283-.063-.614-.175-.885-.385A1.255 1.255 0 0 1 3.5 2.5a2.5 2.5 0 0 1 5 0c0 .454-.217.793-.506 1.017-.27.21-.602.322-.885.385a4.435 4.435 0 0 1-1.103.099H6zm9 10.5V7H8.5v9h5a1.5 1.5 0 0 0 1.5-1.5zM7.5 16h-5A1.5 1.5 0 0 1 1 14.5V7h6.5v9z"/>
  <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4z"/>
</svg>
    <div class="card-body" style="line-height:8px">
      <h5 class="card-title" style="padding-left:250px;font-size:30px">Free Shipping</h5>
      <p class="card-text" style="padding-left:250px;font-size:30px">For Orders Above Rs599</p>
      <br>
    </div>
    
  </div>
  <div class="card" style="height:350px;background-color:#e6e6ff">
      <svg class="bi bi-upc-scan" width="7em" height="7em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-left:350px;margin-top:30px" >
  <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
</svg>
    
    <div class="card-body" style="line-height:8px">
      <h5 class="card-title" style="padding-left:250px;font-size:30px">Secure Payment</h5>
      <p class="card-text" style="padding-left:250px;font-size:30px">100% Secure Payment</p>
      <br>
    </div>
    
  </div>
  <div class="card" style="height:350px;background-color:#e6e6ff">
      <svg class="bi bi-cart4" width="7em" height="7em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-left:350px;margin-top:30px">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>
    <div class="card-body" style="line-height:8px">
      <h5 class="card-title" style="padding-left:250px;font-size:30px">Online Nursery</h5>
      <p class="card-text" style="padding-left:250px;font-size:30px">India's 1 Plant Shop</p>
      <br>
    </div>
    
  </div>
   <div class="card" style="height:350px;background-color:#e6e6ff">
       <p style="padding-top:70px;padding-left:40px;font-size:25px"><b>Show Us Some <img src="m1.png" height="30px"> On Social Media</b></p>
     
    <div class="card-body" style="padding-left:60px;word-spacing:8px">
        <img src="n1.svg" height="80px">
        <img src="n2.png" height="80px">
        <img src="n3.png" height="80px">
        <img src="n4.png" height="80px">
     
    </div>
    
  </div>
</div>
<div class="card-group" style="height:400px">
  <div class="card" style="height:400px">
    <div class="card-body" style="background-color:#ccd9ff;height:400px">
      <h5 class="card-title" style="padding-left:80px;padding-top:40px;font-size:40px"><b><u>POLICY INFO</u></b></h5>
      <ul style="padding-left:85px;font-size:30px">
          <li>Cancel & Refund</li>
          <li>Privacy Policy</li>
          <li>Terms & Conditions</li>
          <li>Site Map</li>
      </ul>
    </div>
    
  </div>
  <div class="card">
    <div class="card-body" style="background-color:#ccd9ff">
      <h5 class="card-title" style="padding-left:80px;padding-top:40px;font-size:40px"><b><u>MY ACCOUNT</u></b></h5>
      <ul style="padding-left:85px;font-size:30px">
          <li>Order History</li>
          <li>Wish List(0)</li>
          <li>Newsletter</li>
          <li>Login</li>
      </ul>
    </div>
  
  </div>
  <div class="card">
    <div class="card-body" style="background-color:#ccd9ff">
      <h5 class="card-title" style="padding-left:80px;padding-top:40px;font-size:40px"><b><u>NEED HELP?</u></b></h5>
      <ul style="padding-left:85px;font-size:30px">
          <li>Contact Us</li>
          <li>Affiliates</li>
          <li>Gift Vouchers</li>
      </ul>
    </div>
  
  </div>
   <div class="card">
    <div class="card-body" style="background-color:#ccd9ff">
      <h5 class="card-title" style="padding-left:80px;padding-top:40px;font-size:40px"><b><u>COMPANY INFO</u></b></h5>
      <ul style="padding-left:85px;font-size:30px">
          <li>About Us</li>
          <li>Contact Us</li>
          <li>Green Wall</li>
      </ul>
    </div>
    
  </div>
  <div class="card">
    <div class="card-body" style="background-color:#ccd9ff">
      <h5 class="card-title" style="padding-left:80px;padding-top:40px;font-size:40px"><b><u>OFFICE ADDRESS</u></b></h5>
      <p class="card-text" style="padding-left:80px;font-size:30px">Serve No. 6/A, More Basti, Manjari Road, National Grape Research Center, Phursungi Phata Pune,412307,India.</p>
      <p style="padding-left:80px;line-height:2px;font-size:30px">Phone:+91-8468888666</p>
    </div>
    
    
  </div>
</div>
    </body>
</html>
