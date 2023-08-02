@extends('admin.layouts.layout')

@section('audits')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Show product</h6>
            <a href="{{ route('admin.audits.index') }}">
                <button type="button" class="btn btn-primary"> <i class="fas fa-home"></i></button>
            </a>
        </div>

        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <td> event: </td>
                    <td><b>{{ $audit->event }}</b></td>
                </tr>

                <tr>
                    <td> user: </td>
                    <td><b>{{ $audit->username }}</b></td>
                </tr>

                <tr>
                    <td> table: </td>
                    <td><b>{{ $audit->tablename }}</b></td>
                </tr>

                
            </thead>
        </table>
        
    </div>
@endsection