<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
  
  public function view()
  {
    return view('catalog.categories.view');
  }

  /**
   * Show the Categories listing Page
   * @Get("/categories/create")
   */
  public function create()
  {
    return view('catalog.categories.create');
  }


}
