<?php

namespace App\Http\controllers;

class TestingController extends controller
{
    function hallo($nama) {
        return view("hallo") 
            ->with("nama",$nama)
            ->with("mk","web lanjut")
            ->with("Agama","islam");
            
    }
    
    function nama() {
        return view ("Nama");
    }
}