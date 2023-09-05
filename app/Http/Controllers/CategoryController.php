<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Factories\Categories\CategoryFactory;

class CategoryController extends Controller
{
    function __construct(CategoryFactory $Category){
        
        $this->model = $Category::index();
     
        
    }
    public function index()
    {
        $categories = $this->model->getAll();
           
            
           
            
        return view('welcome', compact('categories'));
    }

    public function sub_category($id)
	{
        
      
		if (request()->ajax()) {

            $sub_categories =  $this->model->sub_category($id);     
            

            return view('load_customer_category',compact("sub_categories"));
           
	
        }
	}
	
	public function sub_sub_category($id)
	{
		if (request()->ajax()) {

            $sub_categories =  $this->model->sub_category($id);          
            

            return view('load_market_segment',compact("sub_categories"));
           
        }
	}
}
