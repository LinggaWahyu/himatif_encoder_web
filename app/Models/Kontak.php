<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Kontak
 * @package App\Models
 * @version October 21, 2020, 11:13 pm UTC
 *
 * @property string $nama_lengkap
 * @property string $email
 * @property string $isi
 */
class Kontak extends Model
{

    public $table = 'kontaks';
    



    public $fillable = [
        'nama_lengkap',
        'email',
        'isi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_lengkap' => 'string',
        'email' => 'string',
        'isi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_lengkap' => 'required',
        'email' => 'required',
        'isi' => 'required'
    ];

    
}
