<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class CreateuserController extends Controller
{
    public function index()
    {
        return view('auth.registrasi');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns|unique:admins',
            'password' => 'required|min:8|max:225',
            'no_hp' => 'required|min:10|max:14|unique:admins',
            'company' => 'required',
            'alamat' => 'required',
        ]);

        $data = Admin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_hp' => $request->no_hp,
            'company' => $request->company,
            'alamat' => $request->alamat,
            'role' => 'user',
        ]);

        return redirect()->route('admin.login')->with('success', 'Registrasi berhasil');
    }

    public function edit($id)
    {
        $data = Admin::find($id);
        return view('admin.admin1.edituser', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:225',
            'no_hp' => 'required|min:10|max:14|regex:/^08[0-9]{9,11}$/',
            'company' => 'required',
            'alamat' => 'required',
        ]);

        Admin::find($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_hp' => $request->no_hp,
            'company' => $request->company,
            'alamat' => $request->alamat,
            'role' => 'user',
        ]);

        return redirect()->route('dashboardUser')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        Admin::find($id)->delete();
        return redirect()->route('admin')->with('success', 'Data berhasil dihapus');
    }
}
