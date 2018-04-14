@extends('main')

@section('content')
  <a href="{{url('/add')}}"><button type="button" class="btn btn-info">Добавить новый контакт</button></a><br>
  <?php $i = 1;?>
    @foreach($contacts as $contact)
    <br>
      <div class="card w-75">
        <div class="card-body">
          <p class="card-title">Контакт {{$i}}</p><hr>
          <?php $i++;?>
          <h5 class="card-text">Имя: {{$contact->name}}</h5>
          @if ($contact->job) <p>Место работы: {{$contact->job}}</p> @endif
          <a href="{{url('contact/'.$contact->id)}}"><button type="button" class="btn btn-info">Подробнее</button></a>
        </div>
      </div>
    @endforeach
@endsection
