<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property bool $is_guest
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Room[] $rooms
 *
 * @package App\Models\Base
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'is_guest' => 'bool'
	];

	protected $dates = [
		'email_verified_at'
	];

	public function rooms()
	{
		return $this->hasMany(Room::class, 'creator_id');
	}
}
