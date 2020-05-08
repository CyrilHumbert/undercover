<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

            $new_room->save();

            return response()->json(['room_link' => $new_room->link_code]);
        } else {
            return response()->json(['error' => 'impossible']);
        }
    }

    public function roomRedirect(Request $request) {
        $room = Room::where('link_code', $request->room_link_code)->first();

        $data = (object) ['creator_id' => 2];

        if($room->is_waiting === true) {
            return view('pages/rooms-waiting')->with('data', $data);
        } else {

        }
    }
}
