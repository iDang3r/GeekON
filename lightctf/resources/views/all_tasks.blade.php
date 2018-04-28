@extends('layouts.app')

@section('content')
    <?php
        use App\User;
        $user_id = Auth::User()->id;
    ?>
    @foreach($tasks as $task)
        <div class="card">
            <div class="card-header">{{$task->title}}</div>
            <div class="card-body">
                <h6>Стоимость: {{$task->value}}
                    <?php
                        $u = User::findOrFail($user_id)->tasks->contains($task);
                    ?>
                    @if ($u)
                        <span class="badge badge-pill badge-success">Success</span>
                    @endif
                </h6><hr>
                <p>{{$task->review}}</p>
                <a href="{{url('/task/'.$task->id)}}"><div class="btn btn-outline-info btn-sm">Подробнее</div></a>
            </div>
        </div>
        <br>
    @endforeach

@endsection