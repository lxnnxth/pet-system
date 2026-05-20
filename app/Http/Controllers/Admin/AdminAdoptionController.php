<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use Illuminate\Http\Request;

class AdminAdoptionController extends Controller
{
    public function index()
    {
        // Show all pending adoption requests
        $adoptions = Adoption::with('pet')->where('status', 'pending')->latest()->get();
        return view('admin.adoptionreview', compact('adoptions'));
    }

    public function approve($id)
    {
        $adoption = Adoption::with('pet')->findOrFail($id);
    
        // Approve the adoption
        $adoption->update(['status' => 'approved']);
    
        // JSON response for success
        return response()->json([
            'success' => true,
            'message' => 'Adoption approved successfully!'
        ]);
    }
    
    
    public function reject($id)
    {
        try {
            $adoption = Adoption::findOrFail($id);
            $adoption->update(['status' => 'rejected']);

            return response()->json([
                'success' => true,
                'message' => 'Adoption rejected successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
