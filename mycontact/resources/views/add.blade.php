@extends('main')

@section('content')
  <h2>Добавление нового контакта</h2>
  <form method="POST" style="width: 60%;">
    @csrf
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Имя</span>
      </div>
      <input type="text" class="form-control" placeholder="Аркадий" name="name" required value="{{old('name')}}">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Компания</span>
      </div>
      <input type="text" class="form-control" placeholder="Гуугоол" name="job" required value="{{old('job')}}">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Email</span>
      </div>
      <input type="email" class="form-control" placeholder="tetris@mail.ru" name="email" required value="{{old('email')}}">
    </div>

    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Комментарий</span>
      </div>
      <textarea class="form-control" aria-label="With textarea" name="comment">{{old('comment')}}</textarea>
    </div>
    <br>
    <a href="{{url('/')}}"><button type="button" class="btn btn-info">Назад</button></a>
    <input type="submit" value="Добавить" class="btn btn-info">
  </form>
@endsection
