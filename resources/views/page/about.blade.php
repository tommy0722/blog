@extends('layouts/appication')
@section('title','為你自己學Laravel')
@section('main')
    <h1>hi</h1>

    {{ $x }}
    {{-- {!! $js !!} --}}

    @if (count($heroes) > 0)
        @foreach ($heroes as $hero)
            @if ($loop->first || $loop->last)
                <li>
                    <strong>*{{ $hero }}</strong>
                </li>
            @else
                <li>
                    {{ $hero }}
                </li>
            @endif
        @endforeach
    @endif
@endsection
@section('footer')
    <script>
        alert('hi');
    </script>
@endsection