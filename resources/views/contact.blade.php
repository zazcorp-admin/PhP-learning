@extends('layouts.app')

@section('content')
    <h1>Contact page</h1>
    @if (count($people))
        <ul>
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif

    {{-- <ul>
        @foreach ($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul> --}}
@endsection



@section('footer')
    {{-- <script>alert('be careful visitor')</script> --}}
@endsection
