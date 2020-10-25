<?php

namespace App\Repositories;

use App\Models\Kontak;
use App\Repositories\BaseRepository;

/**
 * Class KontakRepository
 * @package App\Repositories
 * @version October 21, 2020, 11:13 pm UTC
*/

class KontakRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_lengkap',
        'email',
        'isi'
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
        return Kontak::class;
    }
}
