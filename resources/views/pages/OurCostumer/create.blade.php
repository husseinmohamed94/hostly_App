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

                <form action="{{route('OurService.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="exampleInputTilte"> Name</label>
                            <input type="text" class="form-control"  name="Name" value="{{old('Name')}}"  placeholder="Enter name">
                        </div>
                        @error('Name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-12">
                            <label for="exampleInputTilte"> details</label>
                            <input type="text" class="form-control" name="details" value="{{old('details')}}"   placeholder="Enter details">
                        </div>
                        @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-12">
                            <label for="exampleInputTilte"> image</label>
                            <input type="file" class="form-control" name="image" value="{{old('image')}}"   >
                        </div>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-12">
                           <label for="exampleInputTilte"> name_servic</label>
                            <input type="text" class="form-control" name="name_servic" value="{{old('name_servic')}}"  placeholder="Enter name servic">
                            </div>
                        @error('name_servic')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-12">
                           <label for="exampleInputTilte"> details_servic</label>
                             <input type="text" class="form-control" name="details_servic" value="{{old('details_servic')}}"  placeholder="details_servic">
                                 </div>
                        @error('details_servic')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


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
