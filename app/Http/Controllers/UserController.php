<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CustomUser;
use Database\Factories\CustomUserFactory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $customUser = CustomUserFactory::new()->create();
    }
    //
}
