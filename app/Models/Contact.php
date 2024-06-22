<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function userInstance()
    {
        return $this->belongsTo(User::class, "user");
    }

    public function contactInstance()
    {
        return $this->belongsTo(User::class, "contact");
    }
}
