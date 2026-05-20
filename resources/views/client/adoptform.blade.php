<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Adopt a Pet</title>
</head>

<style>
  /* Reuse the same CSS as your Post a Pet page */
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

  .posting {
      max-width: 600px;
  margin: 2rem auto;
  padding: 2rem;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  font-family: Arial, sans-serif;
  animation: fadeIn 1s ease-out;
         }
  .posting h4 {
  margin-bottom: 1rem;
  color: #333;
  padding-left: 8px;
  font-size: 2.0rem;
  font-family: "Poppins", sans-serif;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
     }
  .posting h3 { 
    margin-bottom: 1rem;
     color: #333;
      border-left: 4px solid #5d7d4d;
       padding-left: 8px; 
       font-size: 1.2rem;
     }
     .posting div {
  margin-bottom: 0.95rem;
  animation: fadeIn 1s ease-out;
}
  .posting label {
     display: block;
      font-weight: bold;
       margin-bottom: 0.3rem;
        color: #444;
     }
  .posting input, .posting select, .posting textarea { 
    width: 100%; 
    padding: 0.6rem;
     border: 1px solid #ccc;
      border-radius: 5px;
       font-size: 0.95rem;
        box-sizing: border-box;
     }
  .posting textarea {
     min-height: 100px;
      resize: vertical;
     }
  .uSubmit {
     width: 100%;
      padding: 0.8rem;
       background: #5d7d4d;
        color: white;
         border: none;
          border-radius: 5px;
           font-size: 1rem;
            cursor: pointer;
         }
  .uSubmit:hover {
     background: #4a623b;
   }
   .header-animals {
  width: 80%;
  max-height: 180px;
  object-fit: contain;
  margin: 10px 0 20px;
  display: block;
  margin-top: -25px;
  margin-bottom: -3px;
  margin-left: 57px;
  animation: fadeIn 1s ease-out;
}
</style>

<body>
<header>
  <div class="logo">
    <div class="paw">
    <div class="paw">
    <img src="{{ asset('images/pawprint.png') }}" alt="Logo">
</div>
    </div>
    <div class="yis">
      <h1>PawReach</h1>
      <p>The heart of animal rescue in PRMSU</p>
    </div>
  </div>
  <nav>
    <ul>
      <li><a href="{{ route('client.home') }}">Home</a></li>
      <li><a href="{{ route('client.adopt') }}" class="active">Adopt</a></li>
      <li><a href="{{ route('client.donate') }}">Donate</a></li>
      <li><a href="{{ route('client.about') }}">About Us</a></li>
      <li><a href="{{ route('client.contact') }}">Contact</a></li>
      <li><a href="{{ route('client.post') }}">Post a Pet</a></li>
    </ul>
  </nav>
</header>

<form action="{{ route('client.adopt.submit', ['pet_id' => $pet->pet_id]) }}" method="POST" class="posting">
    @csrf

   <img src="{{ asset('images/peek.png') }}" alt="Cute animals" class="header-animals" />

  <h4><center>ADOPT A PET</center></h4>

  @if (session('success'))
  <div style="color: green; margin-bottom: 10px;">{{ session('success') }}</div>
  @endif

  @if ($errors->any())
  <div style="color: red; margin-bottom: 10px;">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif

  <h3>Adopter Information</h3>
  <div>
      <label>Full Name</label>
      <input type="text" name="full_name" required>
  </div>
  <div>
      <label>Age</label>
      <input type="number" name="age" required>
  </div>
  <div>
      <label>Email</label>
      <input type="email" name="email" required>
  </div>
  <div>
      <label>Phone</label>
      <input type="tel" name="phone" required>
  </div>
  <div>
      <label>Address</label>
      <input type="text" name="address" required> 
  </div>
  <div>
      <label>Role</label>
      <select name="role" required>
        <option value="">Select Role</option>
        <option value="Student">Student</option>
        <option value="Professor">Professor</option>
        <option value="Staff">Staff</option>
        <option value="Other">Other</option>
      </select>
  </div>
  <div>
      <label>Department</label>
      <input type="text" name="department">
  </div>
  <div>
      <label>Year Level (Students only)</label>
      <input type="number" name="year_level">
  </div>
  <div>
      <label>Occupation (Professors/Staff)</label>
      <input type="text" name="occupation">
  </div>
  <div>
      <label>Home Type</label>
      <select name="home_type" required>
        <option value="">Select Home Type</option>
        <option value="Dorm">Dorm</option>
        <option value="Apartment">Apartment</option>
        <option value="House">House</option>
      </select>
  </div>

  <div>
      <label>Other Pets</label>
      <textarea name="other_pets" placeholder="Describe any other pets you have" required></textarea>
  </div>
  <div>
      <label>Experience with Pets</label>
      <textarea name="experience" placeholder="Share your previous experience with pets" required></textarea>
  </div>
  <div>
      <label>Reason for Adoption</label>
      <textarea name="adoption_reason" placeholder="Why do you want to adopt this pet?" required></textarea>
  </div>

  <button type="submit" class="uSubmit">Submit Adoption</button>
</form>

</body>
</html>
