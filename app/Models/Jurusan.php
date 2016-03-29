<?php

namespace App\Models;

use Eloquent as Model;

	/**
	 * @SWG\Definition(
	 *      definition="Jurusan",
	 *      required={},
	 *      @SWG\Property(
	 *          property="jurusan_id",
	 *          description="jurusan_id",
	 *          type="integer",
	 *          format="int32"
	 *      ),
	 *      @SWG\Property(
	 *          property="nama_jurusan",
	 *          description="nama_jurusan",
	 *          type="string"
	 *      ),
	 *      @SWG\Property(
	 *          property="tahun_ajaran",
	 *          description="tahun_ajaran",
	 *          type="string"
	 *      )
	 * )
	 */
	class Jurusan extends Model
	{
		
		
		public $table = 'tbl_jurusan';
		
		public $timestamps = false;

		protected $primaryKey = 'jurusan_id';

		public $fillable = [
			'nama_jurusan',
			'tahun_ajaran'
		];

			public function mahasiswa() {
			return $this->hasMany('App\Models\Mahasiswa');
		}

		public function persyaratan() {
			return $this->hasMany('App\Models\Persyaratan');
		}

		public function scopeDropdownKelas($query) {
			$data = array();
			$eselon = $query->select(array('jurusan_id', 'nama_jurusan'))->get();
			if (count($eselon) > 0) {
				foreach ($eselon as $ese) {
					$data[] = array('id' => $ese->jurusan_id, 'label' => $ese->nama_jurusan);
				}
			}
			return $data;
		}
		
		
		
		/**
		 * The attributes that should be casted to native types.
		 *
		 * @var array
		 */
		protected $casts = [
			'jurusan_id' => 'integer',
			'nama_jurusan' => 'string',
			'tahun_ajaran' => 'string'
		];

		/**
		 * Validation rules
		 *
		 * @var array
		 */
		public static $rules = [
			
		];
	}
