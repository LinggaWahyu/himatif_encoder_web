<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class GaleriKomunitas
 * @package App\Models
 * @version October 18, 2020, 2:31 pm UTC
 *
 * @property string $photo
 * @property integer $komunitas_id
 */
class GaleriKomunitas extends Model
{

    public $table = 'galeri_komunitas';




    public $fillable = [
        'photo',
        'komunitas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'photo' => 'string',
        'komunitas_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'photo' => 'required',
        'komunitas_id' => 'required'
    ];

    public function komunitas() {
        return $this->hasOne(Komunitas::class, 'id', 'komunitas_id');
    }
}
