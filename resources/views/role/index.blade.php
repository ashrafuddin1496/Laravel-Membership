@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>All Roles</h2>
            <a href="{{route('role.create')}}" class="btn btn-sm btn-primary float-right">Add New Role</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Role Name</th>
                    <th>Permission</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($all_role as $role)
                <tr>
                    <td>{{$loop ->index +1}}</td>
                    <td>{{$role ->name}}</td>
                    <td>
                        @foreach(json_decode($role ->permission) as $per)
                            {{$per}} |
                        @endforeach

                    </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="">Edit</a>
                        <a class="btn btn-sm btn-danger" href="">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
