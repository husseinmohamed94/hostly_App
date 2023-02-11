@extends('layouts.master')
@section('title')
    Out Service
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
                                <li class="breadcrumb-item"><a href="{{route('OurService.index')}}" class="breadcrumb-link"> Out Service</a></li>
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

                    <form action="{{route('OurService.update', $ourservice->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-row">

                            <input type="hidden" value="{{$ourservice->image}}" name="oldimage">
                            <div class="form-group col-md-12">
                                <label for="exampleInputTilte"> Name</label>
                                <input type="text" class="form-control"  name="Name" value="{{$ourservice->Name}}"  placeholder="Enter name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputTilte"> details</label>
                                <input type="text" class="form-control" name="details" value="{{$ourservice->details}}"   placeholder="Enter details">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="exampleInputTilte"> image</label>
                                <input type="file" class="form-control" name="image"    >
                            </div>


                            <div class="form-group col-md-12">
                                <label for="exampleInputTilte"> name_servic</label>
                                <input type="text" class="form-control" name="name_servic" value="{{$ourservice->name_servic}}"  placeholder="Enter name servic">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputTilte"> details_servic</label>
                                <input type="text" class="form-control" name="details_servic" value="{{$ourservice->details_servic}}"  placeholder="details_servic">
                            </div>

                            <div class="form-group col-md-12 text-center">
                                <button class="btn btn-success btn-lg nextBtn btn-lg pull-right" type="submit">save</button>
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
