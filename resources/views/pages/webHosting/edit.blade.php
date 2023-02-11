@extends('layouts.master')
@section('title')
    webhosting
@endsection


@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title"> </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('webhosting.index')}}" class="breadcrumb-link">webhosting</a></li>
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
            <div class="row">
                <div class="col-md-12">

                    <form action="{{route('webhosting.update',$webhosting->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> name</label>
                                <input type="text" class="form-control"  name="name" value="{{$webhosting->name}}"  placeholder="Enter name">
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> Duration</label>
                                <select class="form-control" name="Duration">
                                    <option $webhosting value="{{$webhosting->Duration}}">{{$webhosting->Duration}}</option>
                                    <option value="month">month</option>
                                    <option value="year">year</option>

                                </select>

                            </div>
                            @error('Duration')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> unmeted</label>
                                <input type="text" class="form-control"  name="unmeted" value="{{$webhosting->unmeted}}}"  placeholder="Enter unmeted">
                            </div>
                            @error('unmeted')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> storage</label>
                                <input type="text" class="form-control"  name="storage" value="{{$webhosting->storage}}"  placeholder="Enter storage">
                            </div>
                            @error('storage')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> support</label>
                                <input type="text" class="form-control"  name="support" value="{{$webhosting->support}}"  placeholder="Enter support">
                            </div>
                            @error('support')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> email</label>
                                <input type="text" class="form-control" name="email" value="{{$webhosting->email}}"   placeholder="Enter email">
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> domain</label>
                                <input type="text" class="form-control" name="domain" value="{{$webhosting->domain}}"  placeholder="Enter name domain">
                            </div>
                            @error('domain')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> builder</label>
                                <input type="text" class="form-control" name="builder" value="{{$webhosting->builder}}"  placeholder="builder">
                            </div>
                            @error('builder')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> price</label>
                                <input type="text" class="form-control" name="price" value="{{$webhosting->price}}"  placeholder="price"
                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> sale</label>
                                <input type="text" class="form-control" name="Discount" value="{{$webhosting->Discount}}"  placeholder="sale"
                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>
                            @error('sale')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-md-3">
                                <label for="exampleInputTilte"> Status</label>
                                <select class="form-control" name="Status">
                                    <option value="php">php</option>
                                    <option value="node">node</option>
                                    <option value="web">web</option>
                                </select>
                            </div>
                            @error('Status')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="form-group col-md-12 text-center">
                                <button class="btn btn-success btn-lg nextBtn btn-lg pull-right" type="submit">Update</button>
                    </form>

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
