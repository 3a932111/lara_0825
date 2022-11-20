<?php

namespace App\Models;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table='post';
    protected $fillable=[
        'title',
        'content',
        'is_feature'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
