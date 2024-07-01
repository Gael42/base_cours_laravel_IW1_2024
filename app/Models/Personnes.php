<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id_personne
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $adresse
 * @property string $cpostal
 * @property string $ville
 * @property string $pays
 * @property Date   $date_naissance
 */
class Personnes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personnes';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_personne';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'date_naissance', 'email', 'adresse', 'cpostal', 'ville', 'pays'
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
        'id_personne' => 'int', 'nom' => 'string', 'prenom' => 'string', 'date_naissance' => 'date', 'email' => 'string', 'adresse' => 'string', 'cpostal' => 'string', 'ville' => 'string', 'pays' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_naissance'
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
