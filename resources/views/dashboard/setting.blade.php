@extends('layouts.backend')
@section('content')
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control"> الاعدادات العامة </h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                @include('dashboard.parts._error')
                                @include('dashboard.parts._success')

                                <form class="form" method="post" action="{{ route('get_setting_post') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>صورة الموقع</label>
                                                <input type="file" name="general_file[image]" class="form-control image">
                                                <div class="form-group">
                                                    <img src="{{ asset('uploads/' . get_general_value('image')) }}"
                                                        style="width: 100px" class="img-thumbnail " alt="">
                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <label>ايقونة الموقع</label>
                                                <input type="file" name="general_file[icon]" class="form-control image">
                                                <div class="form-group">
                                                    <img src="{{ asset('uploads/' . get_general_value('icon')) }}"
                                                        style="width: 100px" class="img-thumbnail" alt="">
                                                </div>
                                            </div>

                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>اسم الموقع </label>
                                                <input type="string" name="general[title]"
                                                    value="{{ get_general_value('title') }}" class="form-control">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>رابط الفيسبوك  </label>
                                                <input type="string" name="general[facebook]"
                                                    value="{{ get_general_value('facebook') }}" class="form-control">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>رابط انستجرام  </label>
                                                <input type="string" name="general[instagram]"
                                                    value="{{ get_general_value('instagram') }}" class="form-control">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>رابط تويتر  </label>
                                                <input type="string" name="general[twitter]"
                                                    value="{{ get_general_value('twitter') }}" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">


                                            <div class="col-md-8">
                                                <label> من نحن</label>
                                                <textarea name="general[description]" rows="10" class="form-control ckeditor ">{{ get_general_value('description') }}</textarea>
                                            </div>

                                        </div>
                                        
                                        <br>




                                        <br>


                                    </div>



                                    <div class="form-actions left">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> @lang('save')
                                        </button>
                                        </button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </section>

    </div>
@endsection
