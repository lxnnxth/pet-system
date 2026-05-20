<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Approved Adoptions</title>
  <style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:"Poppins", sans-serif; }
    body { background:#f4f6fc; color:#333; display:flex; }

    /* Sidebar */
    .sidebar {
      position:fixed; top:0; left:0; width:250px; height:100vh;
      background:#1f1f1f; color:#fff; padding:30px 20px; display:flex; flex-direction:column; gap:40px;
    }
    .logo { font-size:1.7rem; font-weight:700; color:#fff; }
    .nav-links { list-style:none; display:flex; flex-direction:column; gap:20px; }
    .nav-links a { text-decoration:none; color:#ccc; font-weight:500; padding:10px 15px; border-radius:8px; transition:0.3s; }
    .nav-links a:hover, .nav-links a.active { background:#22c55e; color:#fff; }
    .logout { color:#ff6666 !important; font-weight:bold; }

    /* Main Content */
    .main-content { margin-left:270px; padding:40px; width:calc(100% - 270px); }
    h1 { font-size:2rem; font-weight:700; margin-bottom:25px; }

    /* Card Grid */
    .card-container { display:flex; flex-wrap:wrap; gap:25px; }
    .card {
      background:#fff; border-radius:15px; box-shadow:0 4px 8px rgba(0,0,0,0.1);
      padding:20px; width:300px; transition:transform 0.2s ease;
    }
    .card:hover { transform:translateY(-5px); }
    .card img, .card video { width:100%; height:200px; object-fit:cover; border-radius:10px; margin-bottom:15px; }
    .card h3 { font-size:1.2rem; margin-bottom:8px; color:#22c55e; }
    .card p { font-size:0.9rem; margin-bottom:6px; color:#555; }
    .status { display:inline-block; padding:5px 10px; border-radius:6px; background:green; color:#fff; font-size:0.8rem; font-weight:600; text-transform:capitalize; }
    .view-btn { background:#22c55e; border:none; color:#fff; padding:8px 12px; border-radius:6px; font-size:0.9rem; cursor:pointer; transition:0.3s; margin-top:10px; }
    .view-btn:hover { background:#16a34a; }

    /* Modal */
    .modal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:100; }
    .modal-content { background:#fff; padding:30px; border-radius:20px; width:500px; max-width:90%; max-height:90vh; overflow-y:auto; position:relative; box-shadow:0 10px 25px rgba(0,0,0,0.2); }
    .close-btn { position:absolute; top:10px; right:15px; background:none; border:none; font-size:1.5rem; cursor:pointer; color:#555; }
    .close-btn:hover { color:#000; }

    @media(max-width:768px){ .sidebar{width:200px;} .main-content{margin-left:220px;} }
    @media(max-width:480px){ .sidebar{position:relative;width:100%;flex-direction:row;justify-content:space-around;height:auto;} .main-content{margin-left:0;padding:20px;} .card{width:100%;} }
  </style>
</head>
<body>
<aside class="sidebar">
  <h2 class="logo">PawReach</h2>
  <nav>
    <ul class="nav-links">
      <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li><a href="{{ route('admin.postreq') }}">Post Requests</a></li>
      <li><a href="{{ route('admin.postapproved') }}">Approved Posts</a></li>
      <li><a href="{{ route('admin.adoptionreview') }}">Review Adoptions</a></li>
      <li><a href="{{ route('admin.adoptionapproved') }}" class="active">Approved Adoptions</a></li>
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

<main class="main-content">
  <h1>Approved Adoptions</h1>
  <div class="card-container">
    @foreach ($adoptions as $adoption)
      <div class="card" data-adoption='@json($adoption)'>
        @if($adoption->pet && $adoption->pet->media && Str::endsWith($adoption->pet->media, ['.jpg','.jpeg','.png','.gif']))
          <img src="{{ asset('storage/' . $adoption->pet->media) }}" alt="Pet Image">
        @elseif($adoption->pet && $adoption->pet->media)
          <video src="{{ asset('storage/' . $adoption->pet->media) }}" muted></video>
        @else
          <img src="{{ asset('images/default-pet.jpg') }}" alt="Default Pet">
        @endif

        <h3>{{ $adoption->pet->pet_name ?? 'N/A' }}</h3>
        <p><strong>Name:</strong> {{ $adoption->full_name }}</p>
        <p><strong>Email:</strong> {{ $adoption->email }}</p>
        <p><strong>Phone:</strong> {{ $adoption->phone ?? 'N/A' }}</p>
        <span class="status">{{ $adoption->status }}</span>
        <button class="view-btn">View Details</button>
      </div>
    @endforeach
  </div>
</main>

<div class="modal" id="detailsModal">
  <div class="modal-content">
    <button class="close-btn" id="closeModal">&times;</button>
    <div id="modalBody"></div>
  </div>
</div>
<script>
  const modal = document.getElementById('detailsModal');
  const modalBody = document.getElementById('modalBody');
  const closeModal = document.getElementById('closeModal');
  
  // ✅ Format readable date (PH format)
  function formatDate(dateString) {
    if (!dateString) return 'N/A';
    const date = new Date(dateString);
    return date.toLocaleString('en-PH', {
      year: 'numeric', month: 'long', day: 'numeric',
      hour: '2-digit', minute: '2-digit'
    });
  }
  
  // ✅ Open modal when "View Details" is clicked
  document.querySelectorAll('.view-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const adoption = JSON.parse(btn.closest('.card').dataset.adoption);
      const pet = adoption.pet || {};
      const petMedia = pet.media ? `/storage/${pet.media}` : '/images/default-pet.jpg';
      const isImage = pet.media && /\.(jpg|jpeg|png|gif)$/i.test(pet.media);
  
      modalBody.innerHTML = `
        <div style="text-align:center;">
          ${
            pet.media
              ? (isImage
                  ? `<img src="${petMedia}" alt="Pet Image" style="width:100%;border-radius:12px;">`
                  : `<video controls src="${petMedia}" style="width:100%;border-radius:12px;"></video>`)
              : `<img src="/images/default-pet.jpg" alt="Default Pet" style="width:100%;border-radius:12px;">`
          }
        </div>

        <h2 style="color:#22c55e; margin-top:15px;">${pet.pet_name ?? 'N/A'}</h2>
  
        <p><strong>Breed:</strong> ${pet.breed ?? 'N/A'}</p>
        <p><strong>Type:</strong> ${pet.type ?? 'N/A'}</p>
        <p><strong>Adopter Name:</strong> ${adoption.full_name ?? 'N/A'}</p>
        <p><strong>Email:</strong> ${adoption.email ?? 'N/A'}</p>
        <p><strong>Phone:</strong> ${adoption.phone ?? 'N/A'}</p>
        <p><strong>Address:</strong> ${adoption.address ?? 'N/A'}</p>
        <p><strong>Age:</strong> ${adoption.age ?? 'N/A'}</p>
        <p><strong>Occupation:</strong> ${adoption.occupation ?? 'N/A'}</p>
        <p><strong>Home Type:</strong> ${adoption.home_type ?? 'N/A'}</p>
        <p><strong>Other Pets:</strong> ${adoption.other_pets ?? 'N/A'}</p>
        <p><strong>Experience:</strong> ${adoption.experience ?? 'N/A'}</p>
        <p><strong>Reason for Adoption:</strong> ${adoption.adoption_reason ?? 'N/A'}</p>
  
        <!-- 🕒 Date sent -->
        <p><strong>Date Sent:</strong> ${formatDate(adoption.created_at)}</p>
  
        <p><strong>Status:</strong> 
          <span style="color:${adoption.status === 'approved' ? 'green' : '#555'};font-weight:600;">
            ${adoption.status}
          </span>
        </p>
      `;
  
      modal.style.display = 'flex';
    });
  });
  
  // ✅ Close modal when clicking X or outside
  closeModal.addEventListener('click', () => modal.style.display = 'none');
  window.addEventListener('click', e => { if (e.target === modal) modal.style.display = 'none'; });
  </script>
  

</body>
</html>
