@extends('admin.layouts.layout')

@section('messages')
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
            <h6 class="mb-4">Messages</h6>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        {{-- <th scope="col">Email</th> --}}
                        <th scope="col">Number</th>
                        {{-- <th scope="col">content</th> --}}
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($messages) == 0)
                        <tr>
                            <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                            </td>
                        </tr>
                    @endif

                    @foreach ($messages as $item)
                        <tr>
                            <th scope="row">{{ ++$loop->index }}</th>
                            <td>{{ $item->name }}</td>
                            {{-- <td>{{ $item->email }}</td> --}}
                            <td>{{ $item->number }}</td>
                            {{-- <td>{{ $item->content }}</td> --}}
                        

                            <td>
                                @if ($item->status == 0)
                                    <font style="color: red">O`qilmagan</font>
                                @else
                                    <font style="color: green">O`qilgan</font>
                                @endif
                            </td>

                            <td>
                                <form action="{{ route('admin.messages.destroy', $item->id) }} " method="POSt">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.messages.show', $item->id) }}">
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