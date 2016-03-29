<?php

namespace App\Repositories;

use App\Models\Persyaratan;
use InfyOm\Generator\Common\BaseRepository;

class PersyaratanRepository extends BaseRepository
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
        return Persyaratan::class;
    }
}
