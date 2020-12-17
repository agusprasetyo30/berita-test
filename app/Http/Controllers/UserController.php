<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Digunakan untuk menampung data pengguna yang akan di tampilkan ke view
        // di halaman hanya menampilkan 5 pengguna
        $users = User::paginate(5);

        return view('admin.pengguna.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Untuk validasi pengguna
        $this->validate($request, [
            'nama' => ['required', 'string', 'max:20'], // Untuk validasi nama, maksimal 20
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // Untuk valiasi email, email tidak boleh sama dengan yg lain
            'password' => ['required', 'string', 'min:5', 'confirmed'], //embuat validasi password beserta konfirmasi password 
        ]);

        $user = new User();

        $user->name = $request->get('nama');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));

        $user->save();

        return redirect()
            ->route('admin.pengguna.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // melakukan pencarian kategori berdasarkan ID
        $user = User::where('id', $id)->first();

        return view('admin.pengguna.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // membuat variabel yang fungsinya untuk menampung object yang dicari
        $user = User::where('id', $id)->firstOrFail();
        
        // menampung inputan data
        $user->name = $request->get('nama');

        // cek inputan password
        if ($request->get('password') != '') {
            $user->password = Hash::make($request->get('password'));
        }

        $user->save();

        // Kembali ke data index kategori
        return redirect()
            ->route('admin.pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
