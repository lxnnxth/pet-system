<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Like;






class BrowsePetController extends Controller
{
    // 🐾 Show all pets available for adoption
    public function browse(Request $request)
    {
        // Start query: Only show pets that are approved and DO NOT have an approved adoption
        $query = Pet::where('status', 'approved')
                    ->whereDoesntHave('adoptions', function($q) {
                        $q->where('status', 'approved');
                    });

        // Filter by type if provided
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // Execute query
        $posts = $query->latest()->get();

        return view('client.adopt', compact('posts'));
    }

    // 🐶 Show a single pet on the dedicated pet page
    public function show($id)
    {
        $pet = Pet::with('comments')->findOrFail($id);

        // Prevent viewing rejected pets
        if ($pet->status === 'reject') {
            abort(404, 'Pet not available for adoption.');
        }

        return view('client.petdetails', compact('pet'));
    }

    public function like($pet_id)
    {
        Like::create(['pet_id' => $pet_id]);
    
        $likeCount = Like::where('pet_id', $pet_id)->count();
    
        return response()->json([
            'liked' => true,
            'count' => $likeCount
        ]);
    }
    
    
}
