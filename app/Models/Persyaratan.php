<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Persyaratan",
 *      required={},
 *      @SWG\Property(
 *          property="persyaratan_id",
 *          description="persyaratan_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_mahasiswa",
 *          description="id_mahasiswa",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_jurusan",
 *          description="id_jurusan",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nama_berkas",
 *          description="nama_berkas",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ketersediaan",
 *          description="ketersediaan",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Persyaratan extends Model
{

    public $table = 'tbl_persyaratan';
    

	public function jurusan() {
			return $this->belongsTo('App\Models\Jurusan', 'jurusan_id');
		}

		public function mahasiswa() {
			return $this->belongsTo('App\Models\Mahasiswa', 'mahasiswa_id');
		}
	
	public $timestamps = false;

    protected $primaryKey = 'persyaratan_id';

    public $fillable = [
        'id_mahasiswa',
        'id_jurusan',
        'nama_berkas',
        'ketersediaan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'persyaratan_id' => 'integer',
        'id_mahasiswa' => 'integer',
        'id_jurusan' => 'integer',
        'nama_berkas' => 'string',
        'ketersediaan' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
