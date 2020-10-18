<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class JabatanPengurus
 * @package App\Models
 * @version October 18, 2020, 12:49 pm UTC
 *
 * @property string $nama
 */
class JabatanPengurus extends Model
{

    public $table = 'jabatan_penguruses';
    



    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];

    
}
