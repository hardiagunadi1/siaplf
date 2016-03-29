<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Mahasiswa",
 *      required={},
 *      @SWG\Property(
 *          property="mahasiswa_id",
 *          description="mahasiswa_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="jurusan_id",
 *          description="jurusan_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nama_mahasiswa",
 *          description="nama_mahasiswa",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tmp_lahir",
 *          description="tmp_lahir",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tgl_lahir",
 *          description="tgl_lahir",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="jenkel",
 *          description="jenkel",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="agama",
 *          description="agama",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ukuranjas",
 *          description="ukuranjas",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="s_kerja",
 *          description="s_kerja",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="s_nikah",
 *          description="s_nikah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="alamat",
 *          description="alamat",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="no_hp",
 *          description="no_hp",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nama_ortu",
 *          description="nama_ortu",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nama_suis",
 *          description="nama_suis",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="pendidikan_terakhir",
 *          description="pendidikan_terakhir",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="alamat_skolah",
 *          description="alamat_skolah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="persyaratan_id",
 *          description="persyaratan_id",
 *          type="string"
 *      )
 * )
 */
class Mahasiswa extends Model
{
    use SoftDeletes;

    public $table = 'tbl_mahasiswa';
    
 const CREATED_AT = 'created_at';
 const UPDATED_AT = 'updated_at';

	public function jurusan() {
        return $this->belongsTo('App\Models\Jurusan', 'jurusan_id');
    }

    public function persyaratan() {
        return $this->hasMany('App\Models\Persyaratan','mahasiswa_id');
    }

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'mahasiswa_id';

    public $fillable = [
        'jurusan_id',
        'nama_mahasiswa',
        'tmp_lahir',
        'tgl_lahir',
        'jenkel',
        'agama',
        'ukuranjas',
        's_kerja',
        's_nikah',
        'alamat',
        'no_hp',
        'nama_ortu',
        'nama_suis',
        'pendidikan_terakhir',
        'alamat_skolah',
        'persyaratan_id',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'mahasiswa_id' => 'integer',
        'jurusan_id' => 'integer',
        'nama_mahasiswa' => 'string',
        'tmp_lahir' => 'string',
        'tgl_lahir' => 'string',
        'jenkel' => 'string',
        'agama' => 'string',
        'ukuranjas' => 'string',
        's_kerja' => 'string',
        's_nikah' => 'string',
        'alamat' => 'string',
        'no_hp' => 'string',
        'nama_ortu' => 'string',
        'nama_suis' => 'string',
        'pendidikan_terakhir' => 'string',
        'alamat_skolah' => 'string',
        'persyaratan_id' => 'string',
        'deleted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
