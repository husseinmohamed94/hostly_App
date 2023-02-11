@extends('layouts.master')
@section('title')
    Domain
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
                            <li class="breadcrumb-item"><a href="{{route('Domain.index')}}" class="breadcrumb-link"> Domin </a></li>
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

                <form action="{{route('Domain.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="exampleInputTilte"> name</label>
                            <input type="text" class="form-control"  name="name" value="{{old('name')}}"  placeholder="Enter name">
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-12">
                            <label for="exampleInputTilte"> details</label>
                            <input type="text" class="form-control" name="details" value="{{old('details')}}"   placeholder="Enter details">
                        </div>
                        @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="form-group col-md-6">
                            <label for="exampleInputTilte"> Duration</label>
                            <select class="form-control" name="Duration">
                                <option selected  disabled value="">choese</option>
                                <option value="month">month</option>
                                <option value="year">year</option>

                            </select>

                        </div>
                        @error('Duration')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-3">
                            <label for="exampleInputTilte"> price</label>
                            <input type="text" class="form-control" name="price" value="{{old('price')}}"  placeholder="price"
                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                        @error('price')
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
