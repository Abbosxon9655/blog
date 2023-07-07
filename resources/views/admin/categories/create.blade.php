@extends('admin.layouts.layout')

@section('categories')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="col-12">

            <div class="card-header">
                <h4>Ma'lumot qo'shish</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">category uz</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="name_uz" value="{{ old('name_uz') }}">
                            @error('name_uz')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">category ru</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="name_ru" value="{{ old('name_ru') }}">
                            @error('name_ru')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection