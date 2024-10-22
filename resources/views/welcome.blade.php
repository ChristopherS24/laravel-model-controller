@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Start 1
</h1>

<main>
    <h2>
        Ciao
    </h2>

    @foreach ($movies as $item)
    <li> {{ $item }} </li>

    @endforeach

</main>
@endsection
