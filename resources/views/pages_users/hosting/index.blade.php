@extends('layouts.master-fornt')
@section('title')
    hosting
@endsection
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">welcome   {{ auth()->user()->name }}</h2>

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
                    <h5 class="card-header">Hosting</h5>
                    <div class="card-body">
                        @foreach($hostings as $hosting )
                            <i class="fas fa-fw fa-shopping-bag"></i>
                                <h3 >{{$hosting->webhosting->name}}</h3>
                                <span >{{$hosting->TransactionDate }}  | تاريخ انتهاء الصلاحيه في  </span>

                        @endforeach

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>

    </div>


@endsection
@section('script')




@endsection
