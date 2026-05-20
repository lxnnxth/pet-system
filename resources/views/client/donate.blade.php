<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Rescue & Adoption</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">

</head>
    <style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #fff6da;
  scroll-behavior: smooth;
  font-family: "Poppins", sans-serif;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #5d7d4d;
  padding: 20px 80px;
  color: white;
  box-shadow: 0 3px 8px rgba(0,0,0,0.15);
  position: sticky;
  top: 0;
  z-index: 1000;
  font-family: "Nunito", sans-serif;
}

.logo {
  display: flex;
  align-items: center;
  gap: 15px;
}

.paw {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 3px solid #ffffff;
  animation: popIn 0.2s ease-out;
  transition: transform 0.3s ease;
}

.paw img {
  width: 40px;
  height: 40px;
}

.paw:hover {
  transform: rotate(15deg) scale(1.1);
}

.yis {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.logo h1 {
  font-size: 1.8em;
  letter-spacing: 1px;
  animation: slideIn 1s ease-out;
}

.logo p {
  letter-spacing: 1px;
  font-size: 0.9em;
  color: #eee;
  animation: slideIn 1s ease-out;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 30px;
}

nav ul li a {
  text-decoration: none;
  color: white;
  font-weight: 500;
  transition: 0.3s ease;
  padding: 6px 10px;
}

nav ul li a:hover,
nav ul li a.active {
  color: #1b1b1b;
  background-color: white;
  border-radius: 25px;
  padding: 8px 14px;
  transform: scale(1.1);
}

    @keyframes fadeDown {
  from { opacity: 0; transform: translateY(-40px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes popIn {
  from { transform: scale(0.5); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

@keyframes slideIn {
  from { transform: translateX(-50px); opacity: 0; }
  to { transform: translateX(0); opacity: 1; }
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to { opacity: 1; transform: scale(1); }
}

  form {
  margin-left: auto;         
  width: 42%;                 
  background: #fff;           
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  margin-top: -20px;
}

    h2 {
      text-align: center;
      margin-bottom: 1rem;
      color: #333;
    }

    label {
      font-weight: 500;
      margin-bottom: 0.4rem;
      display: block;
      color: #444;
    }

  .donation-page-content {
  display: flex;
  gap: 2rem;              
  padding: 2rem;
  flex-wrap: wrap;          
  justify-content: center; 
  
  
}

.left-column, .right-column {
  background: #fff;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.left-column {
  max-width: 600px;             
  background: #fff;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  margin: 2rem 2rem 2rem auto;
}

.right-column {
  flex: 2 1 400px;        
  max-width: 600px;
}

.qr-code-placeholder {
  text-align: center;
  margin-top: 1.5rem;
}

.qr-code-placeholder img {
    width: 400px;        
    height: 270px;       
    object-fit: contain;  
    display: block;       
    margin: 0 auto 0.5rem auto;  
}
    p {
 color: #25361f;
}
.left-form {
  width: 350px;             
  background: #fff;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  margin: 2rem 2rem 2rem auto;
}
h2 {
  color: #2e4b2e
}
.right-column{
margin-right: auto;   
  margin-left: 1.2rem; 
  width: 40%; 
  margin-top: -693px;
  height: 660px;
   animation: fadeIn 0.6s ease-out;
}
.container grid {
  margin-right: auto;   
  margin-left: 2rem; 
  width: 45%;       
}
.give h1 {
  text-align: center;
      margin-bottom: 1rem;
       color: #2e4b2e;
       font-size: 2rem;
}
.donate-box {
  background: #fff;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
  width: 40%;           
  margin-left: auto;      
  margin-top: 2rem;  
   animation: fadeIn 0.6s ease-out;
   margin-right: 2.8rem;   
}
.donate-box h2 {
  text-align: center;
  color: #2e4b2e;
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.donate-box p {
  color: #25361f;
  margin-top: 1rem;
}

.donate-box .qr-code-placeholder img {
  width: 330px; 
  max-width: 220px;
  height: auto;
  object-fit: contain;
  display: block;
  margin: 0 auto 0.5rem auto; 
}

.donate-box .qr-code-placeholder p {
  text-align: center;
  margin-top: 0.5rem;
}
h3 {
  text-align: center;
      margin-bottom: 1rem;
       color: #2e4b2e;
}
.hold {
  height: 300px;
  width: 510px;
  margin-top: -50px;
  margin-left: -5px;
}
.mapa {
  text-align: center;
  margin-top: -35px;
}

 section {
      margin-top: -25px;
      padding: 4rem 0;
    }
     .bg-secondary { background-color: #ffffff; }

   .grid {
   display: grid;
      gap: 2rem;
    }
    .grid-2 { grid-template-columns: repeat(2, 1fr); }

    .card {
      background-color: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
       animation: fadeIn 0.6s ease-out;
    }
    .card img { width: 100%; height: auto; display: block; }
footer {
  background-color: #3b3b3b;
  color: white;
  padding: 60px 80px 30px;
}

.footer-content {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
  margin-bottom: 40px;
}
.footer-bottom {
  margin-top: 40px;
  text-align: center;
  padding-top: 20px;
  border-top: 1px solid #555;
  background-color: #2e4b2e;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.copyright {
  color: #aaa;
  font-size: 0.9em;
}

.footer-links {
  display: flex;
  gap: 20px;
  margin-top: 15px;
}

.footer-links a {
  color: #aaa;
  text-decoration: none;
  font-size: 0.9em;
  transition: color 0.3s;
}


/* Responsive adjustments */
@media (max-width: 768px) {
  .testimonials {
    padding: 40px 20px;
  }
  
  footer {
    padding: 40px 20px 20px;
  }
  
  .footer-content {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  
  .footer-links {
    flex-direction: column;
    gap: 10px;
  }
}
  </style>
</head>
<body>

 <header>
    <div class="logo">
      <div class="paw">
        <img src="images/pawprint.png" alt="Logo">
    </div>
    <div class="yis">
      <h1 class = "una">PawReach</h1>
      <p>The heart of animal rescue in PRMSU</p>
      </div>
    </div>

    <nav>
      <ul>
        <li><a href="{{ route('client.home') }}" >Home</a></li>
        <li><a href="{{ route('client.adopt') }}">Adopt</a></li>
        <li><a href="{{ route('client.donate') }}" class="active">Donate</a></li>
        <li><a href="{{ route('client.about') }}">About Us</a></li>
        <li><a href="{{ route('client.contact') }}">Contact</a></li>
        <li><a href="{{ route('client.post') }}">Post a Pet</a></li>
      </ul>
    </nav>

  </div>

  </header>

<div class="donate-box">
  <div class="donation-details">
    <h2>DONATE NOW</h2>
    <p>Your donation gives pets the care and love they need until they find their forever family.</p>
    <p>All funds directly support feeding and veterinary care.</p><br>
    <h3 class = "hello">Scan to Donate via G-CASH</h3>
    <div class="qr-code-placeholder">
      <img src="images/zoom.jpg" alt="Scan QR code">
      
    </div>
  </div>
</div>

<main class="donation-page-content">

  <div class="right-column">
    <div class="donation-details">


      <div class="bank-section">
        <center><h2>OUR DONATION CHANNELS</h2></center>
        <p><strong>PayMaya Number:</strong> 0919-765-4321</p>
        <p><strong>PayPal:</strong> paypal.me/HPAWReach</p><br>

         <p>Pawreach relies entirely on the generosity of students, teachers,
         and the community to support campus animals.</p><br>

      </div>

      <hr>

      <div class="contact-info"> <br>
        <h2>VISIT US ON CAMPUS</h2>
        <p>PRMSU Animal Adoption Website</p>
        <p>Purok 2, Palanginan, Iba, Zambales</p><br>
        <center><p><a href="https://maps.app.goo.gl/o4uirBQNPgfmruwd6" target="_blank">CLICK HERE TO VIEW IN GOOGLE MAP</a></p><br></center>
        <div class = "mapa">
        <img src = "images/hold.png" class = "hold">
</div>
      </div>
    </div>

 
  </div>
  </main>


 <section class="bg-secondary">
 <div class="container grid grid-2">
   <div class="card">
        <img src="images/hide.jpg" alt="" class = "pets">
      </div>
<div class="donation-purpose">
  <div class = "give">
  <h1>Where Your Support Goes</h1>
  </div>
  <p>
    Your donations to <strong>PawReach</strong> go directly toward helping rescued animals on campus.
    Every contribution is used to provide nutritious food, essential medicines, and veterinary care
    to animals in need. Our goal is to ensure every rescued animal receives proper care, health support,
    and attention to improve their well-being.
  </p><br>
  <p>
    Please note that funds are focused on <strong>food and medical supplies</strong> only,
    and do not cover shelter development. Every donation makes a tangible difference in an animal’s life.
  </p>
</div>
</div>
  </section>

    <div class="footer-bottom">
    <p class="copyright">&copy; 2023 PawReach. All rights reserved.</p>
    <div class="footer-links">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
      <a href="#">Sitemap</a>
    </div>
  </div>
</footer>
  
  </body>
  </html>