<?php

namespace App\Http\Controllers\Fronted;

use App\Interfaces\UserInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Auth,Artisan,Hash,File,Crypt;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Controllers\Manage\EmailsController;

class GeneralController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function media (){
        return view('Fronted.GeneralPages.media');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function volunteer(){
        return view('Fronted.GeneralPages.volunteer');

    }

}
