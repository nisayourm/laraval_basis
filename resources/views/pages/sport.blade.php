@extends('layouts.app')

@section('sabay-content')

<div class="card mt-5">
    <div class="cart-header">
        {{ $title }}
    </div>
    <div class="card-body">
        @if(count($football) > 0)
            <ul class="list-group">
                @foreach($football as $key => $foot)
                    <li>
                    <div class="list-group-item">{{$key}} : {{$foot}}</div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

<div class="card mt-5">
    <div class="cart-header">
        {{ $title }}
    </div>
    <div class="card-body">
        @if(count($VoleyBall) > 0)
            <ul class="list-group">
                @foreach($VoleyBall as $key => $foot)
                    <li>
                    <div class="list-group-item">{{$key}} : {{$foot}}</div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

@endsection


    
 
