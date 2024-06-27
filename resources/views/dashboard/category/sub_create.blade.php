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
                            <h4 class="card-title" id="basic-layout-colored-form-control"> انشاء تصنيف جديد </h4>
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

                                <form class="form" method="post" action="{{ route('categories.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf



                                    <div class="form-body  ">
                                        <h4 class="form-section"><i class="ft-user"></i> البيانات الاساسية </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> اسم الفئة</label>
                                                <input type="text" required name="name" class="form-control"
                                                    id="">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> صورة الفئة   </label>
                                                <input type="file" required name="image" class="form-control image"
                                                    id="">
                                                <div class="mr-4">
                                                    <img src="{{ asset('backend/images/icons/ltc.png') }}"
                                                        class="image-preview" width="70" height="70" alt="">
                                                </div>

                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group col-md-6 "  style="display: none">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> هل هي فئة فرعية ؟ </label>
                                               <select name="is_parent" required class="form-control" id="is_parent">
                                                <option value=""  >اختيار</option>
                                                <option value="1" selected>فئة فرعية</option>
                                                <option value="0" >فئة رئيسية</option>

                                               </select>

                                            </div>
                                            <div class="form-group col-md-6 " id="main_cats" >
                                                <label class="label-control" for="projectinput1"> فئة فرعية تابعة ل     </label>
                                                <select name="parent_id" class="form-control" id="parent_id">
                                                    <option value="" selected disabled>اختيار</option>
                                                    @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }} </option>
                                                    @endforeach
                                                   
    
                                                   </select>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#is_parent').change(function(){
                var is_parent = $(this).val();
                if(is_parent == 1){
                    $('#main_cats').css('display', 'block');
                    $('#parent_id').prop('required', true);    
                }else{
                    $('#main_cats').css('display', 'none');
                    $('#parent_id').prop('required', false);
                }
            });

        });
    </script>
@endsection
