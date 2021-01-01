<?php 


namespace TeamBravo\Profile\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ProfileController extends Controller{

    public function __construct()
    {

        // Niddleware_x is just created by command
        //registered inside the karnel
        //and invoking inside constructor
        $this->middleware('Middleware_x');
    }
    public function index(){
        \FriendInfo_List::FriendInfo();
        echo "this is from Controller! ";

    }

}