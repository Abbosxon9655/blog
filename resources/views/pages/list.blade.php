@extends('layouts.main')
@section('content')

    <!--status start-->
    @include('section.status')
      <!--status end-->


      <!--new start-->
      @include('section.new')
      <!--new end-->
      

   
      <!--popular start-->
      @include('section.popular')
      <!--popular end-->

   
  </main>
@endsection