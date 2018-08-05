<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Advert extends Model
{
    protected $fillable = ['title', 'description'];

    /**
     * Get the user that owns the advert
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The categories that belong to the advert
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Get all urgent adverts
     */
    public function scopeUrgent($query)
    {
        return $query->where('urgent', 1);
    }

    /**
     * Get all published adverts
     */
    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    /**
     * Get all non published adverts
     */
    public function scopeUnPublished($query)
    {
        return $query->where('published', 0);
    }


    /**
     * @param array $categories
     * Add categories to the advert
     */
    public function addCategories($categories = [])
    {
        $this->categories()->attach($categories);
    }

    /**
     * Add the user who create the advert
     */
    public function addUser($userId)
    {
        $this->user()->associate($userId);
    }

    /**
     * Save the advert
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = null;

        if (!is_null($image)) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/adverts');
            $image->move($destinationPath, $imageName);
        }

        if ($request->input('action') == 'save_as_draft') {
            $this->published = false;
        }


        $categories = $request->input('categories');
        $title = $request->input('title');
        $description = $request->input('description');
        $urgent = ($request->input('urgent') == "on") ? true : false;

        $this->title = $title;
        $this->description = $description;
        $this->image = $imageName;
        $this->urgent = $urgent;
        $this->addUser(auth()->id());

        $this->save();
        $this->addCategories($categories);
    }

    /**
     * Edit the advert
     */
    public function edit(Request $request)
    {
        $image = $request->file('image');
        $current_image = $request->input('current_image');

        if (!is_null($image)) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/adverts');
            $image->move($destinationPath, $imageName);
            $this->image = $imageName ;


            if (!is_null($current_image)) {
                $imagePath = public_path('/img/adverts/'.$current_image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }

            }


        }


        $categories = $request->input('categories');
        $title = $request->input('title');
        $description = $request->input('description');
        $urgent = ($request->input('urgent') == "on") ? true : false;

        $this->urgent = $urgent;

        $this->update([
            'title' => $title,
            'description' => $description
        ]);


        $this->categories()->detach();
        $this->categories()->attach($categories);
    }

    /**
     * Delete the advert
     */
    public function remove()
    {
        $this->categories()->detach();
        $this->delete();

        $imagePath = public_path('/img/adverts/'.$this->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
    }


}
