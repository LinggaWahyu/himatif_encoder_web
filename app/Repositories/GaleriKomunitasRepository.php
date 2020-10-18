<?php

namespace App\Repositories;

use App\Models\GaleriKomunitas;
use App\Repositories\BaseRepository;

/**
 * Class GaleriKomunitasRepository
 * @package App\Repositories
 * @version October 18, 2020, 2:31 pm UTC
*/

class GaleriKomunitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'photo',
        'komunitas_id'
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
        return GaleriKomunitas::class;
    }
}
