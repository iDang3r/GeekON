@extends('main')

@section('content')
<form method="POST" style="width: 30%;">
  @csrf
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Телефон</span>
    </div>
    <input type="text" class="form-control" placeholder="+79261235478" name="phone" required value="{{old('phone')}}">
  </div>
  <a href="{{url('/contact/'.$contact->id)}}"><button type="button" class="btn btn-info">Назад</button></a>
  <input type="submit" value="Добавить" class="btn btn-info">
</form>
@endsection
