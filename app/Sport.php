<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Sport
 *
 * @property int $id
 * @property string $sport_nice Abbreviation of Sport
 * @property string $sport_key Full Name Of Sport - Must Be Present in the-odd-api
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sport query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sport whereSportKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sport whereSportNice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sport whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Sport extends Model
{
    //
}
