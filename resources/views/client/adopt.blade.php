<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PawReach | Adopt a Pet</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
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

main { padding: 60px 20px; text-align: center; }
.card-container { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 40px; }

.card { background: #fff; border-radius: 20px; padding: 25px; width: 340px; box-shadow: 0 6px 14px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s; text-align: center; }
.card:hover { transform: translateY(-6px); box-shadow: 0 8px 18px rgba(0,0,0,0.15); }
.card img, .card video { width: 100%; border-radius: 15px; height: 250px; object-fit: cover; }
.card h3 { margin: 12px 0; font-size: 1.2em; color: #4a6f41; }
.card p { font-size: 0.9em; color: #555; margin-bottom: 4px; }

.like-btn {
   background: none;
    border: none;
     cursor: pointer;
      font-size: 14px;
       margin-top: 8px;
        transition: 0.3s;
        margin-right: 30px;
       }
.like-btn.liked {
   color: red;
   }

.card button, .card a button {
   margin-top: 10px;
    padding: 8px 16px;
     background: #5d7d4d;
      border: none;
       border-radius: 8px;
        color: white;
         cursor: pointer;
          transition: 0.3s;
         
         }
.card button:hover, .card a button:hover { background: #48633a; }

.filter-section { display: flex; justify-content: center; gap: 15px; max-width: 700px; margin: -20px auto 40px auto; padding: 15px 20px; background: #fdfaf4; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); align-items: flex-end; }
.filter-box label { font-size: 0.85em; color: #4a6f41; font-weight: 600; }
.filter-select { padding: 6px 12px; font-size: 0.9em; border: 1px solid #ccc; border-radius: 10px; outline: none; width: 180px; transition: 0.3s; }
.filter-select:hover { border-color: #5d7d4d; box-shadow: 0 0 6px rgba(93,125,77,0.3); }
.filter-btn { padding: 6px 20px; background: #5d7d4d; color: #fff; border: none; border-radius: 10px; cursor: pointer; font-weight: 600; font-size: 0.95em; transition: all 0.3s ease; }
.filter-btn:hover { background: #48633a; transform: translateY(-1px); box-shadow: 0 3px 10px rgba(0,0,0,0.12); }
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
    <div class="paw"><img src="{{ asset('images/pawprint.png') }}" alt="Logo"></div>
    <div>
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

<main>
  <form action="{{ route('client.adopt') }}" method="GET" class="filter-section">
    <div class="filter-box">
      <label for="type">Type</label>
      <select id="type" name="type" class="filter-select">
        <option value="">Any</option>
        <option value="Dog" {{ request('type') == 'Dog' ? 'selected' : '' }}>Dog</option>
        <option value="Cat" {{ request('type') == 'Cat' ? 'selected' : '' }}>Cat</option>
        <option value="Others" {{ request('type') == 'Others' ? 'selected' : '' }}>Other</option>
      </select>
    </div>
    <button type="submit" class="filter-btn">Search</button>
  </form>

  @php $defaultPetImg = asset('images/default-pet.jpg'); @endphp
  <div class="card-container">
    @foreach ($posts->where('status', '!=', 'adopted') as $post)
      <div class="card">
        @if($post->media && Str::endsWith($post->media, ['.jpg', '.jpeg', '.png', '.gif']))
          <img src="{{ asset('storage/' . $post->media) }}" alt="{{ $post->pet_name }}">
        @elseif($post->media)
          <video src="{{ asset('storage/' . $post->media) }}" controls></video>
        @else
          <img src="{{ $defaultPetImg }}" alt="{{ $post->pet_name }}">
        @endif

        <h3>{{ $post->pet_name }}</h3>
        <p><small>Posted on: {{ $post->created_at->format('F d, Y') }}</small></p>

        <!-- ✅ Fix: type="button" and no nested <a> -->
        <button type="button" class="like-btn" data-id="{{ $post->pet_id }}">
          🤍 {{ $post->likes->count() ?? 0 }}
        </button>

        <a href="{{ route('client.petdetails', $post->pet_id) }}">
          <button type="button" class="view-btn">View Details</button>
        </a>
      </div>
    @endforeach
  </div>
</main>

<script>
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".like-btn").forEach(button => {
    button.addEventListener("click", function(e) {
      e.preventDefault(); // prevent any form submission

      const petId = this.dataset.id;
      const btn = this;

      fetch(`/like/${petId}`, {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": "{{ csrf_token() }}",
          "Content-Type": "application/json"
        },
        body: JSON.stringify({}) // POST body required
      })
      .then(res => res.json())
      .then(data => {
        btn.classList.toggle("liked", data.liked);
        btn.innerHTML = data.liked ? `❤️ ${data.count}` : `🤍 ${data.count}`;
      })
      .catch(err => console.error(err));
    });
  });
});
</script>

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
