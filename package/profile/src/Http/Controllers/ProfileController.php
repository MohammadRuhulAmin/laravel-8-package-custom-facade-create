<?php 


namespace TeamBravo\Profile\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ProfileController extends Controller{

    public function index(){
        \FriendInfo_List::FriendInfo();
        echo "this is from Controller! ";

    }

}