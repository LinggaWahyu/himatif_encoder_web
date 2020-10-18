<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Komunitas
 * @package App\Models
 * @version October 18, 2020, 2:21 pm UTC
 *
 * @property string $name
 * @property string $type
 * @property string $description
 * @property string $image
 * @property string $instagram_link
 * @property string $facebook_link
 * @property string $youtube_link
 */
class Komunitas extends Model
{

    public $table = 'komunitas';
    



    public $fillable = [
        'name',
        'type',
        'description',
        'image',
        'instagram_link',
        'facebook_link',
        'youtube_link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'string',
        'description' => 'string',
        'image' => 'string',
        'instagram_link' => 'string',
        'facebook_link' => 'string',
        'youtube_link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'type' => 'required',
        'description' => 'required'
    ];

    
}
