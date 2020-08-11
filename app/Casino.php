<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Casino
 *
 * @property int $id
 * @property string $nice
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Casino newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Casino newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Casino query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Casino whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Casino whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Casino whereNice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Casino wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Casino whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Casino extends Model
{
	 protected $fillable = ['nice', 'path'];
}
