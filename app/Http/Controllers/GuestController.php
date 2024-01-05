<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Menampilkan semua tamu
    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', compact('guests'));
    }

    // Menampilkan formulir tambah tamu
    public function create()
    {
        return view('guests.create');
    }

    // Menyimpan tamu baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        Guest::create($request->all());

        return redirect('/guests');
    }

    // Menampilkan detail tamu
    public function show(Guest $guest)
    {
        return view('guests.show', compact('guest'));
    }

    // Menampilkan formulir edit tamu
    public function edit(Guest $guest)
    {
        return view('guests.edit', compact('guest'));
    }

    // Menyimpan perubahan pada tamu
    public function update(Request $request, Guest $guest)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        $guest->update($request->all());

        return redirect('/guests');
    }

    // Menghapus tamu
    public function destroy(Guest $guest)
    {
        $guest->delete();

        return redirect('/guests');
    }
}

