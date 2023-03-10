@extends('admin.master')

@section('title')
    Manage User
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Category Info</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            {{-- <th>Role</th> --}}
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            {{-- <!--<td>{{$user->role == 1 ? " Admin" : "user"}}</td>                           -->
                            <td class="h4"><span class=" {{$user->role == 1 ? "badge bg-success text-white" : "badge bg-warning text-white"}}">{{$user->role == 1 ? " Admin" : "user"}}</span></td> --}}
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection