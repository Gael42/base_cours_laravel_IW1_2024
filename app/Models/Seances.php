<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $id_film
 * @property int      $id_salle
 * @property int      $id_personne_ouvreur
 * @property int      $id_personne_technicien
 * @property int      $id_personne_menage
 * @property DateTime $debut_seance
 * @property DateTime $fin_seance
 */
class Seances extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'seances';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_film', 'id_salle', 'id_personne_ouvreur', 'id_personne_technicien', 'id_personne_menage', 'debut_seance', 'fin_seance'
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
        'id' => 'int', 'id_film' => 'int', 'id_salle' => 'int', 'id_personne_ouvreur' => 'int', 'id_personne_technicien' => 'int', 'id_personne_menage' => 'int', 'debut_seance' => 'datetime', 'fin_seance' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'debut_seance', 'fin_seance'
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
