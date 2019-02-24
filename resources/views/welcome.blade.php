@extends('layouts.app')
@section('title')
{{trans('Главная')}}
@stop

@section('description', 'О успехах человека с ником morepozitiva')
@section('keywords', 'фото, сайты, сайт, создание, портфолио, резюме')

@section('work1')
Адмирал - Участки на Горьковском море <br/> <div class='linksp'><a href='http://nn-admiral.ru' target='_blank'>Сайт</a></div>
@endsection
@section('work2')
Княжево - Участки <br/> <div class='linksp'><a href='http://knyajevo.ru' target='_blank'>Сайт</a></div>
@endsection
@section('work3')
Экопроджект <br/> <div class='linksp'><a href='http://eco-project.pro' target='_blank'>Сайт</a></div>
@endsection

@section('content')
                <div id="home">
                <p class="sometext"> Всегда, есть что-то новое, и интересное! Вот и сейчас, очень интересно, новый взгляд, новое все. Да не все получается, но впереди столько интересного, что, аж ДУХ ЗАХВАТЫВАЕТ</p>
                <hr>
                <div class="links">
                    <a href="//morepozitiva.github.io" target="_blank">Мой сайт</a>
                    <a href="//github.com/morepozitiva" target="_blank">Мой ГИТ</a>
                    <a href="//codepen.io/morepozitiva/" target="_blank">Песочница</a> 
                    <a href="//github.com/laravel/laravel">GitHub Laravel</a>
                </div>
                <hr>
                <div class="titlep m-p-md">
                    Некоторые работы
                </div>
                <div class="row">
                    <div class="colls works"><img data-toggle="tooltip" src="{{ secure_asset('images/thumb/admiral.png') }}" alt="" title="@yield('work1')"></div>
                    <div class="colls works"><img data-toggle="tooltip" src="{{ secure_asset('images/thumb/knyajevo.png') }}" alt="" title="@yield('work2')"></div>
                    <div class="colls works"><img data-toggle="tooltip" src="{{ secure_asset('images/thumb/Ecoproject.png') }}" alt="" title="@yield('work3')"></div>
                </div> 
            </div>
@endsection
