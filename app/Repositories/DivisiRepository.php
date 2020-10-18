<?php

namespace App\Repositories;

use App\Models\Divisi;
use App\Repositories\BaseRepository;

/**
 * Class DivisiRepository
 * @package App\Repositories
 * @version October 18, 2020, 12:44 pm UTC
*/

class DivisiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'photo'
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
        return Divisi::class;
    }
}
