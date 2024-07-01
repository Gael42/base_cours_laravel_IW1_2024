<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id_historique
 * @property int      $id_membre
 * @property int      $id_seance
 * @property DateTime $date
 */
class HistoriqueMembre extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'historique_membre';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_historique';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_membre', 'id_seance', 'date'
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
        'id_historique' => 'int', 'id_membre' => 'int', 'id_seance' => 'int', 'date' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date'
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
