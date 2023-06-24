@extends('layouts.main')

@section('content')

      <!--status start-->
      @include('section.status')
      <!--status end-->

      <!--article start-->
      @include('section.article')
      <!--article start-->

      <!--popular start-->
      @include('section.popular')
      <!--popular end-->

          
          <div class="related-news">
            <h3 class="related-news__title">Новости по теме
            </h3>
            
                 <!--post start-->
                  @include('section.post')
                  <!--post end-->
        {{-- </main> --}}


@endsection