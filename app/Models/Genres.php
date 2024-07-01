<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int    $id_genre
 * @property string $nom
 */
class Genres extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'genres';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_genre';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom'
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
        'id_genre' => 'int', 'nom' => 'string'
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

    /**
     * Get the films for the genre.
     */
    public function films(): HasMany
    {
        return $this->hasMany(Film::class, 'id_genre');
    }
}
