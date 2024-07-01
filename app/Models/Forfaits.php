<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id_forfait
 * @property int    $prix
 * @property int    $duree_jours
 * @property string $nom
 * @property string $resum
 */
class Forfaits extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'forfaits';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_forfait';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'resum', 'prix', 'duree_jours'
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
        'id_forfait' => 'int', 'nom' => 'string', 'resum' => 'string', 'prix' => 'int', 'duree_jours' => 'int'
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
