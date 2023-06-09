@extends('layouts.doctor_master')
@section('title', 'User')
@section('master_content')
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Manage Users</h3>
            </div>

        </div>
        <div class="card-body">
            <table class="table table-bordered" id="UserTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>NID</th>
                        <th>Phone</th>
                        <th>Registation Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nid }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>{{ $user->status }}</td>
                            <td>
                                <a href="{{ route('doctor.user.view', $user->id) }}" class="btn btn-sm btn-success"><i
                                        class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


@push('script')
    <script>
        $('#UserTable').DataTable();
    </script>
@endpush
