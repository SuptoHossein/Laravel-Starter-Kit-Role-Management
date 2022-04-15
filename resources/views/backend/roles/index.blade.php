@extends('layouts.backend.app')


@push('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
@endpush


@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-check icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Roles</div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.roles.create') }}" type="button" data-toggle="tooltip" title="Create"
                    data-placement="bottom" class="btn-shadow mr-3 btn btn-primary">
                    <i class="fas fa-plus-circle"></i><span> Create Role</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

                <div class="table-responsive">
                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Permissions</th>
                                <th class="text-center">Updated At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td class="text-center text-muted">#{{ ++$key }}</td>
                                    <td class="text-center">{{ $role->name }}</td>
                                    <td class="text-center">
                                        @if ($role->permissions->count() > 0)
                                            <div class="badge badge-info">{{ $role->permissions->count() }}</div>
                                        @else()
                                            <div class="badge badge-warning">No permission</div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $role->updated_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('app.roles.edit', $role->id) }}" type="button"
                                            class="btn btn-info btn-sm"><i class="fas fa-edit"></i><span>
                                                Edit</span>
                                        </a>

                                        <button type="button" href="{{ route('app.roles.edit', $role->id) }}"
                                            type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i><span>
                                                Delete</span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script> --}}

    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script> --}}
@endpush
