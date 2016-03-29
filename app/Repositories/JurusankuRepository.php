<?php

namespace App\Repositories;

use App\Models\Jurusanku;
use InfyOm\Generator\Common\BaseRepository;

class JurusankuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Jurusanku::class;
    }
}
