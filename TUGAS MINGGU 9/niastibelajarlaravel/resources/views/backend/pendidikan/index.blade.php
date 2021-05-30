@extends('backend.layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> Riwayat Hidup</h3>
                <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                        <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                        <li><i class="fa fa-file-text-o"></i>Pendidikan</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Pendidikan
                    </header>
                    <div class="panel-body">
                        {{-- @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif --}}
                        @if ($message = session('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <a href="{{ route('pendidikan.create') }}"><button class="btn btn-primary"
                            type="button"><i class="fa fa-plus"> Tambah </i></button>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection

@push('content-css')
<link href="{{ asset('backend/js/bootstap-datapicker.js') }}" rel="stylesheet" />
@endpush

@push('content-js')
<script scr="{{ asset('backend/js/bootsrap-datapicker.js') }}"></script>
<script type="text/javascript">
    $('#tahun_masuk').datapicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
    $('#tahun_keluar').datapicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
</script>
@endpush

