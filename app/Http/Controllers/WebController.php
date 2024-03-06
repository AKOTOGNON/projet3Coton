<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class WebController extends Controller
{

       public function  blogsecretaire()
    {
        return view(" blogsecretaire");

    }
      public function  blogministere()
    {
        return view(" blogministere");

    }

      public function  blogindustriel()
    {
        return view(" blogindustriel");

    }

     public function  blogdetails()
    {
        return view(" blogdetails");

    }

    public function  contact()
    {
        return view(" contact");

    }

       public function  dashboard()
    {
        return view(" dashboard");

    }







}
