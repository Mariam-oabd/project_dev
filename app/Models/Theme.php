<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'description', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'theme_id');
    }
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
