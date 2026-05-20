<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pet;
use Illuminate\Support\Facades\Storage;
class AdminPostController extends Controller
{
    public function postRequests()
    {
        $posts = Pet::where('status', 'pending')->latest()->get();
        return view('admin.postreq', compact('posts'));
    }
    public function approve($pet_id)
    {
        $post = Pet::findOrFail($pet_id);
        $post->status = 'approved';
        $post->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Post approved successfully!',
            'redirect' => route('admin.postreq')
        ]);
    }
    


public function reject($pet_id, Request $request)
{
    $post = Pet::findOrFail($pet_id);

    // Delete media if exists
    if ($post->media && Storage::disk('public')->exists('pets/' . $post->media)) {
        Storage::disk('public')->delete('pets/' . $post->media);
    }

    // Delete the post
    $post->delete();

    // Always return JSON for AJAX
    return response()->json([
        'success' => true,
        'message' => 'Post rejected successfully!',
    ]);
}

    
    
}


