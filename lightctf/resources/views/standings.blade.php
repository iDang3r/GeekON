@extends('layouts.app')

@section('content')

    <?php $i = 1; ?>
    <ul class="list-group">
        @foreach($users as $user)
            @if ($i < 4)
                <li class="list-group-item list-group-item-success">
                    {{$i++}} -> {{$user->name}} -> score is : {{$user->score}}
                </li>
            @else
                <li class="list-group-item">
                   {{$i++}} -> {{$user->name}} -> score is : {{$user->score}}
                </li>
            @endif
        @endforeach
    </ul>

@endsection