<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Developer
 * @package App\Models
 * @version October 21, 2020, 2:05 pm UTC
 *
 * @property string $name
 * @property string $photo
 * @property string $role
 */
class Developer extends Model
{

    public $table = 'developers';
    



    public $fillable = [
        'name',
        'photo',
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'photo' => 'string',
        'role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'photo' => 'required',
        'role' => 'required'
    ];

    
}
