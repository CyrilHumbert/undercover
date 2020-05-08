<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersRoom
 * 
 * @property int $id
 * @property int $user_id
 * @property int $room_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models\Base
 */
class UsersRoom extends Model
{
	protected $table = 'users_rooms';

	protected $casts = [
		'user_id' => 'int',
		'room_id' => 'int'
	];
}
