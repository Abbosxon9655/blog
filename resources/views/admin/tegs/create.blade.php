@extends('admin.layouts.layout')

@section('tegs')
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
                    <form action="{{ route('admin.tegs.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">tegs Uz</label>
                            <input type="text" name="teg_uz" value="{{ old('teg_uz') }}" class="form-control">
                            @error('teg_uz')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">tegs Ru</label>
                            <input type="text" name="teg_ru" value="{{ old('teg_ru') }}" class="form-control">
                            @error('teg_ru')
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