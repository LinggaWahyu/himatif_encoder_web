<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class GaleriUmum
 * @package App\Models
 * @version October 21, 2020, 1:58 pm UTC
 *
 * @property string $photo
 * @property string $title
 */
class GaleriUmum extends Model
{

    public $table = 'galeri_umums';
    



    public $fillable = [
        'photo',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'photo' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'photo' => 'required',
        'title' => 'required'
    ];

    
}
