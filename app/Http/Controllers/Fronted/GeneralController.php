<?php

namespace App\Http\Controllers\Fronted;

use App\Interfaces\UserInterface;
use App\Models\Media;
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
        $media=Media::where('status',1)->where('image','!=',null)->paginate(36);
        $title='المركز الاعلامي';
        $folder='Media';
        return view('Fronted.GeneralPages.media',compact('media','title','folder'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function volunteer(){
        return view('Fronted.GeneralPages.volunteer');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact_us(){
        return view('Fronted.GeneralPages.contact_us');
    }

}
