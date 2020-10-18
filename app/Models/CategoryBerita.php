<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class CategoryBerita
 * @package App\Models
 * @version October 18, 2020, 2:46 pm UTC
 *
 * @property string $name
 */
class CategoryBerita extends Model
{

    public $table = 'category_beritas';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
