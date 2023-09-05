<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'category_name',
        'parent_id',
        
    ];
   
    public function childrenCategories()
{
    return $this->hasMany(category::class,'parent_id','id');
}
}
