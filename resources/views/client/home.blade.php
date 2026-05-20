<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Document</title>
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

.front, .back, .last {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 60px 80px;
  box-sizing: border-box; 
}


.front-text, .back-text, .last-text {
  max-width: 50%;
  animation: fadeIn 0.s ease-out;
}


.front-text h1 {
font-size: 2.2em;
  margin-bottom: 15px;
  color: #3b3b3b;
}
.back-text h1 {
    font-size: 2.2em;
    margin-bottom: 15px;
    color: #000000; 
}

.last-text h1 {
  font-size: 2.2em;
  margin-bottom: 15px;
  color: #ffffff;
}


.front-text p {
margin-bottom: 25px;
  line-height: 1.6;
  color: #25361f;
}
.back-text p{
  margin-bottom: 25px;
  line-height: 1.6;
  color: #25361f;
} 
.last-text p {
  margin-bottom: 25px;
  line-height: 1.6;
  color:  #ffffff;
}


.front-text button {
  background-color: #5d7d4d;
  color: white;
  padding: 10px 50px;
  font-size: medium;
  border-radius: 25px;
  border: none;
  cursor: pointer;
  transition: 0.3s;
  
}
.last-text button {
  background-color: #ffffff;
  color: #5d7d4d;
  padding: 10px 50px;
  font-size: medium;
  border-radius: 25px;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}
.back-text button {
   background-color: #5d7d4d;
  color: white;
  padding: 10px 50px;
  font-size: medium;
  border-radius: 25px;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}

.front-text button:hover {
   background-color: #4a663d;
}
.back-text button:hover {
  background-color: #4a663d;
}
.last-text button:hover {
  background-color: #fff6da;
}


.front {
  background-color: #fff6da;
}

.front-img {
  width: 50%;
  display: flex;
  justify-content: center;
}

.front-img img {
  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 20px;
  animation: fadeIn 0.6s ease-out;
}


.back {
  flex-direction: row-reverse;
  background-color: #ffffff; 
}

.back-img {
  width: 50%;
  display: flex;
  justify-content: center;
}

.back-img img {
  width: 100%;
  max-width: 450px;
  height: auto;
  border-radius: 20px;
  animation: fadeIn 1s ease-out;
}

.last {
  background-color: #4a663d;
}

.last-img {
  width: 50%;
  display: flex;
  justify-content: center;
}

.last-img img {
  width: 100%;
  max-width: 450px;
  height: auto;
  border-radius: 20px;
  animation: fadeIn 1s ease-out;
}

.last-text {
  max-width: 500px;
  text-align: center;
  margin: 50px auto;
  margin-bottom: 40px;
  margin-top: 30px;
}


@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideIn {
  from { opacity: 0; transform: translateX(-50px); }
  to { opacity: 1; transform: translateX(0); }
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideIn {
  from { opacity: 0; transform: translateX(-50px); }
  to { opacity: 1; transform: translateX(0); }
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


.info {
  display: flex;
  justify-content: center;  
  align-items: stretch;    
  flex-wrap: wrap;      
  gap: 40px;            
  padding: 80px 60px;
  background-color: #ffffff;
  margin: 0;               
  position: relative;
  z-index: 1;
  animation: slideIn 1s ease-out;
}


.card {
  flex: 1 1 300px;        
  max-width: 320px;         
  text-align: center;
  background-color: #fff;
  border-radius: 15px;
  padding: 35px 25px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  justify-content: center;
  
}

.card:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.card h3 {
  color: #4a6f41;
  margin-bottom: 10px;
  font-weight: 700;
}

.card p {
  color: #555;
  font-size: 0.95em;
  line-height: 1.5;
}

.posting{
  
  display: flex;
  justify-content: center;  
  align-items: stretch;    
  flex-wrap: wrap;      
  gap: 40px;            
  padding: 80px 60px;
  background-color: #5d7d4d;
  margin: 0;               
  position: relative;
  z-index: 1;
  animation: slideIn 1s ease-out;
}

.filter-section {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  flex-wrap: wrap;
  gap: 20px;
  background-color: #ffffff;
  padding: 30px 50px;
  margin: 0 auto;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  max-width: 950px;
  margin-bottom: 50px;
  margin-top: -30px; 
  animation: fadeIn 1s ease-out;
}

.filter-box {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.filter-box label {
  font-size: 0.9em;
  color: #444;
  font-weight: 500;
}

.filter-box select {
  padding: 10px 15px;
  font-size: 0.95em;
  border: 1px solid #ccc;
  border-radius: 6px;
  outline: none;
  transition: 0.3s;
  width: 180px;
  background-color: white;
  cursor: pointer;
}

.filter-box select:hover {
  border-color: #5d7d4d;
  box-shadow: 0 0 5px rgba(93,125,77,0.3);
}

.filter-btn {
  background-color: #5d7d4d;
  color: white;
  border: none;
  border-radius: 8px;
  padding: 12px 25px;
  font-size: 1em;
  cursor: pointer;
  transition: background 0.3s;
  align-self: flex-end;
}

.filter-btn:hover {
  background-color: #48633a;
}

/* Success Stories Section */
.testimonials {
  padding: 80px 60px;
  background-color: #fff6da;
  text-align: center;
}

.section-title {
  font-size: 2em;
  color: #3b3b3b;
  margin-bottom: 50px;
  position: relative;
}

.section-title::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 3px;
  background-color: #5d7d4d;
}

.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 30px;
  margin-top: 40px;
}

.testimonial-card {
  background-color: white;
  border-radius: 15px;
  padding: 30px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  transition: transform 0.3s ease;
}

.testimonial-card:hover {
  transform: translateY(-5px);
}

.testimonial-text {
  font-style: italic;
  margin-bottom: 20px;
  line-height: 1.6;
  color: #555;
}

.testimonial-author {
  font-weight: 600;
  color: #5d7d4d;
}

/* Footer Section */
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

.footer-column h3 {
  margin-bottom: 20px;
  color: #5d7d4d;
  font-size: 1.3em;
  position: relative;
  padding-bottom: 10px;
}

.footer-column h3::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 40px;
  height: 2px;
  background-color: #5d7d4d;
}

