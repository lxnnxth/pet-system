<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">

  <title>Contact</title>

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
    .infos {
      padding: 40px 0;
    }

    .info {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      padding: 40px;
      background-color: #ffffff;
      animation: fadeIn 0.6s ease-out;
    }

    .get {
      font-size: 2rem;
      text-align: center;
      font-weight: bold;
      color:  #1b1b1b;
      margin-top: -5px;  
      padding-top: 0;
      padding: 5;      
      display: flex;        
      align-items: center;
      margin-bottom: 0px; 
       animation: fadeIn 0.6s ease-out;
   
    }
 .tagline {
    width: 80%;
    text-align: center;
    margin-bottom: -10px; 
    margin-top: -30px; 
    font-size: clamp(1rem, 1.1vw, 1.2rem);
    color: #5d7d4d;
    font-weight: 500;
    line-height: 1.4;
    letter-spacing: 0.5px;
     animation: fadeIn 0.6s ease-out;
}
    .card {
      flex: 1 1 250px;
      max-width: 260px;
      text-align: center;
      background-color: #fff;
      border-radius: 15px;
      padding: 35px 25px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .map-card img {
      width: 70px;
      height: 53px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 0px;
      margin-right: -10px;
      padding: 0;  
       animation: fadeIn 0.6s ease-out;
    }
.mail-card img {
   width: 80px;
      height: 60px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: -5px;
      margin-right: -10px;
      padding: 0;
       animation: fadeIn 0.6s ease-out;  
}

.phone-card img { 
      width: 50px;
      height: 60px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: -5px;
      padding: 0; 
      animation: fadeIn 0.6s ease-out;

}
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }

    .card-icon {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .note {
      color: #4a6f41;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .card p {
      color: #555;
      font-size: 0.95em;
      line-height: 1.5;
    }
    @media(max-width: 768px) {
      header {
        flex-direction: column;
        padding: 15px 30px;
      }
    }
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
      <div class="paw"><img src="images/pawprint.png" alt="Logo" /></div>
      <div>
        <h1>PawReach</h1>
        <p>The heart of animal rescue in PRMSU</p>
      </div>
    </div>

    <nav>
      <ul>
        <li><a href="{{ route('client.home') }}">Home</a></li>
        <li><a href="{{ route('client.adopt') }}">Adopt</a></li>
        <li><a href="{{ route('client.donate') }}">Donate</a></li>
        <li><a href="{{ route('client.about') }}">About Us</a></li>
        <li><a href="{{ route('client.contact') }}"  class="active">Contact</a></li>
        <li><a href="{{ route('client.post') }}">Post a Pet</a></li>
      </ul>
    </nav>
  </header>




  <section class="infos">
    
    <div class="info"> 
        <h2 class="get">Join the Mission</h2>
     <p class="tagline">We're here to answer your questions. Reach out to us!</p>
    <div class="card map-card">
  <img src="images/mapi.png" alt="MAP" class="card-icon" />
  <span class="note">Visit Us</span>
  <p>Palanginan, Iba Zambales<br />PRMSU-Iba Campus</p>
</div>

<div class="card mail-card">
  <img src="images/maily.png" alt="MAIL" class="card-icon" />
  <span class="note">Email Us</span>
  <p>@pawreachPRMSU.com<br />PRMSUpawreach@gmail.com</p>
</div>

<div class="card phone-card">
  <img src="images/phoni.png" alt="PHONE" class="card-icon" />
  <span class="note">Call Us</span>
  <p>0912-361-1410<br />0950-300-5254</p>
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