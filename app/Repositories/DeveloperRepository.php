<?php

namespace App\Repositories;

use App\Models\Developer;
use App\Repositories\BaseRepository;

/**
 * Class DeveloperRepository
 * @package App\Repositories
 * @version October 21, 2020, 2:05 pm UTC
*/

class DeveloperRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'photo',
        'role'
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
        return Developer::class;
    }
}
