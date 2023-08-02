@extends('admin.layouts.layout')

@section('audits')
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
            <h6 class="mb-4">Audits</h6>
            {{-- <div style=" right: 50;">
                <a href="{{ route('admin.messages.create') }}">
                    <button type="button" class="btn btn-primary"> Create </button>
                </a>
            </div> --}}

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">event</th>
                        <th scope="col">user</th>
                        <th scope="col">table</th>
                        
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($audits) == 0)
                        <tr>
                            <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                            </td>
                        </tr>
                    @endif

                    @foreach ($audits as $audit)
                        <tr>
                            <th scope="row">{{ ++$loop->index }}</th>
                            <td>{{ $audit->event }}</td>
                            <td>{{ $audit->username }}</td>
                            <td>{{ $audit->tablename }}</td>
                            

                            <td>
                                <form action="{{ route('admin.audits.destroy', $audit->id) }} " method="POSt">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.audits.show', $audit->id) }}">
                                        <button type="button" class="btn btn-square btn-info m-2"><i
                                                class="fas fa-eye"></i></button>
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