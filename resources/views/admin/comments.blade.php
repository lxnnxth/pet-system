<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Comments Management</title>
  <style>
    * { 
        margin:0; 
        padding:0; 
        box-sizing:border-box; 
        font-family:"Poppins",sans-serif; 
    }
    body { 
        background:#f4f6fc; 
        color:#333; 
        display:flex; 
    }

 
    .sidebar {
         position:fixed;
         top:0;
         left:0;
         width:250px; 
         height:100vh; 
         background:#1f1f1f; 
         color:#fff; 
         padding:30px 20px; 
         display:flex; 
         flex-direction:column; 
         gap:40px;
         }
    .logo { 
        font-size:1.7rem; 
        font-weight:700; 
        color:#fff; 
    }
    .nav-links { 
        list-style:none;
         display:flex; 
         flex-direction:column; 
         gap:20px; 
        }
    .nav-links a { 
        text-decoration:none; 
        color:#ccc; 
        font-weight:500; 
        padding:10px 15px; 
        border-radius:8px; 
        transition:0.3s; 
    }
    .nav-links a:hover, .nav-links a.active { 
        background:#22c55e; 
        color:#fff; 
    }
    .logout { 
        color:#ff6666 !important; 
        font-weight:bold; 
    }


    .main-content { 
        margin-left:270px; 
        padding:40px; 
        width:calc(100% - 270px); 
    }
    h1 { 
        font-size:2rem; 
        font-weight:700; 
        margin-bottom:25px; 
    }


    .card-container { 
        display:flex; 
        flex-wrap:wrap; 
        gap:25px; 
    }
    .card {
      background:#fff; 
      border-radius:15px; 
      box-shadow:0 4px 8px rgba(0,0,0,0.1); 
      padding:20px; 
      width:300px; 
      transition:transform 0.2s ease; 
      display:flex; 
      flex-direction:column; 
      max-height:220px;   /* same size for all cards */
      justify-content:space-between;
      overflow:hidden;
    }
    .card:hover { transform:translateY(-5px); }
    .card h3 { font-size:1.2rem; margin-bottom:8px; color:#22c55e; }
    .card p { font-size:0.9rem; margin-bottom:6px; color:#555; overflow-y:auto; max-height:120px; }


    .btn-delete-trigger {
      background:#ff4d4d; 
      border:none; 
      color:#fff; 
      padding:8px 12px; 
      border-radius:6px;
      cursor:pointer; 
      transition:0.3s; 
      font-weight:600; 
      align-self:flex-start;
    }
    .btn-delete-trigger:hover { background:#e60000; }


    .modal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:100; }
    .modal-content { background:#fff; padding:30px; border-radius:20px; width:400px; max-width:90%; text-align:center; box-shadow:0 10px 25px rgba(0,0,0,0.2); }
    .modal-content h3 { color:#ff4d4d; margin-bottom:15px; }
    .modal-buttons { display:flex; justify-content:space-around; margin-top:20px; }
    .btn-cancel { background:#ccc; padding:8px 15px; border-radius:6px; cursor:pointer; }
    .btn-cancel:hover { background:#aaa; }
    .btn-delete { background:#ff4d4d; color:#fff; border:none; padding:8px 15px; border-radius:6px; cursor:pointer; font-weight:600; }
    .btn-delete:hover { background:#e60000; }

 
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
        <li><a href="{{ route('admin.adoptionapproved') }}">Approved Adoptions</a></li>
         <li><a href="{{ route('admin.comments') }}" class="active">Comments Management</a></li>
        <li><a href="{{ route('logout') }}" class="logout">Logout</a></li>
      </ul>
    </nav>
  </aside>

  <main class="main-content">
    <h1>Comments Management</h1>

    <div class="card-container">
      @forelse($comments as $comment)
        <div class="card">
          <h3>{{ $comment->name }}</h3>
          <p>{{ $comment->comment }}</p>
       
          <button class="btn-delete-trigger" data-action="{{ route('admin.comments.destroy', $comment->id) }}">Delete</button>
        </div>
      @empty
        <p>No comments available.</p>
      @endforelse
    </div>
  </main>


  <div id="deleteModal" class="modal">
    <div class="modal-content">
      <h3>Delete Comment</h3>
      <p>Are you sure you want to delete this comment?</p>
      <div class="modal-buttons">
        <button id="cancelBtn" class="btn-cancel">Cancel</button>
        <form id="deleteForm" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn-delete">Delete</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const deleteButtons = document.querySelectorAll('.btn-delete-trigger');
    const modal = document.getElementById('deleteModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const deleteForm = document.getElementById('deleteForm');

    deleteButtons.forEach(btn => {
      btn.addEventListener('click', function(e){
        e.preventDefault();
        deleteForm.action = this.dataset.action;
        modal.style.display = 'flex';
      });
    });

    cancelBtn.addEventListener('click', function(){
      modal.style.display = 'none';
    });

    window.addEventListener('click', function(e){
      if(e.target == modal){
        modal.style.display = 'none';
      }
    });
  </script>
</body>
</html>
