<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    //필수 설정 3가지 timestamp는 public
    protected $table = "sample";
    public $timestamps = false;
    protected $fillable = [
        "name",
        'description',
        'votes'
    ];
}
