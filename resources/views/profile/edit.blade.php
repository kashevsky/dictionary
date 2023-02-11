@extends('layouts.main')
@section('content')
<form action="{{route('profiles.update',$profile)}}" method="post">
    @csrf
    @method('patch')
<input type="text" name="full_name" value="{{$profile->full_name}}" style="width: 20vw">
<br>
<br>
@error('phone_number')
<p style="color: red">{{$message}}</p>
@enderror
<input type="text" name="phone_number" value="{{$profile->phone_number}}" style="width: 20vw"> 
<br>
<br>
<input type="date" name="birth" value="{{$profile->birth}}" style="width: 20vw">
<br>
<br>
Доставка
<br>
<br>
<select class="form-select" name="delivery_id">
    @foreach ($profile->deliveries as $delivery  )
    <option
    {{$profile->delivery_id === $delivery->id ? 'selected' :''}}
     value="{{$delivery->id}}">{{$delivery->street}} {{$delivery->home_number}}</option>      
    @endforeach
    @if(is_null($profile->delivery_id))
    <option selected value="0">{{App\Models\DefaultDelivery::first()->street}}</option>
    @else
    <option value="0">{{App\Models\DefaultDelivery::first()->street}}</option>
    @endif
</select>
<input type="submit" value="Изменить">
</form>
<br>
<a href="{{route('delivery.create', $profile)}}" style="background-color: green; padding:2px 6px">Добавить новый адрес доставки</a>
<br>
@endsection