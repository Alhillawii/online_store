<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [ 'name' , 'description' ,'image' , 'cat_id' , 'price'];
    
    public function  category(){
        return $this->belongsTo(Category::class);
     }
}
