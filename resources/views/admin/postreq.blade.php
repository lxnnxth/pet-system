<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Post Requests</title>
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
      display: flex;
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
    }

    .logo {
      font-size: 1.7rem;
      font-weight: 700;
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


    .main-content {
      margin-left: 270px;
      padding: 40px;
      width: calc(100% - 270px);
    }

    h1 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 25px;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
    }

    .card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 20px;
      width: 300px;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img,
    .card video {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .card h3 {
      font-size: 1.2rem;
      margin-bottom: 8px;
      color: #22c55e;
    }

    .card p {
      font-size: 0.9rem;
      margin-bottom: 6px;
      color: #555;
    }

    .status {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 6px;
      background-color: #f59e0b;
      color: #fff;
      font-size: 0.8rem;
      font-weight: 600;
      text-transform: capitalize;
    }

    .view-btn {
      background-color: #22c55e;
      border: none;
      color: white;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 0.9rem;
      cursor: pointer;
      transition: 0.3s;
      margin-top: 10px;
    }

    .view-btn:hover {
      background-color: #16a34a;
    }


    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 100;
    }

    .modal-content {
      background: #fff;
      padding: 30px;
      border-radius: 20px;
      width: 500px;
      max-width: 90%;
      position: relative;
      max-height: 90vh;
      overflow-y: auto;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      animation: fadeIn 0.25s ease;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      background: none;
      border: none;
      font-size: 1.5rem;
      cursor: pointer;
      color: #555;
    }

    .close-btn:hover {
      color: #000;
    }


    .accept-btn, .reject-btn {
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-size: 0.95rem;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .accept-btn {
      background-color: #22c55e;
      color: white;
    }

    .accept-btn:hover {
      background-color: #16a34a;
    }

    .reject-btn {
      background-color: #ef4444;
      color: white;
    }

    .reject-btn:hover {
      background-color: #dc2626;
    }

    .modal-actions {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 20px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }

    @media (max-width: 768px) {
      .sidebar { width: 200px; }
      .main-content { margin-left: 220px; }
    }

    @media (max-width: 480px) {
      .sidebar {
        position: relative;
        width: 100%;
        flex-direction: row;
        justify-content: space-around;
        height: auto;
      }

      .main-content {
        margin-left: 0;
        padding: 20px;
      }

      .card {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <aside class="sidebar">
    <h2 class="logo">PawReach</h2>
    <nav>
      <ul class="nav-links">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.postreq') }}" class="active">Post Requests</a></li>
        <li><a href="{{ route('admin.postapproved') }}">Approved Posts</a></li>
        <li><a href="{{ route('admin.adoptionreview') }}">Review Adoptions</a></li>
        <li><a href="{{ route('admin.adoptionapproved') }}">Approved Adoptions</a></li>
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
    <h1>Pending Post Requests</h1>
    <div class="card-container">
      @foreach ($posts as $post)
        <div class="card" data-pet-id="{{ $post->pet_id }}" data-pet='@json($post)'>
          @if(Str::endsWith($post->media, ['.jpg', '.jpeg', '.png', '.gif']))
            <img src="{{ asset('storage/' . $post->media) }}" alt="Pet Image">
          @else
            <video src="{{ asset('storage/' . $post->media) }}" muted></video>
          @endif

          <h3>{{ $post->pet_name }}</h3>
          <p><strong>Type:</strong> {{ $post->type }}</p>
          <p><strong>Breed:</strong> {{ $post->breed }}</p>
          <p><strong>Rescuer:</strong> {{ $post->owner_name }}</p>
          <span class="status">{{ $post->status }}</span>
          <button class="view-btn">View Details</button>
        </div>
      @endforeach
    </div>
  </main>

  <div class="modal" id="detailsModal">
    <div class="modal-content">
      <button class="close-btn" id="closeModal">&times;</button>
      <div id="modalBody"></div>
      <div class="modal-actions">
        <form id="approveForm" method="POST" style="display:inline;">
          @csrf
          @method('PATCH')
          <button type="submit" class="accept-btn">Accept</button>
        </form>
        <button id="rejectBtn" class="reject-btn">Reject</button>
      </div>
    </div>
  </div>

 
  <div class="modal" id="confirmDeleteModal">
    <div class="modal-content">
      <button class="close-btn" id="closeDeleteModal">&times;</button>
      <h2 style="color:#ef4444; margin-bottom:15px;">Are you sure you want to reject this post?</h2>
      <div class="modal-actions" style="justify-content:flex-end;">
        <button id="confirmDeleteBtn" class="reject-btn">Yes, Reject</button>
        <button id="cancelDeleteBtn" class="accept-btn">Cancel</button>
      </div>
    </div>
  </div>

  <div class="modal" id="confirmApproveModal">
    <div class="modal-content">
      <button class="close-btn" id="closeApproveModal">&times;</button>
      <h2 style="color:#22c55e; margin-bottom:15px;">Are you sure you want to approve this post?</h2>
      <div class="modal-actions" style="justify-content:flex-end;">
        <button id="confirmApproveBtn" class="accept-btn">Yes, Approve</button>
        <button id="cancelApproveBtn" class="reject-btn">Cancel</button>
      </div>
    </div>
  </div>

  <script>
    let currentPet = null;

    const modal = document.getElementById('detailsModal');
    const modalBody = document.getElementById('modalBody');
    const closeModal = document.getElementById('closeModal');

    const approveForm = document.getElementById('approveForm');
    const rejectBtn = document.getElementById('rejectBtn');

    const confirmDeleteModal = document.getElementById('confirmDeleteModal');
    const closeDeleteModal = document.getElementById('closeDeleteModal');
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');

    const confirmApproveModal = document.getElementById('confirmApproveModal');
    const closeApproveModal = document.getElementById('closeApproveModal');
    const confirmApproveBtn = document.getElementById('confirmApproveBtn');
    const cancelApproveBtn = document.getElementById('cancelApproveBtn');

    // Utility to show toast messages
    function showMessage(text, type = 'success') {
      const msg = document.createElement('div');
      msg.textContent = text;
      msg.style.position = 'fixed';
      msg.style.top = '20px';
      msg.style.right = '20px';
      msg.style.padding = '12px 20px';
      msg.style.borderRadius = '8px';
      msg.style.color = '#fff';
      msg.style.backgroundColor = type === 'success' ? '#22c55e' : '#ef4444';
      msg.style.boxShadow = '0 2px 6px rgba(0,0,0,0.2)';
      msg.style.zIndex = 9999;
      document.body.appendChild(msg);
      setTimeout(() => msg.remove(), 2000);
    }

    // Format dates
    function formatDate(dateString) {
      if (!dateString) return 'N/A';
      const date = new Date(dateString);
      if (isNaN(date)) return 'N/A';
      return date.toLocaleString('en-US', {
        year: 'numeric', month: 'long', day: 'numeric',
        hour: '2-digit', minute: '2-digit', hour12: true
      });
    }

    // Show Details Modal
    document.querySelectorAll('.view-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        currentPet = JSON.parse(btn.closest('.card').dataset.pet);

        modalBody.innerHTML = `
          ${currentPet.media.match(/\.(jpg|jpeg|png|gif)$/i)
            ? `<img src="/storage/${currentPet.media}" alt="${currentPet.pet_name}" style="width:100%; border-radius:12px;">`
            : `<video controls src="/storage/${currentPet.media}" style="width:100%; border-radius:12px;"></video>`}
          <h2 style="color:#22c55e; margin-top:15px;">${currentPet.pet_name}</h2><br>
          <p><strong>Type:</strong> ${currentPet.type}</p>
          <p><strong>Breed:</strong> ${currentPet.breed}</p>
          <p><strong>Age:</strong> ${currentPet.age}</p>
          <p><strong>Description:</strong> ${currentPet.description}</p>
          <p><strong>Last Seen:</strong> ${currentPet.last_seen}</p>
          <p><strong>Date Sent:</strong> ${formatDate(currentPet.created_at)}</p>
          <hr style="margin:15px 0;">
          <p><strong>Rescuer:</strong> ${currentPet.owner_name}</p>
          <p><strong>Contact:</strong> ${currentPet.owner_contact}</p>
          <p><strong>Email:</strong> ${currentPet.owner_email}</p>
        `;

        approveForm.dataset.action = `/admin/post/approve/${currentPet.pet_id}`;
        modal.style.display = 'flex';
      });
    });

    // Close Modals
    closeModal.addEventListener('click', () => modal.style.display = 'none');
    closeDeleteModal.addEventListener('click', () => confirmDeleteModal.style.display = 'none');
    cancelDeleteBtn.addEventListener('click', () => confirmDeleteModal.style.display = 'none');
    closeApproveModal.addEventListener('click', () => confirmApproveModal.style.display = 'none');
    cancelApproveBtn.addEventListener('click', () => confirmApproveModal.style.display = 'none');

    window.addEventListener('click', e => {
      if (e.target === modal) modal.style.display = 'none';
      if (e.target === confirmDeleteModal) confirmDeleteModal.style.display = 'none';
      if (e.target === confirmApproveModal) confirmApproveModal.style.display = 'none';
    });

    // Remove card by pet_id
    function removeCard(petId) {
      const card = document.querySelector(`.card[data-pet-id='${petId}']`);
      if (card) card.remove();
    }

    // Reject Post
    rejectBtn.addEventListener('click', () => confirmDeleteModal.style.display = 'flex');

    confirmDeleteBtn.addEventListener('click', () => {
      const url = `/admin/post/reject/${currentPet.pet_id}`;
      fetch(url, {
        method: 'PATCH',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value,
          'Accept': 'application/json'
        }
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          removeCard(currentPet.pet_id);
          confirmDeleteModal.style.display = 'none';
          modal.style.display = 'none';
          showMessage('Post rejected successfully!');
          setTimeout(() => window.location.href = '/admin/postreq', 2000);
        } else {
          showMessage('Failed to reject post.', 'error');
        }
      })
      .catch(err => { console.error(err); showMessage('An error occurred.', 'error'); });
    });

    // Approve Post
    approveForm.addEventListener('submit', e => {
      e.preventDefault();
      confirmApproveModal.style.display = 'flex';
    });

    confirmApproveBtn.addEventListener('click', () => {
    const url = `/admin/post/approve/${currentPet.pet_id}`;
      fetch(url, {
        method: 'PATCH',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value,
          'Accept': 'application/json'
        }
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          removeCard(currentPet.pet_id);
          modal.style.display = 'none';
          confirmApproveModal.style.display = 'none';
          showMessage('Post approved successfully!');
          setTimeout(() => window.location.href = '/admin/postreq', 2000);
        } else {
          showMessage('Failed to approve post.', 'error');
        }
      })
      .catch(err => { console.error(err); showMessage('An error occurred.', 'error'); });
    });
  </script>
</body>
</html>
