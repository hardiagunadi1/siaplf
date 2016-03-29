<table class="table table-responsive">
    <thead>
        <th>Id Mahasiswa</th>
        <th>Id Jurusan</th>
        <th>Nama Berkas</th>
        <th>Ketersediaan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($persyaratans as $persyaratan)
        <tr>
            <td>{!! $persyaratan->id_mahasiswa !!}</td>
            <td>{!! $persyaratan->id_jurusan !!}</td>
            <td>{!! $persyaratan->nama_berkas !!}</td>
            <td>{!! $persyaratan->ketersediaan !!}</td>
            <td>
                {!! Form::open(['route' => ['persyaratan.destroy', $persyaratan->persyaratan_id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('persyaratan.show', [$persyaratan->persyaratan_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('persyaratan.edit', [$persyaratan->persyaratan_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>