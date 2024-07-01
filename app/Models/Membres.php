<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id_membre
 * @property int      $id_personne
 * @property int      $id_abonnement
 * @property DateTime $date_inscription
 * @property DateTime $debut_abonnement
 */
class Membres extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'membres';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_membre';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_personne', 'id_abonnement', 'date_inscription', 'debut_abonnement'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_membre' => 'int', 'id_personne' => 'int', 'id_abonnement' => 'int', 'date_inscription' => 'datetime', 'debut_abonnement' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_inscription', 'debut_abonnement'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
