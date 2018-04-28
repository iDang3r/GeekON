@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">{{$task->title}}</div>
        <div class="card-body">
            <h6>Стоимость: {{$task->value}}
                @if ($u)
                    <span class="badge badge-pill badge-success">Success</span>
                @endif
            </h6>
            <hr>
            <h6>Полное описание:</h6>
            <p>{{$task->text}}</p>
            <hr>
            @if ($u)
                <h5 style="color: #82ad47;">Задача выполнена!</h5><br>
                <a href="{{url('/showtasks')}}" class="btn btn-info">Назад</a>
                <br>
            @else
            <form method="post" style="width: 35%;">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Flag</span>
                    </div>
                    <input type="text" class="form-control" name="test_flag" required value="{{old('test_flag')}}">
                </div>
                <input type="submit" value="Проверить" class="btn btn-info">
                <a href="{{url('/showtasks')}}" class="btn btn-info">Назад</a>
            </form>
            @endif
        </div>
    </div>

@endsection