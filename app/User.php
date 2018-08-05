<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   /** public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }**/

    /**
     * Get the company managed by the user
     */
    public function company()
    {
        return $this->hasOne(Company::class);
    }

    /**
     * Get all adverts posted by the user
     */
    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    /**
     * The categories that belong to the user
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Get the user's role
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Associate this user with its verification token
     */
    public function verifyUser()
    {
        return $this->hasOne(VerifyUser::class);
    }



}
