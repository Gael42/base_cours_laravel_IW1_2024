<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $id_fonction
 * @property string  $nom
 * @property string  $salaire
 * @property boolean $cadre
 */
class Fonctions extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fonctions';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_fonction';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'salaire', 'cadre'
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
        'id_fonction' => 'int', 'nom' => 'string', 'salaire' => 'string', 'cadre' => 'boolean'
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
