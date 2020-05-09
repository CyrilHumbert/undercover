<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\UsersRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    public function createRoom(Request $request) {
        $user = Auth::user();

        if(!Auth::guest()) {
            $new_room = new Room();

            $new_room->number_players = $request->numberPlayersInputName;
            $new_room->number_turns = $request->numbersTurnsInputName;
            $new_room->link_code = Str::random();
            $new_room->creator_id = $user->id;

            $new_room->save();

            $users_rooms = new UsersRoom();

            $users_rooms->room_id =  $new_room->id;
            $users_rooms->user_id = $user->id;

            $users_rooms->save();

            return redirect('/room/' . $new_room->link_code);
            //return response()->json(['room_link' => $new_room->link_code]);
        } else {
            return Redirect::back()->withErrors(['error' => 'Vous devez être connecté pour pouvoir créer une room']);
        }
    }

    public function roomRedirect(Request $request) {
        $room = Room::where('link_code', $request->room_link_code)->first();

        $user = User::find($room->creator_id);

        if($room->is_waiting === true) {
            return view('pages/rooms-waiting')->with('creator', $user)
                ->with('room', $room->number_players);
        } else {

        }
    }
}
