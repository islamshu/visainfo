@extends('layouts.backend')
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <style>
        .10pre {
            width: 10% !important
        }

        .my-tbody {
            display: block;
            overflow-x: scroll;
            width: 100%;
        }

        .stwitchh {
            width: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control"> انشاء شاليه جديد </h4>
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

                                <form class="form" method="post" action="{{ route('chalites.store') }}"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <input type="hidden" id="ccrf" value="{{ csrf_token() }}">



                                    <div class="form-body  ">
                                        <h4 class="form-section"><i class="ft-user"></i> البيانات الاساسية </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> اسم الشاليه</label>
                                                <input type="text" required name="title" class="form-control"
                                                    id="">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> الصور </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> صورة الرئيسية للشاليه </label>
                                                <input type="file" required name="thumb_image" class="form-control image"
                                                    id="">
                                                <div class="mr-4">
                                                    <img 
                                                        class="image-preview" width="70" height="70" alt="">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> صور اخرى للشاليه    </label>
                                                <input type="file" required multiple name="images[]" class="form-control "
                                                    id="image-upload">
                                                        <div id="image-preview"></div>

                                                

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> التصنيفات </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> نوع الشاليه  </label>
                                                <select name="category" id="category_id" class="form-control" required>
                                                    <option value="" disabled selected>اختر النوع</option>
                                                    <option value="برايفت">برايفت</option>
                                                    <option value="فيلا">فيلا</option>
                                                    <option value="مزرعة">مزرعة</option>
                                                    <option value="منتجع">منتجع</option>

                                                   
                                                </select>


                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> درجات الشاليه   </label>
                                                <select name="dgree"  class="form-control" required>
                                                    <option value="" disabled selected>اختر الدرجة</option>
                                                    <option value="VIP">VIP</option>
                                                    <option value="صف اول">صف اول</option>
                                                    <option value="صف ثاني">صف ثاني</option>

                                                   
                                                </select>


                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> عدد النجوم    </label>
                                                <select name="stars"  class="form-control" required>
                                                    <option value="" disabled selected>عدد النجوم </option>
                                                    <option value="1">نجمة واحدة</option>
                                                    <option value="2">نجمتان </option>
                                                    <option value="3">3 نجوم</option>
                                                    <option value="4">4 نجوم</option>
                                                    <option value="5">5 نجوم</option>

                                                   
                                                </select>


                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span>  يحتوي على مسبح؟    </label>
                                                <select name="have_pool"  class="form-control" required>
                                                    <option value="" disabled selected>اختار  </option>
                                                    <option value="1">نعم </option>
                                                    <option value="0">لا </option>

                                                   
                                                </select>


                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> المحافظة والموقع </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> المحافظة </label>
                                                        <select name="state" required class="form-control" id="governorates">
                                                            <option value="" selected disabled>اختر المحافظة</option>
                                                            <option value="الأحمدي">محافظة الأحمدي</option>
                                                            <option value="الفروانية">محافظة الفروانية</option>
                                                            <option value="الجهراء">محافظة الجهراء</option>
                                                            <option value="حولي">محافظة حولي</option>
                                                            <option value="العاصمة">محافظة العاصمة</option>
                                                            <option value="مبارك الكبير">محافظة مبارك الكبير</option>
                                                          </select>

                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> خريطة الموقع </label>
                                                        <input type="text" name="map" class="form-control" required id="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> السعر </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> السعر </label>
                                                <input type="text" required name="price" class="form-control"
                                                    id="">

                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"> قيمة الخصم ان وجد </label>
                                                <input type="number" value="0" min="0" required name="discount"
                                                    class="form-control" id="">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> التواصل </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> رقم الهاتف </label>
                                                <input type="text" required name="phone" class="form-control"
                                                    id="">

                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"> رقم الواتس اب مبدوء بمقدمة الدولة </label>
                                                <input type="text" required name="whatsapp" class="form-control"
                                                id="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> الوصف </h4>
                                        <div class="row">
                                            <div class="form-group col-md-8 ">
                                                <label class="label-control" for="projectinput1"> وصف المنتج </label>
                                                        <textarea name="description" required class="form-control" id="" cols="30" rows="10"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    




                                    <br>
                            </div>




                            <div class="form-actions left">

                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> @lang('حفظ')
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
@section('script')
   
@endsection
