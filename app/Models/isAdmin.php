<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class isAdmin extends Model
{
    use HasFactory;
    protected $fillable = ['mail', 'password'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
