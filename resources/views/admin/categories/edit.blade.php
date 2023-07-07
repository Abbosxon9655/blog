@extends('admin.layouts.layout')

@section('categories')
    active
@endsection

@section('content')
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
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>O'zgartirish</h3>
                    <a href="{{ route('admin.categories.index') }}">
                        <button type="button" class="btn btn-outline-dark m-2">Qaytish</button>
                        
                    </a>
                </div>

                <form class="create__inputs" action="{{ route('admin.categories.update', $category->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <strong> Category uz:</strong>
                    <input type="text" name="name_uz" value="{{ $category->name_uz }}" class="form-control"> <br>
                    @error('name_uz')
                        {{ $message }}
                    @enderror

                    <strong> Category ru:</strong>
                    <input type="text" name="name_ru" value="{{ $category->name_ru }}" class="form-control"> <br>
                    @error('name_ru')
                        {{ $message }}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection