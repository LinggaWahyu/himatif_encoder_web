<?php

namespace App\Repositories;

use App\Models\Komunitas;
use App\Repositories\BaseRepository;

/**
 * Class KomunitasRepository
 * @package App\Repositories
 * @version October 18, 2020, 2:21 pm UTC
*/

class KomunitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type',
        'description',
        'image',
        'instagram_link',
        'facebook_link',
        'youtube_link'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Komunitas::class;
    }
}
