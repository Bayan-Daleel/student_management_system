<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use function Termwind\renderUsing;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'active',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role(){
        return $this->hasOne('Role','id','role_id');
    }
    private function checkIfUserRole($need_role){
        return  (strtolower($need_role)==strtolower($this->role->name))? true :null;
    }

    public  function hasRole($roles){
        if (is_array($roles))
        {
            foreach ($roles as $need_role){
                if ($this->checkIfUserRole($need_role))
                {
                    return true;
                }
                else{
                    return $this->checkIfUserRole($roles);
                }
            }
            return false;
        }
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
