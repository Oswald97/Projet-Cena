<?php

namespace App\Http\Controllers\Auth;

use App\AdminArrondissement;
use App\AdminBureau;
use App\AdminCena;
use App\AdminCentre;
use App\Code;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:60',
            'prenom' => 'required|string|max:60',
            'code'=>'required|string|min:15',
            /*'telephone' => 'required|string|max:12',*/
            'email' => 'required|string|email|max:150|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $code=Code::whereCode($request->code)->first();
        $role=$code->role_id;
         $user=User::create([
            'nom' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone'=>$request->telephone,
            'password' => Hash::make($request->password),
        ]);
         $user->roles()->attach($role);

         if ($role==2) {
             AdminBureau::create([
                'user_id'=>$user->id,
                'bureau_vote_id'=>$code->bureau_vote_id,
             ]);
         }
         elseif ($role==1) {
            //dd($code->centre_vote_id);
            AdminCentre::create([
                'user_id'=>$user->id,
                'centre_vote_id'=>$code->centre_vote_id,
             ]);
        }
        elseif ($role==3) {
            AdminArrondissement::create([
                'user_id'=>$user->id,
                'arrondissement_id'=>$code->arrondissement_id,
             ]);
        }
        else{
            AdminCena::create([
                'user_id'=>$user->id,
            ]);
        }
        $code->delete();
        return redirect('/home');
    }
}
