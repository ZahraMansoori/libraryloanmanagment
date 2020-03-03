@extends('layouts.admin')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{{ isset($panel_title) ? $panel_title : ''  }}</div>
        <div class="panel-body">
            hello
        </div>
    </div>
@endsection