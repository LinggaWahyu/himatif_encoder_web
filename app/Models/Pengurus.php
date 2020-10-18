<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Pengurus
 * @package App\Models
 * @version October 18, 2020, 1:34 pm UTC
 *
 * @property string $nama
 * @property integer $jabatan_id
 * @property string $photo
 * @property integer $divisi_id
 */
class Pengurus extends Model
{

    public $table = 'penguruses';
    



    public $fillable = [
        'nama',
        'jabatan_id',
        'photo',
        'divisi_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'jabatan_id' => 'integer',
        'photo' => 'string',
        'divisi_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'jabatan_id' => 'required',
        'photo' => 'required',
        'divisi_id' => 'required'
    ];

    
}
