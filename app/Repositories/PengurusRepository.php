<?php

namespace App\Repositories;

use App\Models\Pengurus;
use App\Repositories\BaseRepository;

/**
 * Class PengurusRepository
 * @package App\Repositories
 * @version October 18, 2020, 1:34 pm UTC
*/

class PengurusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'jabatan_id',
        'photo',
        'divisi_id'
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
        return Pengurus::class;
    }
}
