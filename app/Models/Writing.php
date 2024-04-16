<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writing extends Model
{
    use HasFactory;

    public function  getLink($user_id, $writing_id)
    {
        return route('authors.writing', ['author' => $user_id, 'id' => $writing_id]);
    }

    /**
     *Get a specific image for a writing or article 
     *Example , when a user views a writing , this code will show
     * the image for a writing
     *
     */
    public function getImage()
    {
        return asset('storage/'. $this->image);
    }
}