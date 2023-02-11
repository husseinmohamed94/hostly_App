@extends('layouts.master')
@section('title')
    Features
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
                                <li class="breadcrumb-item"><a href="{{route('Features.index')}}" class="breadcrumb-link"> Features </a></li>
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

                    <form action="{{route('Features.update',$feature->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <input type="hidden" value="{{$feature->image}}" name="oldimage">
                            <div class="form-group col-md-12">
                                <label for="exampleInputTilte"> Name</label>
                                <input type="text" class="form-control"  name="Name" value="{{$feature->name}}"  placeholder="Enter name">
                            </div>
                            @error('Name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-md-12">
                                <label for="exampleInputTilte"> details</label>
                                <input type="text" class="form-control" name="details" value="{{$feature->details}}"   placeholder="Enter details">
                            </div>
                            @error('details')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group col-md-12">
                                <label for="exampleInputTilte"> image</label>
                                <input type="file" class="form-control" name="image" value=""   >
                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <div class="form-group col-md-12 text-center">
                                <button class="btn btn-success btn-lg nextBtn btn-lg pull-right" type="submit">update</button>
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
