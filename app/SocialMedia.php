<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SocialMedia
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialMedia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialMedia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialMedia query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialMedia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialMedia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialMedia whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialMedia whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialMedia whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SocialMedia extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    ];

}
