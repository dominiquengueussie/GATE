<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function delete()

    {
        // UTILISATION DES GATES DANS LES CONTROLLERS

        if (Gate::allows('isAdmin')) {

            dd('Admin allowed');
        } else {

            dd('You are not Admin');
        }

        // DEUXIEME METHODE  AVEC DENIES

        /*      public function delete()

    {

        if (Gate::denies('isAdmin')) {

            dd('You are not admin');
        } else {

            dd('Admin allowed');
        }
    } 
    
    // TROISIEME METHODE  AVEC AUTHORIZE

    public function delete()

{

    $this->authorize('isAdmin');

}

// QUATRIEME METHODE  AVEC AUTHORIZE

public function delete()

{

    $this->authorize('isUser');

}
    
    */
    }
}
