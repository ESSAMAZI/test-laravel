<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public $tuble="students";
    protected $fillable=[
        'name',
        'email',
        'school_id'

    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
    //الربط
    public function grade(){
        return $this->hasOne(grades::class,'id_student');
    }
}
