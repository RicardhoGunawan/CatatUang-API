<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWalletType extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'icon',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }
}
