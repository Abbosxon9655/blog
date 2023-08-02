@extends('admin.layouts.layout')

@section('logins')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Show product</h6>
            <a href="{{ route('admin.logins.index') }}">
                <button type="button" class="btn btn-primary"> <i class="fas fa-home"></i></button>
            </a>
        </div>

        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <td> Name: </td>
                    <td><b>{{ $userinfo->username }}</b></td>
                </tr>

                <tr>
                    <td> Email: </td>
                    <td><b>{{ $userinfo->date }}</b></td>
                </tr>
                
            </thead>
        </table>
        
    </div>
@endsection