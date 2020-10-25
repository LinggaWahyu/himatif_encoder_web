<?php

namespace App\Repositories;

use App\Models\GaleriUmum;
use App\Repositories\BaseRepository;

/**
 * Class GaleriUmumRepository
 * @package App\Repositories
 * @version October 21, 2020, 1:58 pm UTC
*/

class GaleriUmumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'photo',
        'title'
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
        return GaleriUmum::class;
    }
}
