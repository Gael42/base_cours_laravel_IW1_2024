<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_employe
 * @property int $id_personne
 * @property int $id_fonction
 */
class Employes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employes';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_employe';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_personne', 'id_fonction'
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
        'id_employe' => 'int', 'id_personne' => 'int', 'id_fonction' => 'int'
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
