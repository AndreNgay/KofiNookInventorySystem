<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return view('auth.login');
        }

        $role = Auth::user()->role;
        $query = $request->input('query');
        
        if ($role === 'owner') {
            $users = User::where('first_name', 'LIKE', "%$query%")->orWhere('last_name', 'LIKE', "%$query%")->get();
            return view('owner.accounts', compact('users'));
        } elseif ($role === 'employee') {
            
        }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $username = Str::random(8);
        $password = Str::random(12);
    
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'role' => $request->role,
            'username' => $username,
            'password' => Hash::make($password),
        ]);
    
        return redirect()->route('account.index')->with('success', 'Account generated successfully. Username: ' . $username . ' Password: ' . $password . '. Please change password immediately');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Retrieve the user by ID
        $user = User::findOrFail($id);
    
        // Validate the input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'role' => 'required|in:employee,owner',
            'address' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:255',
            'emergency_contact' => 'nullable|string|max:255',
        ]);
    
        // Update the user
        $user->update($request->all());
    
        return redirect()->route('account.index')->with('success', 'Account updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('account.index')->with('success', 'Account deleted successfully.');
    }
}
