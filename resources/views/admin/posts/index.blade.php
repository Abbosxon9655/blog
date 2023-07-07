@extends('admin.layouts.layout')

{{-- @section('categories')
    active
@endsection --}}

@section('content')
    <div class="col-sm-12 col-xl-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>{{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Posts</h6>
            <div style=" right: 50;">
                <a href="{{ route('admin.posts.create') }}">
                    <button type="button" class="btn btn-primary"> Create </button>
                </a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category_id</th>
                        <th scope="col">title_uz</th>
                        <th scope="col">title_ru</th>
                        <th scope="col">img</th>
                        <th scope="col">body_uz</th>
                        <th scope="col">body_ru</th>
                        <th scope="col">views</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($posts) == 0)
                        <tr>
                            <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                            </td>
                        </tr>
                    @endif

                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ ++$loop->index }}</th>
                            <td>{{ $post->category_id }}</td>
                            <td>{{ $post->title_uz }}</td>
                            <td>{{ $post->title_ru }}</td>
                            <td>{{ $post->img }}</td>
                            <td>{{ $post->body_uz }}</td>
                            <td>{{ $post->body_ru }}</td>
                            <td>{{ $post->views }}</td>

                            <td>
                                <form action="{{ route('admin.categories.destroy', $post->id) }} " method="POSt">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.categories.show', $post->id) }}">
                                        <button type="button" class="btn btn-square btn-info m-2"><i
                                                class="fas fa-eye"></i></button>
                                    </a>
                                    <a href="{{ route('admin.categories.edit', $post->id) }}">
                                        <button type="button" class="btn btn-square btn-primary m-2"><i
                                                class="far fa-edit"></i></button>
                                    </a>

                                    <button class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')">
                                        <i class="fas fa-times"></i>
                                    </button>

                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>
@endsection