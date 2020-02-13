@extends('layouts.main')

@section('title', 'FAQ - Boolean Careers')

@section('content')
    <div class="boolean__faq__jumbo">
        <div class="container-fluid">
            <h1>Domande frequenti</h1>
            <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando?
                <a href="#">Contattaci</a> e saremo felici di darti un mano.
            </p>
        </div>
    </div>
    <div class="boolean__faq__body">
        <div class="container-fluid">
            <div class="row boolean__faq__body__cnt">
                <div class="col-xl-6 bg_light_blue">
                    <h2>Prima del corso</h2>
                    @foreach ($lista_faqs_sx as $single_faq)
                        <div class="boolean__faq__body__question">
                            <h3>{{ $single_faq['q'] }} <i class="fas fa-plus"></i></h3>
                            <p>{!! $single_faq['a'] !!}</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-xl-6 bg_blue">
                    <h2 id="whiteTitle">Dopo il corso</h2>
                    @foreach ($lista_faqs_dx as $single_faq)
                        <div class="boolean__faq__body__question">
                            <h3>{{ $single_faq['q'] }} <i class="fas fa-plus"></i></h3>
                            <p>{{ $single_faq['a'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
