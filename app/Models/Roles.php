<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accounts;
class Roles extends Model
{
    use HasFactory;
    protected $table = "roles";
    public function accounts()
    {
        return $this->hasMany(Accounts::class, 'id_role');
    }
}
