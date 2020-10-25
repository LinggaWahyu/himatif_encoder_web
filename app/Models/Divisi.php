<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Divisi
 * @package App\Models
 * @version October 18, 2020, 12:44 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $photo
 */
class Divisi extends Model
{

    public $table = 'divisis';


    public $fillable = [
        'name',
        'description',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    public function scopeDescriptionCut()
    {
        $limit = 30 - mb_strlen('...'); // Take into account $end string into the limit
        $valuelen = mb_strlen($this->description);
        return $limit < $valuelen ? mb_substr($this->description, 0, mb_strrpos($this->description, ' ', $limit -
                $valuelen)) . '...' : $this->description;
    }

}
