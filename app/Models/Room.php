<?php

namespace App\Models;

use App\Models\Base\Room as BaseRoom;

class Room extends BaseRoom
{
	protected $fillable = [
		'number_players',
		'number_turns',
		'link_code',
		'creator_id'
	];
}
