<!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Basic Bootstrap 3.0 Responsive Table </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Jurusan</th>
													<th>Nama </th>
													<th>Tmp Lahir/tgl lahir</th>
													
													<th>Jenkel</th>
													<th>Agama</th>
													<th>Ukuranjas</th>
													<th>S Kerja</th>
													<!--th>S Nikah</th>
													<th>Alamat</th-->
													<th>No Hp</th>
													<th>Nama Ortu</th>
													<!--th>Nama Suis</th>
													<th>Pendidikan Terakhir</th>
													<th>Alamat Skolah</th>
													<th>Persyaratan Id</th>
													<th>Deleted At</th>
													<th>Created At</th>
													<th>Updated At</th-->
													<th colspan="3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												@foreach($mahasiswas as $mahasiswa)
														<tr>
															<td>{!! $mahasiswa->jurusan_id !!}</td>
															<td>{!! $mahasiswa->nama_mahasiswa !!}</td>
															<td>{!! $mahasiswa->tmp_lahir !!}, {!! $mahasiswa->tgl_lahir !!}</td>
															<td>{!! $mahasiswa->jenkel !!}</td>
															<td>{!! $mahasiswa->agama !!}</td>
															<td>{!! $mahasiswa->ukuranjas !!}</td>
															<td>{!! $mahasiswa->s_kerja !!}</td>
															<!--td>{!! $mahasiswa->s_nikah !!}</td-->
															<!--td>{!! $mahasiswa->alamat !!}</td-->
															<td>{!! $mahasiswa->no_hp !!}</td>
															<td>{!! $mahasiswa->nama_ortu !!}</td>
															<!--td>{!! $mahasiswa->nama_suis !!}</td>
															<td>{!! $mahasiswa->pendidikan_terakhir !!}</td>
															<td>{!! $mahasiswa->alamat_skolah !!}</td>
															<td>{!! $mahasiswa->persyaratan_id !!}</td>
															<td>{!! $mahasiswa->deleted_at !!}</td>
															<td>{!! $mahasiswa->created_at !!}</td>
															<td>{!! $mahasiswa->updated_at !!}</td-->
															<td>
																{!! Form::open(['route' => ['mahasiswa.destroy', $mahasiswa->mahasiswa_id], 'method' => 'delete']) !!}
																<div class='btn-group'>
																	<a href="{!! route('mahasiswa.show', [$mahasiswa->mahasiswa_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
																	<a href="{!! route('mahasiswa.edit', [$mahasiswa->mahasiswa_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
																	{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
																</div>
																{!! Form::close() !!}
															</td>
														</tr>
													@endforeach                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->