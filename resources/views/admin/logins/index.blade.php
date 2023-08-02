@extends('admin.layouts.layout')

@section('logins')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>{{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($message = Session::get('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>{{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Logins</h6>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($userinfos) == 0)
                        <tr>
                            <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                            </td>
                        </tr>
                    @endif

                    @foreach ($userinfos as $userinfo)
                        <tr>
                            <th scope="row">{{ ++$loop->index }}</th>
                            <td>{{ $userinfo->username }}</td>
                            <td>{{ $userinfo->date }}</td>
                            <td>
                                <form action="{{ route('admin.logins.destroy', $userinfo->id) }} " method="POSt">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.logins.show', $userinfo->id) }}">
                                        <button type="button" class="btn btn-square btn-info m-2"><i
                                                class="fas fa-eye"></i></button>
                                    </a>
                                    {{-- <a href="{{ route('admin.categories.edit', $category->id) }}">
                                        <button type="button" class="btn btn-square btn-primary m-2"><i
                                                class="far fa-edit"></i></button>
                                    </a> --}}

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