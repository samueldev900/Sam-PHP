<?php 

namespace App\Controller;

class UserController extends Controller
{
    public function index(){
        return $this->view('home');
    }
}