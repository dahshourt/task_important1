<?php

namespace App\Http\Repository\Categories;
use App\Contracts\Categories\CategoryRepositoryInterface;
use App\Models\category;



class CategoreyRepository implements CategoryRepositoryInterface
{

    
    public function getAll()
    {
        
        return category::where('parent_id',0)->get();
    }

    public function sub_category($id)
    {
        return category::where('parent_id',$id)->get();  
    }

    

    
   

  
}