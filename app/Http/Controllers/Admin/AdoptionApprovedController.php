<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionApprovedController extends Controller
{
    /**
     * Display a listing of approved adoptions.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Eager load pet relationship to avoid N+1 query
        $adoptions = Adoption::with('pet')
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc') // optional: show latest first
            ->get();

        return view('admin.adoptionapproved', compact('adoptions'));
    }
}
