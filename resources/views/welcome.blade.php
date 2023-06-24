 @extends('layouts.main')

@section('content')



    <!--status start-->
    @include('section.status')
    <!--status end-->


    <!--post start-->
    @include('section.post')
    <!--post end-->

   <!--container start-->
   @include('section.container')
   <!--container end-->
   
    <!--new start-->
    @include('section.new')
    <!--new end--> 

    <!--popular start-->
    @include('section.popular')
    <!--popular end-->

   <!--apps start-->
   @include('section.apps')
   <!--apps end-->
      
   
  @endsection

   

   