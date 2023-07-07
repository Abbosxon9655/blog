@extends('admin.layouts.layout')

@section('categories')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Show product</h6>
            <a href="{{ route('admin.categories.index') }}">
                <button type="button" class="btn btn-primary"> <i class="fas fa-home"></i></button>
            </a>
        </div>

        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <td>Category uz: </td>
                    <td><b>{{ $category->name_uz }}</b></td>
                </tr>

                <tr>
                    <td>Category ru: </td>
                    <td><b>{{ $category->name_ru }}</b></td>
                </tr>
            </thead>
        </table>
        
    </div>
@endsection