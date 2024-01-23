<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('dashboard.data_petugas', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.data_petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            // Add more validation rules for other columns
        ]);
        // berfungsi untuk mengenkripsi
        $validatedData['password'] = Hash::make($validatedData['password']);
        // berfungsi untuk memvalidasi data detail user
        $validasiDetailUser = $request->validate([
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required'
        ]);
        // Create a new record using the validated data
        $data = User::create($validatedData);
        // memanggil id dari users dan disimpan di detailUser
        $dataid_user = $data->id;
        $detailUser = new DetailUser($validasiDetailUser);
        $detailUser->id_user = $dataid_user;
        $detailUser->save();


        // Flash a success message to the session
        return redirect('/data/petugas')->with('success', 'Record created successfully!');
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
        $data = User::findOrFail($id);
        return view('dashboard.data_petugas.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            // Add more validation rules for other columns
        ]);
        // berfungsi untuk memvalidasi data detail user
        $validasiDetailUser = $request->validate([
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required'
        ]);
        // Mencari record yang dritubah
        $data = User::findOrFail($id);
        // proses ubah data table user
        $data->update($validatedData);
        // mencari record yang dirubah di table detail user
        $detailUser = DetailUser::where('id_user', $id)->first();
        // Update data detail user
        $detailUser->update($validasiDetailUser);


        // Flash a success message to the session
        return redirect('/data/petugas')->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataDetail = DetailUser::where('id_user',$id);
        $dataDetail->delete();
        $data = User::findOrFail($id);
        $data->delete();
        return redirect('/data/petugas')->with('success', 'Record deleted successfully!');
        
    }
}
