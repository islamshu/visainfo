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
                            <h4 class="card-title" id="basic-layout-colored-form-control"> طلبات التواصل   </h4>
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

                                <form 
                                    enctype="multipart/form-data">
                                   



                                    <div class="form-body  ">
                                        <h4 class="form-section"><i class="ft-user"></i> بيانات الطلب  </h4>
                                        <div class="row">
                                            <div class="form-group col-md-8 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> اسم المرسل</label>
                                                <input type="text" value="{{ $contact->name }}" readonly name="name" class="form-control"
                                                    id="">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> البريد الاكتروني    </label>
                                                <input type=text" value="{{ $contact->email }}" readonly  name="image" class="form-control image"
                                                    id="">
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> عنوان الموضوع     </label>
                                                <input type=text" value="{{ $contact->title }}" readonly  name="image" class="form-control image"
                                                    id="">
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> البريد الاكتروني    </label>
                                                        <textarea readonly class="form-control" id="" cols="30" rows="10">{{ $contact->body }}</textarea>
                                               
                                               
                                            </div>
                                        </div>
                                        
                                    </div>
                                    

                                    <br>
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
