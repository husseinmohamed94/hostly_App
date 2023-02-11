@extends('layouts.master')
@section('title')
  Setting
@endsection
@section('content')


<div class="container">
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">setting</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">slideshow</a></li>
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




        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post" action="{{route('Setting.update','test')}}">
                                @csrf @method('PUT')
                                <div class="row">
                                    <div class="col-md-12 border-right-2 border-right-blue-400">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold">Name Site<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input name="Name_site" value="{{ $setting['Name_site']}}" required type="text" class="form-control" placeholder="Name of site">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold">  Hostly title</label></br>
                                            <div class="col-lg-9">
                                                <input name="Hostly_title" value="{{ $setting['Hostly_title'] }}" type="text" class="form-control" placeholder="School Acronym">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold">Phone : </label><br>
                                            <div class="col-lg-9">
                                                <input name="phone" value="{{ $setting['phone'] }}" type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Hoslty email </label>
                                            <div class="col-lg-9">
                                                <input name="Hoslty_email" value="{{ $setting['Hoslty_email'] }}" type="email" class="form-control" placeholder="Hoslty Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Address<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="address" value="{{ $setting['address'] }}" type="text" class="form-control" placeholder="Hostly Address">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold">logo:</label>
                                            <div class="col-lg-9">
                                                <div class="mb-3">
                                                    <img style="width: 100px"  height="100px" src="{{ URL::asset('upload/logo/'.$setting['logo']) }}" alt="">
                                                </div>
                                                <input name="logo" accept="image/*" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-fouc>
                                            </div>
                                        </div>



                                        <!-- start Our_Services -->

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Our Services<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Our_Services" value="{{ $setting['Our_Services'] }}" type="text" class="form-control" placeholder="Our Services">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Our Services datils<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Our_Services_datils" value="{{ $setting['Our_Services_datils'] }}" type="text" class="form-control" placeholder="Our Services datils">
                                            </div>
                                        </div>

                                        <!-- end Our_Services -->


                                        <!-- start Cloud Host  -->
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Cloud Hosting<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Cloud_Host" value="{{ $setting['Cloud_Host'] }}" type="text" class="form-control" placeholder="Cloud Host">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Cloud Host ditals<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Cloud_Host_dat" value="{{ $setting['Cloud_Host_datils'] }}" type="text" class="form-control" placeholder="Cloud_Host_dat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold">Cloud Host image:</label>
                                            <div class="col-lg-9">
                                                <div class="mb-3">
                                                    <img style="width: 100px"  height="100px" src="{{ URL::asset('upload/CloudHosting/'.$setting['Cloud_Host_image']) }}" alt="">
                                                </div>
                                                <input name="Cloud_Host_image" accept="image/*" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-fouc>
                                            </div>
                                        </div>
                                        <!-- end Cloud Host  -->


                                        <!-- start Our _costumers -->
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Our costumers<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Our_Services" value="{{ $setting['Our_costumers'] }}" type="text" class="form-control" placeholder="Our_costumers">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Our costumers datils<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Our_Services_datils" value="{{ $setting['Our_costumers_datils'] }}" type="text" class="form-control" placeholder="Our costumers datils">
                                            </div>
                                        </div>
                                        <!-- end  Our costumers -->

                                        <!-- start Our_Domain -->
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Our Domain<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Our_Domain" value="{{ $setting['Our_Domain'] }}" type="text" class="form-control" placeholder="Our Domain">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Our Domain datils<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Our_Domain_datils" value="{{ $setting['Our_Domain_datils'] }}" type="text" class="form-control" placeholder="Our Domain  datils">
                                            </div>
                                        </div>
                                        <!-- end Our_Domain -->


                                        <!-- start Enjoy_Feature -->
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Enjoy  Feature<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Enjoy_Feature" value="{{ $setting['Enjoy_Feature'] }}" type="text" class="form-control" placeholder="Enjoy_Feature">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold">  EnjoyFeature datils<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Enjoy_Feature_datils" value="{{ $setting['Enjoy_Feature_datils'] }}" type="text" class="form-control" placeholder="Enjoy_Feature_datils">
                                            </div>
                                        </div>
                                        <!-- end Enjoy_Feature -->

                                        <!-- start Frequently Asked -->
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold"> Frequently Asked<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <label>
                                                    <input required name="Enjoy_Feature" value="{{ $setting['Frequently_Asked'] }}" type="text" class="form-control" placeholder="Frequently Asked">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label font-weight-semibold">  Frequently Asked datils<span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input required name="Enjoy_Feature_datils" value="{{ $setting['Frequently_Asked_datils'] }}" type="text" class="form-control" placeholder="Frequently Asked datils">
                                            </div>
                                        </div>
                                        <!-- end Frequently Asked -->





                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right " type="submit">update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->
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
