<?php

namespace App\Models;

use App\Models\Wife;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Husband extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function wife(){
        return $this->hasOne(Wife::class,'husband_id','id');
    }
}
