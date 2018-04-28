@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 5%;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                {{--<div class="card-header">Состояние соревнования</div>--}}
                <div class="card-body">
                    @guest
                        <a href="{{url('/login')}}">Войдите на сайт</a> или <a href="{{url('/register')}}">зарегистрируйтесь</a>, чтобы принять участие в нашем состязании!
                    @else
                        <h5>Вы уже участвуюте!</h5>
                        <h5>И уже можете перейти к <a href="{{url('/showtasks')}}">решению задач</a></h5>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
