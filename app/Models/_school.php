<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _school extends Model
{
    use HasFactory;
    public $tuble="_school";
    protected $fillable=[
        'id',
        'name',
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
    //الربط
    public function student(){
        return $this->hasMany(Students::class,'school_id');
    }
}
