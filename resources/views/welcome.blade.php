<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('front/libs/jquery-nice-select-1.1.0/css/nice-select.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
        integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
    <link rel="stylesheet"
        href="{{ asset('front/libs/fontawesome-pro-5.14.0/fontawesome-pro-5.14.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/libs/daterangepicker-master/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" type="text/css">
    <link rel="apple-touch-icon" href="{{ asset('uploads/'.get_general_value('icon')) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/'.get_general_value('icon')) }}">
    <title>{{ get_general_value('title') }}</title>
    <style>
        #loader {
            position: fixed; /* Stay in place */
            z-index: 999; /* Sit on top */
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
        }
    </style>
    <style>
        .nice-select {
            text-align: right !important;
        }

        .nice-select .option {
            text-align: right !important;
        }

        footer {
            background-color: rgb(66, 182, 197);
        }

        .navbar-custom {
            background-color: rgb(66, 182, 197);
            /* Light pink background */
            color: #333;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            max-height: 790px;
        }

        .navbar-nav .nav-link {
            color: #333 !important;
            margin-right: 15px;
        }

        .form-inline .form-control {
            width: 250px;
            border-radius: 20px;
        }

        .form-inline .btn {
            color: #fff;
            background-color: #ff6f61;
            /* Light coral */
            border: none;
            border-radius: 20px;
        }

        .navbar-toggler {
            border: none;
            outline: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%2833, 37, 41, 0.8%29' stroke-width='2' linecap='round' linejoin='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        footer {
            background-color: #00bcd4;
            color: white;
            padding: 40px 0;
        }

        footer h4 {
            margin-bottom: 20px;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 10px;
        }

        footer ul li a {
            color: white;
            text-decoration: none;
        }

        footer ul li a:hover {
            text-decoration: underline;
        }

        footer a i {
            margin-right: 10px;
        }
    </style>
</head>

<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('uploads/'.get_general_value('image')) }}" alt="Logo">
            <!-- Replace 'logo.png' with the path to your logo image -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline mx-auto my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="أدخل كلمة البحث" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">بحث</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    @auth
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fa fa-lock"></i>  تسجيل خروج
                    </a>
                    @else
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa fa-user"></i> تسجيل الدخول
                    </a>
                    @endauth
                    
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-info text-white pt-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('uploads/'.get_general_value('image')) }}" width="200px" alt="Logo" class="img-fluid mb-2">
                </div>
                <div class="col-md-4">
                    <h4>روابط مهمة </h4>
                    <ul class="list-unstyled" style="display: block;">
                        <li>
                            <a href="/" class="text-white">الرئيسية</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="text-white">من نحن </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="text-white">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4> تواصل معنا</h4>
                    @if(get_general_value('facebook') != null) 
                    <a href="{{ get_general_value('facebook') }}" class="text-white mr-2">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    @endif
                    @if(get_general_value('twitter') != null) 
                    <a href="{{ get_general_value('twitter') }}" class="text-white mr-2">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    @endif
                    @if(get_general_value('instagram') != null) 
                    <a href="{{ get_general_value('instagram') }}" class="text-white mr-2">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    @endif
                    
                </div>
            </div>
        </div>
    </footer>
    <div id="loader" style="display: none"><img src="{{ asset('backend/images/icons/loading.gif') }}" alt=""></div>

    <!-- Footer -->
    <!-- Footer -->
    <script src="{{ asset('front/libs/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('front/libs/jquery-nice-select-1.1.0/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('front/libs/moment-with-locales.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('front/libs/fontawesome-pro-5.14.0/fontawesome-pro-5.14.0-web/js/all.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"
        integrity="sha512-tMabqarPtykgDtdtSqCL3uLVM0gS1ZkUAVhRFu1vSEFgvB73niFQWJuvviDyBGBH22Lcau4rHB5p2K2T0Xvr6Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('front/libs/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('front/libs/daterangepicker-master/daterangepicker.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <script>
        function make(id) {

            $('#staticBackdrop').modal();
            $('.c-preloader').show();
            $("#loader").show()


            $.ajax({
                type: 'post',
                url: "{{ route('showShaliteModal') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                },

                success: function(data) {

                    $("#loader").hide()

                    $('#import_modal').html(data);


                }
            });

        }
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() + 1 >= $(document).height()) {

                // page++;
                loadMoreData();


        }
        });
        var page = 2;
        var offset = 12;


        function loadMoreData() {
            // let post_type = $('#post_type :selected').val();
            let category = $('#category :selected').val();
            let have_pool = $('#have_pool :selected').val();
            let state = $('#state :selected').val();
            let stars = $('#stars :selected').val();
            let have_discount = $('#have_discount :selected').val();
            let dgree = $('#dgree :selected').val();

            $.ajax({
                    url: '?page=' + page + '&offset=' + offset,
                    type: "get",
                    data: {
                        'category': category,
                        'have_pool': have_pool,
                        'state': state,
                        "stars": stars,
                        'have_discount': have_discount,
                        "dgree": dgree,

                    },

                    beforeSend: function() {
                        $("#loader").show()
                    }
                })
                .done(function(data) {
                    if (data.count == 0) {
                        $('#disblyarea').css("display", "block");
                    }
                    $("#loader").hide();
                    $("#post-data").append(data.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('server not responding...');
                });
            page++;
        }
    </script>
    <script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>
