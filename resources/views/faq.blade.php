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

    @foreach ($lista_faqs as $single_faq)
        <h2>{{ $single_faq['q'] }}</h2>
        <br>
        <p>{{ $single_faq['a'] }}</p>
        <br>
    @endforeach

@endsection
