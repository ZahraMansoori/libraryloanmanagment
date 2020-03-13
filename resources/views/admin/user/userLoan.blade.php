@extends('layouts.admin')
@section('content')

    <form action="" method="post">
    {{csrf_field()}}
    <ul>
        @foreach($books as $bookItem)
        <li>
            <input type="checkbox" name="bookss[]" id="{{$bookItem->name}}"
                   value="{{ $bookItem->id }}{{isset($booser) && in_array($bookItem->id,$booser)?'checked':''}}"> {{$bookItem->name}}
        </li>
            @endforeach
    <br/>
            <input type="submit" class="btn btn-outline-success" value="ثبت اطلاعات">
    </ul>
    </form>
@endsection