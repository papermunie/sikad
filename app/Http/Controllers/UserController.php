<?php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'email_user' => 'required|email|max:50|unique:tbl_user',
            'password' => 'required',
            'foto_profil.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'role' => 'required|in:Ketua DKM,Bendahara,Warga Sekolah',
        ]);
    
        // Simpan gambar ke direktori
        if ($request->hasFile('foto_profil')) {
            $images = [];
            foreach ($request->file('foto_profil') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/foto_profil', $filename);
                $images[] = 'foto_profil/' . $filename;
            }
        }
    
        // Gabungkan foto_profil ke dalam validatedData sebelum menyimpan
        $validatedData['foto_profil'] = implode(',', $images);
    
        // Simpan user ke database
        User::create($validatedData);
    
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }
    

    public function edit($email_user)
    {
        $user = User::findOrFail($email_user);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $email_user)
    {
        // Validasi input
        $validatedData = $request->validate([
            'password' => 'required',
            'foto_profil' => 'required|max:225',
            'role' => 'required|in:Ketua DKM,Bendahara,Warga Sekolah',
        ]);

        $user = User::findOrFail($email_user);
        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy($email_user)
    {
        // Temukan data user berdasarkan email_user
        $user = User::where('email_user', $email_user)->first();
    
        // Periksa apakah user ditemukan
        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User not found');
        }
    
        // Hapus user
        $user->delete();
    
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
    
    public function show($email_user)
{
    $user = User::where('email_user', $email_user)->firstOrFail();
    return view('users.show', compact('user'));
}
}
?>