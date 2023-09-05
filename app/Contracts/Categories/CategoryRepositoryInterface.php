<?php
namespace App\Contracts\Categories;

interface CategoryRepositoryInterface
{

	public function getAll();

    public function sub_category($id);

}