@extends('layouts.main')
@section('content')

<div style="display:flex; flex-direction:column; justify-content:center">
<h1 style="text-align: center">Профили</h1>
@foreach ($profiles as $profile )
<p>{{$profile->full_name}}<a href="{{route('profiles.edit',$profile)}}" style="color: white; background-color:red; padding: 3px 2px; margin-left:20px">Редактировать</a></p>
<br>
@endforeach
</div>
@endsection