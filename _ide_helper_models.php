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
 * App\Models\Activite
 *
 * @property int $id
 * @property string $libelle
 * @property int $budget
 * @property string $date
 * @property string $rapport
 * @property int $statut
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Activite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activite query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activite whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activite whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activite whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activite whereRapport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activite whereStatut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activite whereUpdatedAt($value)
 */
	class Activite extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Projet
 *
 * @property int $id
 * @property string $code
 * @property string $nom
 * @property string $description
 * @property int $budget
 * @property string $date_debut
 * @property string $date_fin
 * @property int $statut
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Projet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Projet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Projet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereDateDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereDateFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereStatut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereUpdatedAt($value)
 */
	class Projet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Zone
 *
 * @property int $id
 * @property string $libelle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Zone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereUpdatedAt($value)
 */
	class Zone extends \Eloquent {}
}

