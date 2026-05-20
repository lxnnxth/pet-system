<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\ApprovedPostController;
use App\Http\Controllers\Client\BrowsePetController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\AdoptionController;
use App\Http\Controllers\Admin\AdminAdoptionController;
use App\Http\Controllers\Admin\AdoptionApprovedController;
use App\Http\Controllers\Admin\AdminController;


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', function () {
    session()->forget('user');
    return redirect()->route('login');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'home'])->name('client.home');
Route::get('/donate', [HomeController::class, 'donate'])->name('client.donate');
Route::get('/about', [HomeController::class, 'about'])->name('client.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('client.contact');
Route::get('/post', [HomeController::class, 'post'])->name('client.post');

// Pet posting (client)
Route::post('/petpost', [PostController::class, 'store'])->name('petpost');

// Browse pets (only approved)
Route::get('/adopt', [BrowsePetController::class, 'browse'])->name('client.adopt');
Route::post('/like/{pet_id}', [App\Http\Controllers\Client\BrowsePetController::class, 'like']);


// Pet details page
Route::get('/pet/{id}', [BrowsePetController::class, 'show'])->name('client.petdetails');

// Comments
Route::post('/pet/{id}/comment', [CommentController::class, 'store'])->name('client.pet.comment');

// Adoption
Route::get('/pet/{pet_id}/adopt', [AdoptionController::class, 'showForm'])->name('client.adoptform');
Route::post('/pet/{pet_id}/adopt', [AdoptionController::class, 'store'])->name('client.adopt.submit');

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected by Middleware)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth.session')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    // Post requests (pending)
    Route::get('/postreq', [AdminPostController::class, 'postRequests'])->name('admin.postreq');

    // Approved posts (only approved, not adopted)
    Route::get('/postapproved', [ApprovedPostController::class, 'approved'])->name('admin.postapproved');

    // Approve/reject post
    Route::patch('/post/approve/{pet_id}', [AdminPostController::class, 'approve'])->name('admin.post.approve');
    Route::patch('/post/reject/{pet_id}', [AdminPostController::class, 'reject'])->name('admin.post.reject');

    // Adoption review (pending adoptions)
    Route::get('/adoptionreview', [AdminAdoptionController::class, 'index'])->name('admin.adoptionreview');

     Route::get('/comments-review', [CommentsController::class, 'index'])->name('commentsreview');

    // Approve/reject adoption requests
    Route::patch('/adoption/approve/{id}', [AdminAdoptionController::class, 'approve'])->name('admin.adoption.approve');
    Route::patch('/adoption/reject/{id}', [AdminAdoptionController::class, 'reject'])->name('admin.adoption.reject');

    // Approved adoptions page
    Route::get('/adoptionapproved', [AdoptionApprovedController::class, 'index'])->name('admin.adoptionapproved');

    Route::get('/comments', [AdminController::class, 'comments'])->name('admin.comments');
    Route::patch('/comments/{id}/approve', [AdminController::class, 'approveComment'])->name('admin.comments.approve');
    Route::delete('/comments/{id}', [AdminController::class, 'destroyComment'])->name('admin.comments.destroy');
    
});
