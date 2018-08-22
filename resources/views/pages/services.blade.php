@extends('layouts.app')

@section('content')  
    <h1>Services</h1>
        @if(count($body) > 0)
            <ul class="list-group">
                @foreach($body as $bodys)
                    <li class="list-group-item">{{$bodys}}</li>
                @endforeach
            </ul>
        @endif
@endsection


