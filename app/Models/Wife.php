<?php

namespace App\Models;

use App\Models\Husband;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wife extends Model
{
    use HasFactory;

    protected $fillable=['name','husband_id'];

    public function husbands(){
        return $this->belongsTo(Husband::class,'husband_id','id');
    }
}
