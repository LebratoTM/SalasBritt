<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table = 'register';

    protected $fillable = [
        'id',
        'username',
        'email',
        'password',
        'register_method',
        'status',
        'timestamp'
    ];

    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value){
        $this->attribute['password'] = bcrypt($value);
    }


}
