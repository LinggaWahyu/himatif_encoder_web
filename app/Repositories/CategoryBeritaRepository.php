<?php

namespace App\Repositories;

use App\Models\CategoryBerita;
use App\Repositories\BaseRepository;

/**
 * Class CategoryBeritaRepository
 * @package App\Repositories
 * @version October 18, 2020, 2:46 pm UTC
*/

class CategoryBeritaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return CategoryBerita::class;
    }
}
