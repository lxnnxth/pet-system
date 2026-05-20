<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show the form
    public function postpet()
    {
        return view('client.post');
    }

    // Store the form submission
    public function store(Request $request)
    {
        $data = $request->validate([
            'pet_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'age' => 'nullable|integer',
            'breed' => 'nullable|string|max:255',
            'description' => 'required|string',
            'media' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,mov,avi',
            'last_seen' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'owner_email' => 'required|email|max:255',
            'owner_contact' => 'required|string|max:20',
           
           
        ], [
            'media.required' => 'Please upload a photo or video.',
            'media.mimes' => 'Only jpg, png, gif images or mp4, mov, avi videos are allowed.',
            
        ]);
    
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $filePath = $file->store('pets', 'public'); // store in storage/app/public/pets
            $data['media'] = $filePath; // save to the database column
        }
    
        Pet::create($data);
    
        return redirect()->back()->with('success', 'Pet submitted! Waiting for admin approval.');
    }
}    