.footer-column p {
  color: #ddd;
  line-height: 1.6;
  margin-bottom: 15px;
}

.footer-column ul {
  list-style: none;
}

.footer-column ul li {
  margin-bottom: 12px;
}

.footer-column ul li a {
  color: #ddd;
  text-decoration: none;
  transition: color 0.3s, padding-left 0.3s;
  display: flex;
  align-items: center;
}

.footer-column ul li a i {
  margin-right: 10px;
  width: 20px;
  text-align: center;
}

.footer-column ul li a:hover {
  color: #5d7d4d;
  padding-left: 5px;
}

.footer-logo {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 15px;
}

.footer-logo .paw {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center;
}

.footer-logo .paw img {
  width: 25px;
  height: 25px;
}

.footer-logo-text h2 {
  font-size: 1.5em;
  color: white;
}

.footer-logo-text p {
  font-size: 0.8em;
  color: #ddd;
}

.social-links {
  display: flex;
  gap: 15px;
  margin-top: 20px;
}

.social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  background-color: #5d7d4d;
  color: white;
  border-radius: 50%;
  text-decoration: none;
  transition: transform 0.3s, background-color 0.3s;
}

.social-links a:hover {
  transform: translateY(-5px);
  background-color: #4a6f41;
}

.footer-bottom {
  margin-top: 40px;
  text-align: center;
  padding-top: 20px;
  border-top: 1px solid #555;
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

.footer-links a:hover {
  color: #5d7d4d;
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

<body>

  <header>
    <div class="logo">
      <div class="paw">
        <img src="images/pawprint.png" alt="Logo">
    </div>
    <div class="yis">
      <h1>PawReach</h1>
      <p>The heart of animal rescue in PRMSU</p>
      </div>
    </div>

    <nav>
      <ul>
        <li><a href="{{ route('client.home') }}" class="active">Home</a></li>
        <li><a href="{{ route('client.adopt') }}">Adopt</a></li>
        <li><a href="{{ route('client.donate') }}">Donate</a></li>
        <li><a href="{{ route('client.about') }}">About Us</a></li>
        <li><a href="{{ route('client.contact') }}">Contact</a></li>
        <li><a href="{{ route('client.post') }}">Post a Pet</a></li>
        
      </ul>
    </nav>

  </div>

  </header>


<div class="front">
  <div class="front-text">
    <h1>Find Your New Best Friend</h1>
    <p>Open your heart and adopt a loving animal today.
      Each pet deserves a warm, safe, and loving home.
Your choice to adopt changes a life forever.
Together, we can create happy, lifelong friendships and bring hope to more animals 
waiting for a second chance.</p>
    <button onclick="window.location='{{ route('client.adopt') }}'" class="adopt-button">
  Adopt Now </button>
  </div>

  <div class="front-img">
    <img src="images/pet.png" alt="Pet Image">
  </div>

  </div>

<div class="back">
  <div class="back-text">
    <h1>Support Our Mission</h1>
    <p>Your donation gives rescue animals a second chance.
Every contribution helps provide food, shelter, and medical care to animals in need.
With your support, more rescued pets can find loving, forever homes.
Together, we can make a real difference in the lives of these animals.</p>
    <button onclick="window.location='{{ route('client.donate') }}'" class="donate-button">
  Donate Now
</button>
  </div>

  <div class="back-img">
    <img src="images/smileee.png" alt="Pet Image">
  </div>

  </div>

 <div class="last">
  <div class="last-text">
    <h1>Share Your Pet with the Campus Community</h1>
    <p>
      Sharing your pet within our university community helps them find a loving home faster.
      Providing clear details and photos ensures students and staff can connect with the right match.
      We’re here to guide you through the posting process and make your pet visible to the campus community.
      Together, we can help pets find safe, happy homes while bringing joy to families here at the university.</p>
    <button onclick="window.location='{{ route('client.post') }}'" class="find-button">Post Your Pet</button>
  </div>

  <div class="last-img">
    <img src="images/bundle.png" alt="Pet Image">
  </div>
  </div>


  <section class="info">
<div class="card">
      <img src="icon1.png" alt="">
      <h3>Who We Are</h3>
      <p>We are a student-led initiative committed to helping stray animals find safety and care.</p>
    </div>

    <div class="card">
      <img src="icon2.png" alt="">
      <h3>How We Work</h3>
      <p>We approve animal reports and help connect rescues to willing adopters.</p>
    </div>

    <div class="card">
      <img src="icon3.png" alt="">
      <h3>Best Services</h3>
      <p>We help strays get noticed and cared for, because every animal deserves love.</p>
    </div>
  </section>
    <!-- Success Stories Section -->
<section class="testimonials">
  <h2 class="section-title">Success Stories</h2>
  <div class="testimonial-grid">
    <div class="testimonial-card">
      <p class="testimonial-text">"Adopting Luna from PawReach was the best decision I've made. She's brought so much joy to our home and has become an inseparable part of our family!"</p>
      <p class="testimonial-author">- Maria Santos, Adopter</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"As a volunteer, I've seen firsthand how PawReach transforms the lives of animals in our community. The dedication of the team is truly inspiring."</p>
      <p class="testimonial-author">- Juan Dela Cruz, Volunteer</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"The team at PawReach made the adoption process so smooth. Our new dog Buddy has settled in perfectly and gets along wonderfully with our children!"</p>
      <p class="testimonial-author">- The Garcia Family</p>
    </div>
  </div>
</section>

<!-- Footer Section -->
<footer>
  <div class="footer-content">
    <div class="footer-column">
      <div class="footer-logo">
        <div class="paw">
          <img src="images/pawprint.png" alt="Paw Logo">
        </div>
        <div class="footer-logo-text">
          <h2>PawReach</h2>
          <p>The heart of animal rescue</p>
        </div>
      </div>
      <p>We are a student-led initiative at PRMSU committed to helping stray animals find safety, care, and loving forever homes.</p>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    
    <div class="footer-column">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="{{ route('client.home') }}"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="{{ route('client.adopt') }}"><i class="fas fa-paw"></i> Adopt</a></li>
        <li><a href="{{ route('client.donate') }}"><i class="fas fa-hand-holding-heart"></i> Donate</a></li>
        <li><a href="{{ route('client.about') }}"><i class="fas fa-info-circle"></i> About Us</a></li>
        <li><a href="{{ route('client.contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>
      </ul>
    </div>
    
    <div class="footer-column">
      <h3>Contact Info</h3>
      <ul>
        <li><a href="#"><i class="fas fa-map-marker-alt"></i> PRMSU Campus, Iba, Zambales</a></li>
        <li><a href="mailto:pawreach@prmsu.edu.ph"><i class="fas fa-envelope"></i> pawreach@prmsu.edu.ph</a></li>
        <li><a href="tel:+47471234567"><i class="fas fa-phone"></i> (047) 123-4567</a></li>
        <li><a href="#"><i class="fas fa-clock"></i> Mon - Fri: 9:00 AM - 5:00 PM</a></li>
      </ul>
    </div>
  </div>
  
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