<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'artist',
        'chordsKnowledge',
        'rythmKnowledge',
        'globalKnowledge',
        'tabs',
        'link',
        'user_id',
    ];


}

