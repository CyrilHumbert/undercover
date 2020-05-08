<?php

namespace App\Models;

use App\Models\Base\UsersRoom as BaseUsersRoom;

class UsersRoom extends BaseUsersRoom
{
	protected $fillable = [
		'user_id',
		'room_id'
	];
}
