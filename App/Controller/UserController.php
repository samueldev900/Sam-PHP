<?php 

namespace App\Controller;

use App\Model\User;
class UserController extends Controller
{
    public function index(){
        
        /* return $this->view('home', [
            'title' => 'Home',
            'nome' => 'Renata Oliveira'
        ]); */

        return User::all();
    }

}