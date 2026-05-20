<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Pet Rescue</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<style>

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  
  body {
    background-color: #f4f6fc;
    color: #333;
  }
  

  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100vh;
    background-color: #1f1f1f;
    color: #fff;
    padding: 30px 20px;
    display: flex;
    flex-direction: column;
    gap: 40px;
    transition: all 0.3s ease;
  }
  
  .logo {
    font-size: 1.7rem;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff;
  }
  
  .nav-links {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  
  .nav-links a {
    text-decoration: none;
    color: #ccc;
    font-weight: 500;
    padding: 10px 15px;
    border-radius: 8px;
    transition: all 0.3s ease;
  }
  
  .nav-links a:hover,
  .nav-links a.active {
    background-color: #22c55e; 
    color: #fff;
  }
  
  .logout {
    color: #ff6666 !important;
    font-weight: bold;
  }
  

  .topbar {
    margin-bottom: 40px;
  }
  
  .topbar h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 10px;
  }
  
  .subtitle {
    color: #666;
    font-size: 1rem;
  }
  

  .dashboard {
    margin-left: 250px;
    padding: 50px 70px;
    min-height: 100vh;
    transition: all 0.3s ease;
  }
  

  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
  }
  
  .card {
    background: #fff;
    padding: 30px 25px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
    cursor: pointer;
  }
  
  .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    background-color: #e6f7ec; /* Light green hover */
  }
  
  .card h3 {
    color: #444;
    margin-bottom: 15px;
    font-size: 1.2rem;
  }
  
  .count {
    font-size: 3rem;
    color: #22c55e; 
    margin-bottom: 15px;
    font-weight: 700;
  }
  

  .btn {
    display: inline-block;
    padding: 12px 25px;
    background: #22c55e; 
    color: #fff;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
  }
  
  .btn:hover {
    background: #16a34a;
    transform: translateY(-2px);
  }
  

  @media (max-width: 1024px) {
    .dashboard {
      padding: 30px 40px;
    }
  }
  
  @media (max-width: 768px) {
    .sidebar {
      width: 200px;
      padding: 20px 15px;
    }
  
    .dashboard {
      margin-left: 200px;
      padding: 25px 20px;
    }
  
    .card h3 {
      font-size: 1rem;
    }
  
    .count {
      font-size: 2.5rem;
    }
  }
  
  @media (max-width: 480px) {
    .sidebar {
      position: relative;
      width: 100%;
      height: auto;
      flex-direction: row;
      justify-content: space-around;
    }
  
    .dashboard {
      margin-left: 0;
      padding: 20px 15px;
    }
  
    .cards {
      grid-template-columns: 1fr;
      gap: 20px;
    }
  }
  
  </style>
<body>
  <div class="admin-container">

    <aside class="sidebar">
      <h2 class="logo">PawReach</h2>
      <nav>
        <ul class="nav-links">
          <li><a href= "{{ route('admin.dashboard') }}" id="dashboard" class="active">Dashboard</a></li>
          <li><a href="{{ route('admin.postreq') }}" id="postreq">Post Requests</a></li>
          <li><a href="{{ route('admin.postapproved') }}" id="approvedpost">Approved Posts</a></li>
          <li><a href="{{ route('admin.adoptionreview') }}" id="adoptreview">Review Adoptions</a></li>
          <li><a href="{{ route('admin.adoptionapproved') }}" id="adoptapproved">Approved Adoptions</a></li>
              <li>
    <a href="{{ route('admin.comments') }}" 
       class="{{ request()->routeIs('admin.comments') ? 'active' : '' }}">
       Comments Management
    </a>
</li>
          <li><a href="{{ route('logout') }}" class="logout">Logout</a></li>
        </ul>
      </nav>
    </aside>

    <main class="dashboard">
      <header class="topbar">
        <h1>Welcome, Admin</h1>
        <p class="subtitle">Manage pet posts and adoption requests here.</p>
      </header>

      <section class="cards">
        <div class="card">
          <h3>Pending Pet Posts</h3>
          <p class="count">{{ $pendingPosts }}</p>
          <a href="{{ route('admin.postreq') }}" class="btn">View Requests</a>
        </div>
      
        <div class="card">
          <h3>Approved Pets</h3>
          <p class="count">{{ $approvedPosts }}</p>
          <a href="{{ route('admin.postapproved') }}" class="btn">View Approved</a>
        </div>
      
        <div class="card">
          <h3>Pending Adoptions</h3>
          <p class="count">{{ $pendingAdoptions }}</p>
          <a href="{{ route('admin.adoptionreview') }}" class="btn">Review Requests</a>
        </div>
      
        <div class="card">
          <h3>Approved Adoptions</h3>
          <p class="count">{{ $approvedAdoptions }}</p>
          <a href="{{ route('admin.adoptionapproved') }}" class="btn">View Approved</a>
        </div>
      </section>
      
    </main>
  </div>





</body>

<script>
  document.querySelectorAll('.count').forEach(el => {
    const target = parseInt(el.textContent);
    let current = 0;
    const step = Math.ceil(target / 50);
    const interval = setInterval(() => {
      current += step;
      if (current >= target) {
        el.textContent = target;
        clearInterval(interval);
      } else {
        el.textContent = current;
      }
    }, 30);
  });
  </script>
  
</html>
