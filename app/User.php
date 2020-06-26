<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Reservation;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;



    public static function newUser($request) {
      return self::create([
        'username' => $request->username,
        'password' => Hash::make($request->password),
      ]);
    }

    public static function authenticate($request) {
      $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
          return redirect()->back()->with('fail', 'incorrect data');
        }
    }

    public static  function rooms($id){
      $reservations = Reservation::where('user_id', $id)->get();
      return $reservations; 
    }
}
