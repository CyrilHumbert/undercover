<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class RoomPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create() {
        if(Auth::guest()) {
            return Response::deny('Tu dois être connecté pour créer une room');
        } else {
            return Response::allow();
        }
        /*return !Auth::guest()
            ? Response::allow()
            : Response::deny('Tu dois être connecté pour créer une room');*/
    }
}
