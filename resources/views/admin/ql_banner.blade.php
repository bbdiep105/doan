@extends('master')
@section('title')
    <H1><b>Danh Mục Sản Phẩm</b></H1>
@endsection
@section('content')
    @include('page.banner')
@endsection
@section('js')
    <script src="/project/quan_ly_banner.js"></script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $('.lfm').filemanager('image');
    </script>
@endsection
