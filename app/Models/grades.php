<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;

    public $tuble="grades";
    protected $fillable=[
        'grade',
        'id_student'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
