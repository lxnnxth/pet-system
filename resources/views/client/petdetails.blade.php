<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pet->pet_name }} | PawReach</title>
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


        main {
            max-width: 550px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

    
        .pet-media { text-align: center; margin-bottom: 25px; }
        .pet-media img, .pet-media video {
            width: 100%;
            max-width: 450px;
            border-radius: 20px;
            object-fit: cover;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .pet-media img:hover, .pet-media video:hover { transform: scale(1.02); }

  
        .pet-info {
            background: #f9f9f9;
            padding: 20px 25px;
            border-radius: 15px;
            box-shadow: inset 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        .pet-info p { font-size: 1rem; margin: 10px 0; }

    
        .adopt-btn {
            display: block;
            width: 220px;
            margin: 25px auto;
            padding: 14px 0;
            background: linear-gradient(135deg, #f39c12, #f6b64f);
            color: white;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-size: 1.1rem;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s ease;
        }
        .adopt-btn:hover { background: linear-gradient(135deg, #d48806, #f0a23c); transform: translateY(-2px); }

 
        .comment-section { 
            margin-top: 40px;
        margin-right: 30px;
        }
        .comment-section h3 { 
            margin-bottom: 15px;
             color: #4a6f41;
              font-size: 1.2rem;
             }
        .comment-section input,
        .comment-section textarea {
            width: 100%;
            padding: 12px 14px;
            border-radius: 12px;
            border: 1px solid #ccc;
            margin-bottom: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            
            
        }
        .comment-section textarea { resize: none; }
        .comment-section input:focus, .comment-section textarea:focus {
            outline: none; border-color: #5d7d4d; box-shadow: 0 0 5px rgba(93,125,77,0.3);
        }
        .comment-section button {
            background: #5d7d4d;
            color: white;
            border: none;
            padding: 10px 22px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        .comment-section button:hover { 
            background: #48633a;
             transform: translateY(-1px);
             }
        .comment-list { margin-top: 15px; }
        .comment-list p {
            background: #f4f4f4;
            padding: 12px 15px;
            border-radius: 12px;
            margin-bottom: 10px;
            font-size: 0.95rem;
            transition: background 0.3s;
            word-wrap: break-word;      
            overflow-wrap: break-word;   
            white-space: normal;     
        }
        .comment-list p:hover { background: #e7e7e7; }

        
        a.back-btn {
            display: inline-block;
            margin-top: 25px;
            color: #5d7d4d;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        a.back-btn:hover { color: #3e5529; }

   
        @media(max-width:768px){
            main { padding: 20px; margin: 20px; }
            .pet-media img, .pet-media video { max-width: 100%; }
            .adopt-btn { width: 100%; }
        }
        .pangalan {
            text-align: center;
            margin-top: 5px;
margin-bottom: 10px;
        }
        .detalye {
            margin-bottom: 30px;
            text-align: center;
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
    <div class = "pangalan">
     <h1>{{ $pet->pet_name }}</h1>
     </div>
    <p class = "detalye">Pet Details</p>
    
    <div class="pet-media">
        @if(Str::endsWith($pet->media, ['.jpg', '.jpeg', '.png', '.gif']))
            <img src="{{ asset('storage/' . $pet->media) }}" alt="{{ $pet->pet_name }}">
        @else
            <video controls src="{{ asset('storage/' . $pet->media) }}"></video>
        @endif
    </div>

    <div class="pet-info">
        <p><strong>Type:</strong> {{ $pet->type }}</p>
        <p><strong>Breed:</strong> {{ $pet->breed }}</p>
        <p><strong>Age:</strong> {{ $pet->age ?? 'Unknown' }}</p>
        <p><strong>Description:</strong> {{ $pet->description ?? 'No description provided.' }}</p>
    </div>
    <a href="{{ route('client.adoptform', ['pet_id' => $pet->pet_id]) }}" class="adopt-btn">Adopt Now</a>


 <div class="comment-section">
    <h3>Comments</h3>

    {{-- Success message --}}
    @if(session('success'))
        <p style="color: green; margin-bottom: 10px;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('client.pet.comment', $pet->pet_id) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>
        <textarea name="comment" placeholder="Write a comment..." required></textarea>
        <button type="submit">Post Comment</button>
    </form>

    <div class="comment-list" style="margin-top: 20px;">
    @forelse($pet->comments as $comment)
        <p>💬 <strong>{{ $comment->name }}</strong>: {{ $comment->comment }}</p>
    @empty
        <p>No comments yet.</p>
    @endforelse
    </div>
</div>


    <a href="{{ route('client.adopt') }}" class="back-btn">← Back to Adopt Page</a>
</main>

</body>
</html>
