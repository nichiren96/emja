<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['label', 'description'];

    /**
     * The users that belong to the category
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * The adverts that belong to the category
     */
    public function adverts()
    {
        return $this->belongsToMany(Advert::class);
    }
}
