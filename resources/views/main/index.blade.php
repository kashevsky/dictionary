@extends('layouts.main')
@section('content')
<p>{{count(session('words')) - 1}}/{{count(session('main_words')) - 1}}</p>
<div class="section">
<div class="main-container">
@if(isset($word))
<div class="word">
{{$word->ru_title}}
</div>
<form action="{{route('check')}}" method="post">
    @csrf
    <input class = "main_input" type="text" name="eng_title">
    <br>
    <input type="hidden" name="mainWord" value="{{$word->eng_title}}">
    <input class = "main_button" type="submit" value="Проверить">
</form>
@else
Слова закончились
@if(!is_null(session('true_words')))
Правильных ответов: {{(count(session('true_words')))}} из {{count(session('words')) - 1}}
@else
Нет правильных ответов
@endif
<form action="{{route('restart')}}" method="get">
    @csrf
    <input type="submit" value="Заново">
</form>
@endif
</div>
<div class="messages">
@if(session()->has('message-success'))
<div class="message--green">
{{session()->get('message-success')}}
</div>
@endif
@if(session()->has('message-fault'))
<div class="message--red">
{{session()->get('message-fault')}}
</div>
@endif
</div>
</div>
@endsection