<?php namespace TeamBravo\Profile\Friend;

use Illuminate\Support\Facades\Facade;

class FriendFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'friendlist';
    }
}