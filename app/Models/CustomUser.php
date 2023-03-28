<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class CustomUser extends User
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $primaryKey = 'user_id';
    protected $dateFormat = 'G';
    public function podcasts(){
        return $this->hasMany(Podcast::class);
    }
    use HasFactory;
}
