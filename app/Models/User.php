<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'npm', 'username', 'first_name', 'last_name', 'email', 'password'
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class, 'user_npm', 'npm');
    }
}