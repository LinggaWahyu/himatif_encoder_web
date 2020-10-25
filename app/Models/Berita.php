<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Support\Str;

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
        'slug',
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

    protected static function booted()
    {
        // if prod w/ slug is exist then add random str
        $fn = function ($slug) {
            $slug = preg_replace('/\s+/', '-', $slug);
            $exist = self::where('slug', $slug)->first();
            if ($exist) {
                $slug = $slug . "-" . Str::random(4);
            }
            return $slug;
        };

        static::creating(function ($berita) use ($fn) {
            $berita->slug = $fn($berita->title);
        });
    }

    public function scopeCreatedAtDateFormat()
    {
        return date('d F Y', strtotime($this->created_at));
    }

    public function scopeDescriptionCut()
    {
        $limit = 100 - mb_strlen('...'); // Take into account $end string into the limit
        $valuelen = mb_strlen($this->description);
        return $limit < $valuelen ? mb_substr($this->description, 0, mb_strrpos($this->description, ' ', $limit -
                $valuelen)) . '...' : $this->description;
    }
}
