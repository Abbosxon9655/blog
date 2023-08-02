@extends('admin.layouts.layout')

@section('messages')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Show product</h6>
            <a href="{{ route('admin.messages.index') }}">
                <button type="button" class="btn btn-primary"> <i class="fas fa-home"></i></button>
            </a>
        </div>

        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <td> Name: </td>
                    <td><b>{{ $message->name }}</b></td>
                </tr>
{{-- 
                <tr>
                    <td> Email: </td>
                    <td><b>{{ $message->email }}</b></td>
                </tr> --}}

                <tr>
                    <td> Number: </td>
                    <td><b>{{ $message->number }}</b></td>
                </tr>

                {{-- <tr>
                    <td> Content: </td>
                    <td><b>{{ $message->content }}</b></td>
                </tr> --}}
                
            </thead>
        </table>
        
    </div>
@endsection