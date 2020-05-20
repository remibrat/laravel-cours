<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $content
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';

	protected $fillable = [
		'content'
	];
}
