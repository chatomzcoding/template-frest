<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    use HasFactory;

    protected $table = 'gadget'; // nama table

    protected $guarded = []; // manggil otomatis save
}
