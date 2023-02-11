@extends('layouts.main')
@section('content')
<h1>Добавить адрес доставки</h1>
<form action="{{route('delivery.store')}}" method="post">
    @csrf
<input type="text" name="locality" style="width: 20vw">
<br>
<br>
<input type="text" name="street" style="width: 20vw">
<br>
<br>
<input type="text" name="home_number" style="width: 20vw">
<br>
<br>
<input type="text" name="flat_number" style="width: 20vw">
<br>
<br>
<input type="text" name="porch" style="width: 20vw">
<br>
<br>
<input type="text" name="floor" style="width: 20vw">
<br>
<br>
<input type="text" name="comment" style="width: 20vw"> 
<br>
<br>
<input type="hidden" name="profile_id" value="{{$profile->id}}" style="width: 20vw"> 
<br>
<br>
<input type="submit" value="Добавить">
</form>
<br>
@endsection