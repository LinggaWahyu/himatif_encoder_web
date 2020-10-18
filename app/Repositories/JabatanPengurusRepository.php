<?php

namespace App\Repositories;

use App\Models\JabatanPengurus;
use App\Repositories\BaseRepository;

/**
 * Class JabatanPengurusRepository
 * @package App\Repositories
 * @version October 18, 2020, 12:49 pm UTC
*/

class JabatanPengurusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
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
        return JabatanPengurus::class;
    }
}
