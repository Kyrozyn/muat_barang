<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'username';
    protected $keyType = 'string';
}
