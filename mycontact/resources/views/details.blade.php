@extends('main')

@section('content')
  <h2>Имя: {{$contact->name}}</h2><hr>
  <h5>Место работы: {{$contact->job}}</h5>
  <p>Email: {{$contact->email}}</p>
  <p>Заметка к контакту: {{$contact->comment}}</p>
  <a href="{{url('/')}}"><button type="button" class="btn btn-info">Назад</button></a>
  <a href="{{url('/contact/'.$contact->id.'/edit')}}"><button type="button" class="btn btn-info">Изменить</button></a>
  <a href="{{url('/contact/'.$contact->id.'/delete')}}"><button type="button" class="btn btn-warning">Удаление</button></a>
@endsection
