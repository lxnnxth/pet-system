<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Post a pet</title>
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
.eme {
      color: #5d7d4d; 
      text-align: center;
      margin-top: -20px;
      margin-bottom: 40px;
}

.posting h3 {
  margin-bottom: 1rem;
  color: #333;
  border-left: 4px solid #5d7d4d;
  padding-left: 8px;
  font-size: 1.2rem;
}

.header-animals {
  width: 80%;
  max-height: 150px;
  object-fit: contain;
  margin: 10px 0 20px;
  display: block;
  margin-top: -25px;
  margin-bottom: -10px;
  margin-left: 57px;
  animation: fadeIn 1s ease-out;
}

.posting div {
  margin-bottom: 1rem;
  animation: fadeIn 1s ease-out;
}

.posting label {
  display: block;
  font-weight: bold;
  margin-bottom: 0.3rem;
  color: #444;
}


.posting input,
.posting select,
.posting textarea {
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

.details {
    animation: slideIn 1s ease-out;
}

.owner {
animation: fadeIn 1s ease-out;
}

.email {
  display: flex;
  gap: 1rem;
}

.email > div {
  flex: 1;
}


.images .image {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 120px;
  border: 2px dashed #aaa;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}

.images .image:hover {
  border-color: #5d7d4d;
}

.images input[type="file"] {
  display: none;
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
  transition: background 0.3s;
}

.uSubmit:hover {
  background: #4a623b;
}


@media (max-width: 500px) {
  .email {
    flex-direction: column;
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
        <li><a href="{{ route('client.home') }}" >Home</a></li>
        <li><a href="{{ route('client.adopt') }}">Adopt</a></li>
        <li><a href="{{ route('client.donate') }}">Donate</a></li>
        <li><a href="{{ route('client.about') }}">About Us</a></li>
        <li><a href="{{ route('client.contact') }}">Contact</a></li>
        <li><a href="{{ route('client.post') }}" class="active">Post a Pet</a></li>
      </ul>
    </nav>

  </div>

  </header>
 

  <form action="{{ route('petpost') }}" method="POST" class="posting" enctype="multipart/form-data">
    @csrf
   

<img src="images/nakaw.png" alt="Cute animals" class="header-animals" />

<h4><center>POST A PET</center></h4>
<p class = "eme">Every paw deserves a loving home — start here!</p>
 
@if (session('success'))
<div style="color: green; margin-bottom: 10px;">
    {{ session('success') }}
</div>
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
  <h3 class="details">Pet Details</h3>

  <div class="petname">
    <div>
      <label>Pet Name</label>
      <input type="text" name="pet_name" placeholder="" class="pName" required />
    </div>

       <label>Species</label>

   <section class="post">
     <div class="filter-section">
  <div class="filter-box">
    <select name="type" id="type" required>
      <option>Dog</option>
      <option>Cat</option>
      <option>Others</option>
    </select>
  </div>

    <div class="petbreed">
      <label>Breed</label>
      <input type="text" name="breed" placeholder="" class="pBreed" />
    </div>
  </div>


  <div>
    <label class="age">Age (years)</label>
    <input type="number" name="age" placeholder="" class="pAge" />
  </div>

  <div>
    <label>Description</label>
    <textarea name="description" placeholder="Tell us about your pet's personality, habits, and needs." class="pDescription" required></textarea>
  </div>

  <div class="images">
    <label for="media" class="image">
        <p class="upload">Click to upload</p>
    </label>
    <input id="media" type="file" name="media" accept="image/*,video/*" style="display:none;" >
    <div id="preview-container">
        <img id="preview-image" style="display:none; max-width:100%; margin-top:10px;">
        <video id="preview-video" controls style="display:none; max-width:100%; margin-top:10px;"></video>
    </div>
</div>

<div class="seen">
  <div>
    <label>Last Seen</label>
    <input type="text" name="last_seen" placeholder="" class="uSeen"required />
  </div>

  <h3 class="owner">Owner Contact</h3>

  <div>
    <label>Your Name</label>
    <input type="text" name="owner_name" placeholder="" class="uName" required />
  </div>

  <div class="email">
    <div>
      <label>Email</label>
      <input type="email" name="owner_email" placeholder="" class="uEmail"required />
    </div>

    <div>
      <label>Contact Number</label>
      <input type="tel" name="owner_contact" placeholder="" class="uNumber" required />
    </div>
  </div>

  <div class="submit">
    <button type="submit" class="uSubmit" value="submit">Submit</button>
  </div>
  

</form>

  <footer></footer>

  
<script>
  const mediaInput = document.getElementById('media');
const imgPreview = document.getElementById('preview-image');
const videoPreview = document.getElementById('preview-video');

mediaInput.addEventListener('change', function() {
  const file = this.files[0];
  if (!file) return;

  if (file.type.startsWith('image/')) {
    const reader = new FileReader();
    reader.onload = e => {
      imgPreview.src = e.target.result;
      imgPreview.style.display = 'block';
      videoPreview.style.display = 'none';
    };
    reader.readAsDataURL(file);
  } else if (file.type.startsWith('video/')) {
    const reader = new FileReader();
    reader.onload = e => {
      videoPreview.src = e.target.result;
      videoPreview.style.display = 'block';
      imgPreview.style.display = 'none';
    };
    reader.readAsDataURL(file);
  }
});

  </script>


</body>

</html>
