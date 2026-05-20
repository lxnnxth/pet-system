<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Adoption Review</title>

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

        /* Main content */
        .main-content { margin-left:270px; padding:40px; width:calc(100% - 270px); }
        h1 { font-size:2rem; font-weight:700; margin-bottom:25px; }

        /* Cards */
        .card-container { display:flex; flex-wrap:wrap; gap:25px; }
        .card {
            background:#fff; border-radius:15px; box-shadow:0 4px 8px rgba(0,0,0,0.1);
            padding:20px; width:300px; transition:transform 0.2s ease;
        }
        .card:hover { transform:translateY(-5px); }
        .card img, .card video { width:100%; border-radius:12px; margin-bottom:10px; height:200px; object-fit:cover; }
        .card h3 { font-size:1.2rem; margin-bottom:8px; color:#22c55e; }
        .card p { font-size:0.9rem; margin-bottom:6px; color:#555; }
        .status { display:inline-block; padding:5px 10px; border-radius:6px; background:#f59e0b; color:#fff; font-size:0.8rem; font-weight:600; text-transform:capitalize; }
        .view-btn { background:#22c55e; border:none; color:#fff; padding:8px 12px; border-radius:6px; font-size:0.9rem; cursor:pointer; transition:0.3s; margin-top:10px; }
        .view-btn:hover { background:#16a34a; }

        /* Modal */
        .modal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:100; }
        .modal-content {
            background:#fff; padding:30px; border-radius:20px; width:500px; max-width:90%;
            max-height:90vh; overflow-y:auto; position:relative; box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }
        .close-btn { position:absolute; top:10px; right:15px; background:none; border:none; font-size:1.5rem; cursor:pointer; color:#555; }
        .close-btn:hover { color:#000; }

        .accept-btn, .reject-btn {
            padding:10px 20px; border:none; border-radius:8px; font-size:0.95rem; cursor:pointer; font-weight:600; transition:0.3s;
        }
        .accept-btn { background:#22c55e; color:#fff; }
        .accept-btn:hover { background:#16a34a; }
        .reject-btn { background:#ef4444; color:#fff; }
        .reject-btn:hover { background:#dc2626; }
        .modal-actions { display:flex; justify-content:flex-end; gap:10px; margin-top:20px; }

        /* Responsive */
        @media(max-width:768px) { .sidebar{width:200px;} .main-content{margin-left:220px;} }
        @media(max-width:480px){
            .sidebar{position:relative;width:100%;flex-direction:row;justify-content:space-around;height:auto;}
            .main-content{margin-left:0;padding:20px;} 
            .card{width:100%;}
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2 class="logo">PawReach</h2>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.postreq') }}">Post Requests</a></li>
                <li><a href="{{ route('admin.postapproved') }}">Approved Posts</a></li>
                <li><a href="{{ route('admin.adoptionreview') }}" class="active">Review Adoptions</a></li>
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

    <!-- Main Content -->
    <main class="main-content">
        <h1>Pending Adoption Requests</h1>
        <div class="card-container">
            @foreach ($adoptions as $adoption)
                <div class="card" data-id="{{ $adoption->id }}" data-adoption='@json($adoption)'>
                    @if($adoption->pet && $adoption->pet->media)
                        @if (Str::endsWith($adoption->pet->media, ['.jpg', '.jpeg', '.png', '.gif']))
                            <img src="{{ asset('storage/' . $adoption->pet->media) }}" alt="Pet Image">
                        @else
                            <video src="{{ asset('storage/' . $adoption->pet->media) }}" controls muted></video>
                        @endif
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

    <!-- Details Modal -->
    <div class="modal" id="detailsModal">
        <div class="modal-content">
            <button class="close-btn" id="closeModal">&times;</button>
            <div id="modalBody"></div>
            <div class="modal-actions">
                <button id="approveBtn" class="accept-btn">Approve</button>
                <button id="rejectBtn" class="reject-btn">Reject</button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let currentAdoption = null;

        function formatDate(dateStr) {
            if(!dateStr) return 'N/A';
            const date = new Date(dateStr);
            return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
        }

        function showMessage(text, type='success') {
            const msg = document.createElement('div');
            msg.textContent = text;
            msg.style.position='fixed';
            msg.style.top='20px';
            msg.style.right='20px';
            msg.style.padding='12px 20px';
            msg.style.borderRadius='8px';
            msg.style.color='#fff';
            msg.style.backgroundColor=type==='success' ? '#22c55e' : '#ef4444';
            msg.style.boxShadow='0 2px 6px rgba(0,0,0,0.2)';
            msg.style.zIndex=9999;
            document.body.appendChild(msg);
            setTimeout(()=>msg.remove(), 2500);
        }

        function removeCard(id) {
            const card = document.querySelector(`.card[data-id='${id}']`);
            if(card) card.remove();
        }

        const modal = document.getElementById('detailsModal');
        const modalBody = document.getElementById('modalBody');
        const closeModal = document.getElementById('closeModal');
        const approveBtn = document.getElementById('approveBtn');
        const rejectBtn = document.getElementById('rejectBtn');

        // Open modal
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                currentAdoption = JSON.parse(btn.closest('.card').dataset.adoption);
                const petMedia = currentAdoption.pet?.media;
                const isImage = petMedia && /\.(jpg|jpeg|png|gif)$/i.test(petMedia);

                modalBody.innerHTML = `
                    <div style="text-align:center; margin-bottom:15px;">
                        ${petMedia 
                            ? (isImage
                                ? `<img src="/storage/${petMedia}" style="width:100%;max-height:300px;object-fit:cover;border-radius:12px;">`
                                : `<video controls src="/storage/${petMedia}" style="width:100%;max-height:300px;border-radius:12px;"></video>`)
                            : `<img src="/images/default-pet.jpg" style="width:100%;max-height:300px;border-radius:12px;">`}
                    </div>
                    <h2>${currentAdoption.pet?.pet_name ?? 'N/A'}</h2>
                    <p><strong>Adopter Name:</strong> ${currentAdoption.full_name ?? 'N/A'}</p>
                    <p><strong>Email:</strong> ${currentAdoption.email ?? 'N/A'}</p>
                    <p><strong>Phone:</strong> ${currentAdoption.phone ?? 'N/A'}</p>
                    <p><strong>Address:</strong> ${currentAdoption.address ?? 'N/A'}</p>
                    <p><strong>Age:</strong> ${currentAdoption.age ?? 'N/A'}</p>
                    <p><strong>Role:</strong> ${currentAdoption.role ?? 'N/A'}</p>
                    <p><strong>Department:</strong> ${currentAdoption.department ?? 'N/A'}</p>
                    <p><strong>Year Level:</strong> ${currentAdoption.year_level ?? 'N/A'}</p>
                    <p><strong>Occupation:</strong> ${currentAdoption.occupation ?? 'N/A'}</p>
                    <p><strong>Home Type:</strong> ${currentAdoption.home_type ?? 'N/A'}</p>
                    <p><strong>Other Pets:</strong> ${currentAdoption.other_pets ?? 'N/A'}</p>
                    <p><strong>Experience:</strong> ${currentAdoption.experience ?? 'N/A'}</p>
                    <p><strong>Reason for Adoption:</strong> ${currentAdoption.adoption_reason ?? 'N/A'}</p>
                    <p><strong>Date Sent:</strong> ${formatDate(currentAdoption.created_at)}</p>
                    <p><strong>Status:</strong> ${currentAdoption.status ?? 'N/A'}</p>
                `;
                modal.style.display='flex';
            });
        });

        // Close modal
        closeModal.addEventListener('click', ()=> modal.style.display='none');
        window.addEventListener('click', e => { if(e.target === modal) modal.style.display='none'; });

        // Approve AJAX
        approveBtn.addEventListener('click', () => {
            if(!currentAdoption) return;
            fetch(`/admin/adoption/approve/${currentAdoption.id}`, {
                method:'PATCH',
                headers:{ 'X-CSRF-TOKEN': csrfToken, 'Accept':'application/json' }
            })
            .then(res=>res.json())
            .then(data=>{
                if(data.success){
                    removeCard(currentAdoption.id);
                    modal.style.display='none';
                    showMessage('Adoption request approved!');
                } else showMessage('Failed to approve.', 'error');
            }).catch(()=>showMessage('Error approving.', 'error'));
        });

        // Reject AJAX
        rejectBtn.addEventListener('click', () => {
            if(!currentAdoption) return;
            fetch(`/admin/adoption/reject/${currentAdoption.id}`, {
                method:'PATCH',
                headers:{ 'X-CSRF-TOKEN': csrfToken, 'Accept':'application/json' }
            })
            .then(res=>res.json())
            .then(data=>{
                if(data.success){
                    removeCard(currentAdoption.id);
                    modal.style.display='none';
                    showMessage('Adoption request rejected!', 'error');
                } else showMessage('Failed to reject.', 'error');
            }).catch(()=>showMessage('Error rejecting.', 'error'));
        });
    </script>
</body>
</html>
