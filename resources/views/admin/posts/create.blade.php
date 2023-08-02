@extends('admin.layouts.layout')

@section('posts')
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

        <div class="col-sm-12 col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Ma'lumot qo`shish</h6>
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('admin.posts.store') }}" method="POST">
                        @csrf


                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Category</label>
                            <select class="form-select mb-3" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                                @endforeach
                            </select>
                        </div>

                        
                        <div class="col-sm-12 col-md-4">
                            <label class="form-label">Teg</label>
                            <select class="form-select mb-3" name="teg_id[]", multiple>
                                @foreach ($tegs as $postTag)
                                    <option value="{{ $postTag->id }}">{{ $postTag->teg_uz }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Title Uz</label>
                            <input type="text" name="title_uz" value="{{ old('title_uz') }}" class="form-control">
                            @error('title_uz')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Title Ru</label>
                            <input type="text" name="title_ru" value="{{ old('title_ru') }}" class="form-control">
                            @error('title_ru')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="formFile" class="form-label">img</label>
                            <input class="form-control" type="file" id="formFile">
                        </div> --}}


                         
                        <div class="mb-3">
                            <label class="form-label">img</label>
                            <input type="file" name="img"  class="form-control">
                            @error('img')
                                {{ $message }}
                            @enderror
                        </div>


                     
                        <div class="mb-3">
                            <label class="form-label">Body Uz</label>
                            <input type="text" name="body_uz" value="{{ old('body_uz') }}" class="form-control">
                            @error('body_uz')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Body Ru</label>
                            <input type="text" name="body_ru" value="{{ old('body_ru') }}" class="form-control">
                            @error('body_ru')
                                {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Qo`shish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection