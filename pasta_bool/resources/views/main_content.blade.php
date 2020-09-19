@extends('layouts.main_layout')

@section('content')

  <div class="pastas">

    <h1>Le lunghe</h1>

    <div class="product">

      @foreach ($data as $pasta)

        @if ($pasta['tipo'] == "lunga")
          <img src="{{ asset($pasta['src']) }}" alt="">
        @endif

      @endforeach

    </div>

  </div>

  <div class="pastas">

    <h1>Le corte</h1>

    <div class="product">

      @foreach ($data as $pasta)

        @if ($pasta['tipo'] == "corta")
          <img src="{{ asset($pasta['src']) }}" alt="">
        @endif

      @endforeach

    </div>

  </div>

  <div class="pastas">

    <h1>Le cortissime</h1>

    <div class="product">

      @foreach ($data as $pasta)

        @if ($pasta['tipo'] == "cortissima")
          <img src="{{ asset($pasta['src']) }}" alt="">
        @endif

      @endforeach

    </div>

  </div>

@endsection
