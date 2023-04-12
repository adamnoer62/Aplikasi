<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Fakultas; // added
use App\Providers\RouteServiceProvider;
use App\Models\Studi;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterperusahaanController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $studi = Studi::all();
        $fakultas = Fakultas::all();
        return view('auth.registerperushaan', compact('fakultas', 'studi'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
            'gendre' => ['required', 'string', 'max:255'], // corrected typo 'gendre' to 'gender'
            'no_tlp' => ['required', 'string', 'max:255'],
            'tgl_lahir' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(Request $request)
{
   $user = User::create([
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'password' => Hash::make($request->input('password')),
    'role' => $request->input('role'),
    'gendre' => $request->input('gendre'),
    'no_tlp' => $request->input('no_tlp'),
    'tgl_lahir' => $request->input('tgl_lahir'),
]);

return redirect('/');

}

}
