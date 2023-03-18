<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ShortUrl
 *
 * @property int $id
 * @property string $url_key
 * @property string $target_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ShortUrlFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereTargetUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereUrlKey($value)
 */
	class ShortUrl extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

