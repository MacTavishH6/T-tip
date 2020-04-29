<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function loginuser(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8'
        ]);
        
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();
        if($data && Hash::check($password,$data->password)){
            return 'berhasil!';
        }
        else{
            return redirect('/login')->with('error','Email atau Password salah!')->with(['email' => $email]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8|confirmed'
        ]);
        // dd($request->all());
        User::create([
            'nama' => $request->nama,                
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // User::create($request->all());

        return redirect('/login')->with('status','Yeay, berhasil terdaftar!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
