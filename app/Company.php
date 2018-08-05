<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Company extends Model
{
    protected $fillable = ['name', 'logo', 'slogan', 'description', 'address', 'postal_code', 'city'];

    /**
     * Get the user record associated with the company
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Save the company
     */
    public function store(Request $request)
    {

        if ($request->file('logo')) {
            $logo = $request->file('logo');
            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = 'logo' . time() . '.' . $logo->getClientOriginalExtension();
            // save to storage/app/photos as the new $filename
            $logo->storeAs('logo', $filename);

            $this->logo = $filename;
        }

        $this->name = $request->input('name');
        $this->slogan = $request->input('slogan');
        $this->description = $request->input('description');
        $this->address = $request->input('address');
        $this->postal_code = $request->input('postal_code');
        $this->city = $request->input('city');
        $this->user()->associate(auth()->id());

        $this->save();
    }

    /**
     * Edit the company
     */
    public function edit(Request $request)
    {
        if ($request->file('logo')) {

            $filename = $this->logo;
            $logoPath = storage_path('app/public/logo/' . $filename);

            if (File::exists($logoPath)) {
                File::delete($logoPath);

                $logo = $request->file('logo');
                // generate a new filename. getClientOriginalExtension() for the file extension
                $filename = 'logo' . time() . '.' . $logo->getClientOriginalExtension();
                // save to storage/app/photos as the new $filename
                $logo->storeAs('logo', $filename);

                $this->logo = $filename;

            }
        }

        $this->update([
            'name' => $request->input('name'),
            'slogan' => $request->input('slogan'),
            'description' =>  $request->input('description'),
            'address' => $request->input('address'),
            'postal_code' => $request->input('postal_code'),
            'city' => $request->input('city'),
        ]);
    }
}
