<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Sexe;
use App\Models\Produit;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'prenom',
    //     'dateNaiss',
    //     'sexe',
    //     'cni',
    //     'prof',
    //     'phone',
    //     'adresse',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
        // public static function boot()
        // {
    
        //     parent::boot();
    
        //     self::creating(function ($user) {
    
        //         $user->genre()->associate(request()->sexe);
        //     });
        // }

        // public function genre()
        // {
    
        //     return $this->belongsTo(Sexe::class);
        // }
    // public function produits()
    // {
    //     return $this->hasMany(Produit::class);
    // }

}
