<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $pendingPosts = \App\Models\Pet::where('status', 'pending')->count();
        $approvedPosts = \App\Models\Pet::where('status', 'approved')->count();
        $pendingAdoptions = \App\Models\Adoption::where('status', 'pending')->count();
        $approvedAdoptions = \App\Models\Adoption::where('status', 'approved')->count();
    
        return view('admin.dashboard', compact(
            'pendingPosts',
            'approvedPosts',
            'pendingAdoptions',
            'approvedAdoptions'
        ));
        return view('admin.dashboard');
    }

    public function postRequests()
    {
        return view('admin.postreq');
    }

    public function approvedPosts()
    {
        return view('admin.postapproved');
    }

    public function adoptReview()
    {
        return view('admin.adoptionreview');
    }

    public function adoptApproved()
    {
        return view('admin.adoptionapproved');
    }

   

}
