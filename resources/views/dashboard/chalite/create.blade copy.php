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
                            <h4 class="card-title" id="basic-layout-colored-form-control"> انشاء منتج جديد </h4>
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

                                <form class="form" method="post" action="{{ route('products.store') }}"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <input type="hidden" id="ccrf" value="{{ csrf_token() }}">



                                    <div class="form-body  ">
                                        <h4 class="form-section"><i class="ft-user"></i> البيانات الاساسية </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> اسم المنتج</label>
                                                <input type="text" required name="title" class="form-control"
                                                    id="">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> صورة الرئيسية للمنتج </label>
                                                <input type="file" required name="image" class="form-control image"
                                                    id="">
                                                <div class="mr-4">
                                                    <img src="{{ asset('backend/images/icons/spinner.gif') }}"
                                                        class="image-preview" width="70" height="70" alt="">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> التصنيفات </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"><span
                                                        class="required">*</span> التصنيف الرئيسي </label>
                                                <select name="category_id" id="category_id" class="form-control" required>
                                                    <option value="" disabled selected>اختر التصنيف</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>


                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label class="label-control" for="projectinput1"> الفئة الفرعية </label>
                                                <select name="sub_category_id" id="sub_category_id" class="form-control"
                                                    required>

                                                </select>

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
                                        <h4 class="form-section"><i class="ft-user"></i> الخصائص </h4>
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <div class="row">
                                                    <h5>اللون والحجم</h5>
                                                    <div class="form-group col-md-4">
                                                        <select class="form-control color0 " name="colors[]"
                                                            multiple data-id="0" id="colors_data0">
                                                            @foreach (App\Models\Color::get() as $item)
                                                                <option value="{{ $item->name }}"
                                                                    style="background:{{ $item->name }}">
                                                                    {{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <h5>عدد المخزون</h5>
                                                    <div class="form-group col-md-4">
                                                        <select class="form-control size0 " name="sizes[]"
                                                            id="sizes" data-id="0" multiple>
                                                            <option value="xl">XL</option>
                                                            <option value="xxl">XXL</option>
                                                            <option value="sm">SM</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="row" id="generated_inputs">

                                           
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
        var v = 0;
      
        $('#colors_data0,  #sizes').change(function() {
            $('#generated_inputs').empty();
            var colors = $('#colors_data0').val();
            var sizes = $('#sizes').val();
            if (colors && sizes) {
                colors.forEach(function(color) {
                    sizes.forEach(function(size) {
                        var inputs = `<div class="form-group col-md-3 ">
                                    <label class="label-control" for="projectinput1"><span style="color:` + color + `"> اللون  ` + color +
                                                        `  الحجم ` + size + `</span> </label>
                                    <input type="text" required="" readonly value="` + color + '_' + size + `" name="color_size[` + v + `]" class="form-control" id="">  
                                    </div>
                                    <div class="form-group col-md-3 ">
                                    <label class="label-control" for="projectinput1"><span class="required"></span> قيمة المخزون </label>
                                    <input type="number" min="0" required="" value="0" name="color_storege[` + v + `]" class="form-control" id="">  
                                    </div>`
                                     v++;

                                    $('#generated_inputs').append(inputs);
                    });

                });

            }
        });
        $('#category_id').change(function() {

            var ccrf = $('#ccrf').val();
            $.ajax({
                url: "{{ route('get_sub_cats') }}",
                type: 'post',
                data: {
                    '_token': ccrf,
                    'id': $(this).val()
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);

                    $('#sub_category_id').html(new Option('اختر التصنيف الفرعي', ''));
                    for (var i = 0; i < data.length; i++) {

                        $('#sub_category_id').append(new Option(data[i].name,
                            data[i].id));

                    }

                },
                error: function(xhr, status, error) {
                    // Handle error
                }
            })
        });
        var i = 1;
        $('#dublicate_row').click(function() {
            var newRow = `  <div class="row row` + i + `">
                                                    
                                                    <h5>اللون
                                                    </h5>
                                                    <input type="hidden" name="attr[` + i + `][type]" value="color" id="">
                                                    <div class="form-group col-md-4">
                                                        <select class="form-control "  name="attr[` + i +
                `][value]" id="colors"  >
                                                            @foreach (\App\Models\Color::orderBy('name', 'asc')->get() as $key => $color)
                                                            <option  value="{{ $color->code }}" style='background:{{ $color->code }}' >{{ $color->name }}</option>
                                                            @endforeach
                                                        </select>                                                      
                                                    </div>
                                                    <h5>عدد المخزون
                                                      </h5>
                                                      <div class="form-group col-md-4">
                                                        <input type="number" min="1" class="form-control" name="attr[` +
                i + `][storage]" placeholder="قيمة المخزون"/>
                                                      </div>
                                                      <div class="form-group col-md-2">
                                                        <button type="button" class="btn btn-danger" onclick="make(` +
                i + `)">-</button>
                                                        </div>
                                                </div> `;
            i++;

            $('.duplicated').append(newRow);
            $(document).on('click', '.removebtn', function() {
                $(this).closest('tr').remove();
            });
        });
        $(document).on('click', '.remove-roww', function() {
            $(this).closest('tr').remove();
        });

        function make(i) {
            var rrow = '.row' + i
            $(rrow).remove();
        }

        function make_i(i) {
            var cl = '.size' + i;
            var color = '.color' + i;
            var color_val = $(color).val();
            var testt;
            $(cl).val().forEach(element => {
                var val = color_val + '_' + element;
                //  alert(val);
                var testt = +`<div class="form-group col-md-4">

<h5>` + val + `
</h5>

                 <input type="text" value ="` + val + `" calss="form-control"/>
                 </div>`;
                $('.color_size').empty();

            });
            $('.color_size').append(testt);



            // alert( $(cl).val());
        }

        var j = 1;
        $('#dublicatesize_row').click(function() {
            var newRow = `  <div class="row rowsize` + j + `">
                                                    
                                                    <h5>المقاسات
                                                    </h5>
                                                    <input type="hidden" name="size[` + j + `][type]" value="color" id="">
                                                    <div class="form-group col-md-4">
                                                        <select class="form-control "  name="size[` + j +
                `][value]" id="colors"  >
                                                            @foreach (\App\Models\Size::orderBy('name', 'desc')->get() as $key => $size)
                                                            <option  value="{{ $size->name }}" style='background:{{ $size->name }}' >{{ $size->name }}</option>
                                                            @endforeach
                                                        </select>                                                      
                                                    </div>
                                                    <h5>عدد المخزون
                                                      </h5>
                                                      <div class="form-group col-md-3">
                                                        <input type="number" min="1" class="form-control" name="size[` + j + `][storage]" placeholder="قيمة المخزون"/>
                                                      </div>
                                                      <div class="form-group col-md-2">
                                                        <button type="button" class="btn btn-danger" onclick="makee(` +
                j + `)">-</button>
                                                        </div>
                                                </div> `;
            i++;

            $('.duplicatedsize').append(newRow);
            $(document).on('click', '.removebtn', function() {
                $(this).closest('tr').remove();
            });
        });
        $(document).on('click', '.remove-roww', function() {
            $(this).closest('tr').remove();
        });

        function makee(i) {
            var rrow = '.rowsize' + i
            $(rrow).remove();
        }
    </script>
@endsection
