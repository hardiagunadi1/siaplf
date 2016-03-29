    @extends('layouts.app2')

    @section('htmlheader_title')
        Daftar Baru
    @endsection

    @section('content_title')
        Daftar Baru
    @endsection

    @section('content_title_small')
        Mahasiswa
    @endsection

    @section('contentheader_title')
    Form Pendaftaran Mahasiswa
    @endsection



    @section('main-content')

    <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN VALIDATION STATES-->
                                <div class="portlet light portlet-fit portlet-form bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-red"></i>
                                            <span class="caption-subject font-red sbold uppercase">Basic Validation</span>
                                        </div>
                                        <div class="actions">
                                            <!-- action here -->
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        {!! Form::open(array('route' => 'jurusan.store', 'class' => 'form-horizontal')) !!}
                                            @include('jurusans.fields')
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>
                        

    @endsection