<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Accounts extends  Authenticatable
{
    use Notifiable;
    use HasFactory;
    
    protected $table = 'accounts';
    protected $fillable = ['full_name', 'email', 'password','id_role'];

    public function role()
    {
        return $this->belongsTo(Roles::class, 'id_role');
    }
}

