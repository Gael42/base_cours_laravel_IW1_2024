<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id_salle
 * @property int    $numero_salle
 * @property int    $etage_salle
 * @property int    $places
 * @property string $nom_salle
 */
class Salles extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'salles';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_salle';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero_salle', 'nom_salle', 'etage_salle', 'places'
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
        'id_salle' => 'int', 'numero_salle' => 'int', 'nom_salle' => 'string', 'etage_salle' => 'int', 'places' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
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
