@extends('layouts.admin')
@section('content')
    @include('admin.partials.notification')
    @if($books && count($books)>0)
        <table class="table table-bordered ">
            <thead>
            <tr>
                <th>شناسه</th>
                <th>نام</th>
                <th>نام نویسنده</th>
                <th>سال انشار</th>
                <th>ناشر</th>
                <th>نام مترجم</th>
                <th>دسته بندی</th>
                <th>قیمت</th>
                <th>عملیات</th>
            </tr>
            </thead>
            @foreach($books as $book)
                @include('admin.book.itemsTable',$book)
            @endforeach
        </table>
    @endif
@endsection