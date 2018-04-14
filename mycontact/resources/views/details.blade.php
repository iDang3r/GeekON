@extends('main')

@section('content')
  <h2>Имя: {{$contact->name}}</h2><hr>
  <h4>Место работы: {{$contact->job}}</h4>
  <p>Email: {{$contact->email}}</p>
  <hr>
  <h4>Телефоны</h4>
  <ul>
    @foreach($contact->phones as $phone)
      <li>{{ $phone->phone }}<a href="{{url('/phone/'.$phone->id.'/delete')}}" style="margin-left: 1%;"><button type="button" class="btn btn-warning btn-sm">Удаление</button></a></li>
    @endforeach
    <a href="{{url('/contact/'.$contact->id.'/add_phone')}}" id='left'><button type="button" class="btn btn-info btn-sm">Добавить</button></a>
  </ul>
  <hr>
  <h4>Сайты</h4>
  <ul>
    @foreach($contact->sites as $site)
      <li>{{ $site->site }}<a href="{{url('/site/'.$site->id.'/delete')}}" style="margin-left: 1%;"><button type="button" class="btn btn-warning btn-sm">Удаление</button></a></li>
    @endforeach
    <a href="{{url('/contact/'.$contact->id.'/add_site')}}" id='left'><button type="button" class="btn btn-info btn-sm">Добавить</button></a>
  </ul>
  <hr>
  <p><i>Заметка к контакту:</i> {{$contact->comment}}</p>
  <a href="{{url('/')}}"><button type="button" class="btn btn-info">Назад</button></a>
  <a href="{{url('/contact/'.$contact->id.'/edit')}}"><button type="button" class="btn btn-info">Изменить</button></a>
  <a href="{{url('/contact/'.$contact->id.'/delete')}}"><button type="button" class="btn btn-warning">Удаление</button></a>
@endsection
