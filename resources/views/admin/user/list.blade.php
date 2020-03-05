@extends('layouts.admin')
@section('content')
    @include('admin.user.notification')
    @if($users && count($users)>0)
        <table class="table table-bordered ">
            <thead>
            <tr>
                <th>شناسه</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>عملیات</th>
            </tr>
            </thead>
            @foreach($users as $user)
                @include('admin.user.itemsTable',$user)
            @endforeach
        </table>
    @endif
    {{--@include('admin.user')--}}
@endsection