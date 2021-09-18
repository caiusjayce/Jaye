<?php

namespace App\Repositories;

use App\Models\MPLteams;
use App\Repositories\BaseRepository;

/**
 * Class MPLteamsRepository
 * @package App\Repositories
 * @version September 18, 2021, 3:06 am UTC
*/

class MPLteamsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'yourName',
        'Birthdate',
        'Address',
        'teamName',
        'teamRole'
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
        return MPLteams::class;
    }
}
