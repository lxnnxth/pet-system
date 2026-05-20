<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pet;

class ApprovedPostController extends Controller
{
    // Show all approved posts that are not yet adopted via approved adoption
    public function approved()
    {
        $posts = Pet::where('status', 'approved')
                    ->whereDoesntHave('adoptions', function($query) {
                        $query->where('status', 'approved'); // exclude pets with approved adoption
                    })
                    ->latest()
                    ->get();

        return view('admin.postapproved', compact('posts'));
    }
}
