@extends('layouts.master')
@section('title')
    webHosting
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">webHosting</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('webhosting.index')}}" class="breadcrumb-link">OurServices</a></li>
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

                    <h5 class="card-header">
                        <a href="{{route('webhosting.create')}}"  class="btn btn-primary btn-lg ">Add webhosting</a>
                    </h5>
                    </button>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>name</th>
                                    <th>Duration</th>
                                    <th>unmeted</th>
                                    <th>storage</th>
                                    <th>support</th>
                                    <th>email</th>
                                    <th>domain</th>
                                    <th>builder</th>
                                    <th>price</th>
                                    <th>Discount</th>
                                    <th>Status</th>
                                    <th>Processes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =0; ?>
                                @foreach($webHostings as $webHosting )
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>

                                        <td >{{$webHosting->name}}</td>
                                        <td> {{$webHosting->Duration}}</td>
                                        <td >{{$webHosting->unmeted}}</td>
                                        <td> {{$webHosting->storage}}</td>
                                        <td >{{$webHosting->support}}</td>
                                        <td> {{$webHosting->email}}</td>
                                        <td >{{$webHosting->domain}}</td>
                                        <td> {{$webHosting->builder}}</td>
                                        <td >{{$webHosting->price}}</td>
                                        <td> {{$webHosting->Discount}}</td>
                                        <td >{{$webHosting->Status}}</td>


                                        <td>
                                            <a href="{{route('webhosting.edit',$webHosting->id)}}" title="title" class="btn x-small btn-primary" ><i class="fas fa-edit"></i></a>
                                            <a href="#" title="حذف" class="btn x-small btn-danger" data-toggle="modal" data-target="#outservicdeelet{{$webHosting->id}}"><i class="fas fa-trash">حذف</i></a>

                                        </td>
                                    </tr>

                                </tbody>


                                <!-- modal Delete  -->
                                <div class="modal fade" id="outservicdeelet{{$webHosting->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POst" action="{{route('webhosting.destroy',$webHosting->id)}}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="form-group">

                                                        <h3 for="exampleInputEmail1"> {{$webHosting->name}} هل انت متاكد من الحذف ؟ </h3>

                                                    </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">لا</button>
                                                <button type="submit" class="btn btn-primary"> نعم</button>
                                            </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <!-- end modal Delete  -->




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
