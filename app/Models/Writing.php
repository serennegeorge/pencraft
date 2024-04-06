<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writing extends Model
{
    use HasFactory;

    public function getLink($user_id, $writing_id)
    {
        return route('authors.writing', ['author' => $user_id, 'id' => $writing_id]);
    }

    public function getImage()
    {
        return asset('storage/'. $this->image);
    }
}
