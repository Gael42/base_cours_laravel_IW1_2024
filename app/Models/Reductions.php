<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id_reduction
 * @property int      $pourcentage_reduction
 * @property string   $nom
 * @property DateTime $date_debut
 * @property DateTime $date_fin
 */
class Reductions extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reductions';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_reduction';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'date_debut', 'date_fin', 'pourcentage_reduction'
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
        'id_reduction' => 'int', 'nom' => 'string', 'date_debut' => 'datetime', 'date_fin' => 'datetime', 'pourcentage_reduction' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_debut', 'date_fin'
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
