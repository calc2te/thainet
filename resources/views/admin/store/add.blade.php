@extends('admin._layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <nav class="col-3 nav flex-column">
            <a class="nav-link" href="/admin/store/add">업체 등록</a>
            <a class="nav-link" href="/admin/store">업체 리스트</a>
        </nav>
        <div class="col-9">
            <store-add-form></store-add-form>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
