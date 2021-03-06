@extends('back.layouts.master')
<!--  BEGIN CONTENT PART  -->
@section('title','Makale Oluştur')
@section('baslik')
<h4>Makale Oluştur</h4>
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
        <form method="post" action="{{ route('admin.makaleler.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="mb-4" for="t-text">Başlık</label>
                <input id="t-text" type="text" name="title" placeholder="Yazı..." class="form-control mb-4" required="">
                <label class="mb-4" for="t-cate">Kategori</label>
                <select id="t-cate" name="categories[]" class="form-control tagging" multiple="multiple">
                    @foreach ($categories as $category)
                    <option value="{{ $category->category_guid }}">{{ $category->name }}</option>
                    @endforeach
                </select>


                <div class="custom-file-container" data-upload-id="myFirstImage">
                    <label>Resim Yükleme(Tek Dosya) <a href="javascript:void(0)"
                            class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                    <label class="custom-file-container__custom-file">
                        <input name="image" type="file" class="custom-file-container__custom-file__custom-file-input"
                            accept="image/*">
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
                <label class="mb-4" for="t-text">Makale İçeriği</label>
                <textarea name="content" id="asd" name="editordata"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary btn-rounded btn-block mb-2">MAKALE OLUŞTUR</button>

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

<script>
    $(".tagging").select2({
    tags: true
});
</script>
<script>
    $(document).ready(function() {
  $('#asd').summernote(
      {'height':400,
      placeholder: 'Makale içeriğini buraya yazınız...',
      minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  }
  );
});

</script>
<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    //Second upload
    var secondUpload = new FileUploadWithPreview('mySecondImage')


</script>
@endsection
