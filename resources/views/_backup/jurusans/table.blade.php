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
<table class="table table-responsive">
    <thead>
        <th>Nama Jurusan</th>
        <th>Tahun Ajaran</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($jurusans as $jurusan)
        <tr>
            <td>{!! $jurusan->nama_jurusan !!}</td>
            <td>{!! $jurusan->tahun_ajaran !!}</td>
            <td>
                {!! Form::open(['route' => ['jurusan.destroy', $jurusan->jurusan_id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jurusan.show', [$jurusan->jurusan_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jurusan.edit', [$jurusan->jurusan_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
