@extends('back.layouts.master')
<!--  BEGIN CONTENT PART  -->
@section('title',$category->name . ' Kategorisini Düzenle')
@section('baslik')
<h4>Makale Düzenle</h4>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-10 col-12 mx-auto">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-outline-danger mb-4" role="alert"> <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg></button><i class="flaticon-cancel-12 close" data-dismiss="alert"></i>{{ $error }}
        </div>
        @endforeach
        @endif
        <br />
        <form method="post" action="{{ route('admin.kategoriler.update',$category->id) }}"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="mb-4" for="t-text">Başlık</label>
                <input id="t-text" type="text" name="name" placeholder="Yazı..." value="{{ $category->name }}"
                    class="form-control mb-4" required="">


            </div>
            <button type="submit" class="btn btn-outline-primary btn-rounded btn-block mb-2">KATEGORİ GÜNCELLE</button>

        </form>



    </div>
</div>
@endsection

@section('css')
<link href="{{ asset('back') }}/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" href="{{ asset('back') }}/plugins/editors/markdown/simplemde.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('back') }}/plugins/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('back') }}/assets/css/elements/alerts.css">
@endsection

@section('js')
<script src="{{ asset('back') }}/plugins/file-upload/file-upload-with-preview.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{ asset('back') }}/plugins/select2/select2.min.js"></script>
<script src="{{ asset('back') }}/plugins/select2/custom-select2.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!--  BEGIN CUSTOM SCRIPTS FILE  -->


@endsection
