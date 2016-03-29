<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Page Header here')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> @yield('content_title', 'Page Header here')</a></li>
        <li class="active">@yield('content_title_small', 'Page Header here')</li>
    </ol>
</section>