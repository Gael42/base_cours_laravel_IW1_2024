<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id_abonnement
 * @property int      $id_forfait
 * @property DateTime $debut
 */
class Abonnements extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'abonnements';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_abonnement';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_forfait', 'debut'
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
        'id_abonnement' => 'int', 'id_forfait' => 'int', 'debut' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'debut'
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
