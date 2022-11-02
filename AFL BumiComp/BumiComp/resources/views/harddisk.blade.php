@extends('layout.homelayout')

@section('body')

    <section id="pic">
        <h1 class="text-center mt-5"> Seputar {{ $info['name'] }}</h1>

        <img src="/image/{{ $info['picture'] }}" alt="pic"></td>
        
        @foreach ($info['description'] as $a)
            <h3>
                {{ $a }}
            </h3>
        @endforeach

    </section>
@endsection
