@extends('back.layouts.master')
<!--  BEGIN CONTENT PART  -->
@section('title','Tüm Kategoriler')
@section('baslik')
<h4>Tüm Kategoriler</h4>
@endsection
@section('content')

<div class="table-responsive mb-4 mt-4">
    <table id="zero-config" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Kategori Adı</th>
                <th>Kategori Link</th>
                <th>Oluşturma Tarihi</th>
                <th class="no-content">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->created_at->format('d/m/Y')}}</td>
                <td>
                    <ul class="table-controls">
                        <li>
                            <a href="{{ route('admin.kategoriler.edit',$category->id) }}" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.kategoriler.sil',$category->id) }}" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>
    <button class="btn btn-success snackbar-bg-success d-none">Primary</button>
</div>
@endsection
@section('css')

<link href="{{ asset('back') }}/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('js')

<script src="{{ asset('back') }}/plugins/notification/snackbar/snackbar.min.js"></script>
<script src="{{ asset('back') }}/assets/js/components/notification/custom-snackbar.js"></script>
<script>
    $('.snackbar-bg-success').click(function() {
    Snackbar.show({
        text: 'Success',
        actionTextColor: '#fff',
        backgroundColor: '#8dbf42'
    });
});

</script>

@endsection
