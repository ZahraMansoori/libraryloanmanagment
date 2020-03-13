@extends('layouts.admin')
@section('content')

    <form action="" method="post"></form>
    <ul>
        @foreach($books as $bookItem)
        <li>
            <input type="checkbox" name="bookss[]" id="{{$bookItem->name}}"> {{$bookItem->name}}
        </li>
            @endforeach
    <br/>
            <input type="submit" class="btn btn-outline-success" value="ثبت اطلاعات">
    </ul>

@endsection