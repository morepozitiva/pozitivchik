@extends('layouts.app')
@section('title')
{{trans('Портфолио morepozitiva')}}
@stop

@section('description', 'Портфолио morepozitiva')
@section('keywords', 'портфолио, резюме, сайты, сделано')

@section('name')
Портфолио
@endsection
@section('content')
@section('work1')
Адмирал - Участки на Горьковском море <br/> <div class='linksp'><a href='http://nn-admiral.ru' target='_blank'>Сайт</a></div>
@endsection
@section('work2')
Княжево - Участки <br/> <div class='linksp'><a href='http://knyajevo.ru' target='_blank'>Сайт</a></div>
@endsection
@section('work3')
Экопроджект <br/> <div class='linksp'><a href='http://eco-project.pro' target='_blank'>Сайт</a></div>
@endsection

@section('work4')
Стройсад
@endsection
@section('work5')
Аqanau - бассейны и аксесуары
@endsection
@section('work6')
Двери входные и межкомнатные, аксессуары
@endsection

@section('work7')
PuzzlePlast <br/> <div class='linksp'><a href='http://puzzle-plast.ru' target='_blank'>Сайт</a></div>
@endsection
@section('work8')
Сайт художника, поэта, да ну и просто замечательного человека <br/> <div class='linksp'><a href='https://romaklik.github.io' target='_blank'>Сайт</a></div>
@endsection
@section('work9')
Автопилот - реклама в журнал
@endsection
@section('work10')
Натали - реклама в журнал
@endsection
@section('work11')
Рута - реклама в журнал
@endsection
@section('work12')
Баннер Interstroi
@endsection
@section('work13')
Баннер - Утепление фасадов
@endsection
@section('work14')
Афиша художника
@endsection

@section('content')

            <div id="portfolio">

            <div class="title m-b-md">
                    То что сделано!!!
            </div>
            <div class="row">

                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/admiral.png') }}" alt="" title="@yield('work1')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/knyajevo.png') }}" alt="" title="@yield('work2')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/Ecoproject.png') }}" alt="" title="@yield('work3')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/stroysad.png') }}" alt="" title="@yield('work4')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/aqanau.png') }}" alt="" title="@yield('work5')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/alvero-crimea.png') }}" alt="" title="@yield('work6')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/puzzleplast.png') }}" alt="" title="@yield('work7')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/romaklik.jpg') }}" alt="" title="@yield('work8')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/avtopilot.png') }}" alt="" title="@yield('work9')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/natali.jpg') }}" alt="" title="@yield('work10')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/ruta.jpg') }}" alt="" title="@yield('work11')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/interstroy4562.gif') }}" alt="" title="@yield('work12')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/phasad_baner25.png') }}" alt="" title="@yield('work13')"></div>
                <div class="colls works wow zoomIn" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="10"><img data-toggle="tooltip" src="{{ asset('images/thumb/afisha-hudoghnik.jpg') }}" alt="" title="@yield('work14')"></div>
            </div>
        </div>

@endsection
