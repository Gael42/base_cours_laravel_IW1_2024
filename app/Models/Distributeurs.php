<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id_distributeur
 * @property string $nom
 * @property string $telephone
 * @property string $adresse
 * @property string $cpostal
 * @property string $ville
 * @property string $pays
 */
class Distributeurs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'distributeurs';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_distributeur';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'telephone', 'adresse', 'cpostal', 'ville', 'pays'
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
        'id_distributeur' => 'int', 'nom' => 'string', 'telephone' => 'string', 'adresse' => 'string', 'cpostal' => 'string', 'ville' => 'string', 'pays' => 'string'
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
