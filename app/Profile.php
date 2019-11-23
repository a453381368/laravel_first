<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/tzLdQjCFi1Rd2JAxYuuA7xAuxsJfIGdLBJhM8TDM.jpeg';
        return '/storage/'.$imagePath;
    }

    public function followers()
    {
        return $this -> belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
