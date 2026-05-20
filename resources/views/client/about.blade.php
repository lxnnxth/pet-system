<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">

  <title>About Us - PetReach</title>
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

    h1, h2, h3 {
      margin: 0;
    }
    img {
      max-width: 100%;
      display: block;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }
    .text-center { text-align: center; }
    .text-left { text-align: left; }

    .hero {
      position: relative;
      width: 100%;
      height: 40vh;
      background-color: rgba(0,0,0,0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
       animation: fadeIn 0.6s ease-out;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background-color: rgba(0,0,0,0.5);
      z-index: 2;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 1rem;
      text-align: center;
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: bold;
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
      animation: fadeIn 0.6s ease-out;
    }
    .hero p {
      margin-top: 0.5rem;
      color: rgba(255,255,255,0.9);
      font-size: 1.2rem;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
       animation: fadeIn 0.6s ease-out;
    }


    section {
      padding: 4rem 0;
    }
    .bg-background { background-color: #fff6da; }
    .bg-secondary { background-color: #ffffff; }

    h2 {
      font-size: 2rem;
      font-weight: bold;
      color: #4a6f41;
       animation: fadeIn 0.6s ease-out;
    }
 
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

    .team-card {
      text-align: center;
      padding: 1.5rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border-radius: 12px;
      background-color: #fff;
    }
    .team-card img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 4px solid #5d7d4d;
    object-fit: cover;
    display: block;    
    margin: 0 auto 1rem;
    animation: fadeIn 0.6s ease-out;
    }
    .team-card h3 {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 0.3rem;
       animation: fadeIn 0.6s ease-out;
    }
    .team-card p { color: #25361f; margin: 0; }


    @media (max-width: 768px) {
      .grid-2 { grid-template-columns: 1fr; }
      .hero h1 { font-size: 2rem; }
      .hero p { font-size: 1rem; }
    }
    .pets {
      height: 500px;
       object-fit: cover;
    }
    .info {
  margin-top: 1rem;
  font-size: 1rem;
  animation: fadeIn 1s ease-out;
}
.first { color: #25361f; }
.second { color: #25361f; }
.third { color: #25361f; }
.line { animation: slideIn 1s ease-out;}
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
        <p class = "info-line">The heart of animal rescue in PRMSU</p>
      </div>
    </div>

    <nav>
      <ul>
        <li><a href="{{ route('client.home') }}">Home</a></li>
        <li><a href="{{ route('client.adopt') }}">Adopt</a></li>
        <li><a href="{{ route('client.donate') }}">Donate</a></li>
        <li><a href="{{ route('client.about') }}" class="active">About Us</a></li>
        <li><a href="{{ route('client.contact') }}">Contact</a></li>
        <li><a href="{{ route('client.post') }}">Post a Pet</a></li>
      </ul>
    </nav>
  </header>


  <section class="hero">
    <img src="images/strays.jpg" alt="About Us Hero">
    <div class="hero-overlay">
      <h1>The Heart Behind PawReach</h1>
      <p>Guided by love for the forgotten animals of PRMSU</p>
    </div>
  </section>


  <section class="bg-background">
    <div class="container text-center">
      <h2>Our Mission</h2>
      <p class = "info first">
     Our mission is to care for the stray cats and dogs living around the PRMSU campus who are often left hungry and unnoticed. 
     Many of them wait quietly in corners hoping someone will care enough to stop and see them. 
     We believe every animal deserves kindness, warmth, and a place where they feel safe. 
     With compassion and support from the community, we strive to guide them from neglect into homes where they are valued and protected.
      </p>
    </div>
  </section>


  <section class="bg-secondary">
    <div class="container grid grid-2">
      <div class="card">
        <img src="images/hide.jpg" alt="" class = "pets">
      </div>
      <div class="text-left">
        <h2>Where Kindness Took Root</h2>
        <p  class = "info second">
      We often saw the same dogs staying near the CCIT building and around the cafeteria, as if those places were their home. 
      There's also a gentle cat near the Nursing department who quietly watched students pass by. 
      Some of them were thin and needed care, yet they were always there with hopeful eyes.
      Seeing them every day made us realize that they were part of our campus, but no one was truly looking after them. 
        </p>
        <p>
      From that simple concern grew a desire to give them more than just food. 
      We wanted them to feel safe, loved, and finally treated as they deserve.
        </p>
      </div>
    </div>
  </section>


  <section class="bg-background">
    <div class="container text-center">
      <h2>Our Dedicated Team</h2>
      <p class = "info third">Students standing together to ensure every animal is treated with care, safety, and dignity.</p>
      <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); margin-top: 2rem; gap: 2rem;">
    
        <div class="team-card">
          <img src="images/lenneth.jpg" alt="Team Member">
          <h3>Lenneth Medrana</h3>
          <p >Developer</p>
        </div>
        <div class="team-card">
          <img src="images/justine.jpg" alt="Team Member">
          <h3>Justine Balmaceda</h3>
          <p>Designer</p>
        </div>
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