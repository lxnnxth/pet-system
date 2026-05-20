<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Adoption;

class AdoptionController extends Controller
{
    /**
     * Show the adoption form for a specific pet.
     */
    public function showForm($pet_id)
    {
        $pet = Pet::findOrFail($pet_id);
        return view('client.adoptform', compact('pet'));
    }

    /**
     * Store the adoption request in the database.
     */
    public function store(Request $request, $pet_id)
    {
        $request->validate([
            'full_name'      => 'required|string|max:150',
            'age'            => 'nullable|integer|min:0',
            'email'          => 'required|email|max:150',
            'phone'          => 'nullable|string|max:50',
            'address'        => 'nullable|string|max:255',
            'role'           => 'required|string|max:50',
            'department'     => 'nullable|string|max:100',
            'year_level'     => 'nullable|integer|min:1',
            'occupation'     => 'nullable|string|max:100',
            'home_type'      => 'nullable|string|max:50',
            'other_pets'     => 'nullable|string',
            'experience'     => 'nullable|string',
            'adoption_reason'=> 'required|string',
        ]);

        Adoption::create([
            'pet_id'         => $pet_id,
            'full_name'      => $request->full_name,
            'age'            => $request->age,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'address'        => $request->address,
            'role'           => $request->role,
            'department'     => $request->department,
            'year_level'     => $request->year_level,
            'occupation'     => $request->occupation,
            'home_type'      => $request->home_type,
            'other_pets'     => $request->other_pets,
            'experience'     => $request->experience,
            'adoption_reason'=> $request->adoption_reason,
            'status'         => 'pending',
        ]);

        return redirect()->route('client.adoptform', ['pet_id' => $pet_id])
        ->with('success', 'We appreciate your interest in adopting. Our team will review your application and reach out to you shortly for further details.');
    }
}
