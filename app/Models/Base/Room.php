<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 * 
 * @property int $id
 * @property int $number_players
 * @property int $number_turns
 * @property string $link_code
 * @property int $creator_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property bool $is_waiting
 * 
 * @property User $user
 *
 * @package App\Models\Base
 */
class Room extends Model
{
	protected $table = 'rooms';

	protected $casts = [
		'number_players' => 'int',
		'number_turns' => 'int',
		'creator_id' => 'int',
		'is_waiting' => 'bool'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'creator_id');
	}
}
