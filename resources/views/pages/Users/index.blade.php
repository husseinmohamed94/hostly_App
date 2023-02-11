@extends('layouts.master')
@section('title')
    Users
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">users</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('users.index')}}" class="breadcrumb-link">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <!-- pageheader -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end pageheader -->



        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">User</h5>

                </button>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>type</th>
                                <th>status</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i =0; ?>
                            @foreach($users as $user )
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td> {{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td> {{$user->admin()}}</td>
                                    <td>{{$user->status}}</td>


                                    <td>
                                        <a href="{{route('users.show',$user->id)}}" title="edit" class="btn x-small btn-primary" ><i class="fas fa-address-card"></i></a>
                                        <a href="#" title="delete" class="btn x-small btn-danger" data-toggle="modal" data-target="#categorydelete{{$user->id}}"><i class="fas fa-trash"></i></a>

                                            <form action="{{route('user.admin',$user->id)}}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_admin" value="1" title="admib">
                                          <button type="submit" class="btn x-small btn-success"><i class="fas fa-user-circle">admin</i> </button>
                                            </form>


                                    </td>
                                </tr>

                            </tbody>


                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic table  -->
        <!-- ============================================================== -->
    </div>

    </div>



</div>
@endsection
@section('script')




@endsection
