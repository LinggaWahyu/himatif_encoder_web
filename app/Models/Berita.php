<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Berita
 * @package App\Models
 * @version October 18, 2020, 2:53 pm UTC
 *
 * @property string $title
 * @property string $description
 * @property string $thumbnail
 * @property integer $category_id
 * @property boolean $isshow
 */
class Berita extends Model
{

    public $table = 'beritas';
    



    public $fillable = [
        'title',
        'description',
        'thumbnail',
        'category_id',
        'isshow'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'thumbnail' => 'string',
        'category_id' => 'integer',
        'isshow' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'category_id' => 'required'
    ];

    
}
