@extends('welcome')
@section('content')
<div class="container">
    <div class="main">
        <div class="container">
            <div class="filter rounded">
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <div class="row">
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-between align-items-lg-center">
                                <i class="fad fa-database fa-2x text-info"></i>
                                <select id="state">
                                    <option value="" data-display="المحافظة">المحافظة</option>
                                    <option value="الأحمدي">محافظة الأحمدي</option>
                                    <option value="الفروانية">محافظة الفروانية</option>
                                    <option value="الجهراء">محافظة الجهراء</option>
                                    <option value="حولي">محافظة حولي</option>
                                    <option value="العاصمة">محافظة العاصمة</option>
                                    <option value="مبارك الكبير">محافظة مبارك الكبير</option>
                                </select>
                            </div>
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-between align-items-lg-center">
                                <i class="fad fa-star fa-2x text-info"></i>
                                <select id="stars">
                                    <option data-display="التقيم بناء على عدد النجوم"></option>
                                    <option value="1">نجمة واحدة</option>
                                    <option value="2">نجمتان </option>
                                    <option value="3">3 نجوم</option>
                                    <option value="4">4 نجوم</option>
                                    <option value="5">5 نجوم</option>

                                </select>
                            </div>
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-between align-items-lg-center">
                                <i class="fas fa-th fa-2x text-info"></i>
                                <select id="category">
                                    <option data-display="النوع"> </option>
                                    <option value="برايفت">برايفت</option>
                                    <option value="فيلا">فيلا</option>
                                    <option value="مزرعة">مزرعة</option>
                                    <option value="منتجع">منتجع</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="row">
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-between align-items-lg-center">
                                <i class="fad fa-database fa-2x text-info"></i>
                                <select id="have_pool">
                                    <option value="" data-display="يحتوي على مسبح"></option>
                                    <option value="1"> نعم</option>
                                    <option value="0"> لا</option>
                                </select>
                            </div>
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-between align-items-lg-center">
                                <i class="fad fa-percent fa-2x text-info"></i>
                                <select id="have_discount">
                                    <option value="" data-display="يوجد خصم او لا"></option>
                                    <option value="yes"> نعم </option>
                                    <option value="no"> لا </option>
                                </select>
                            </div>
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-between align-items-lg-center">
                                <i class="fad fa-umbrella-beach fa-2x text-info"></i>
                                <select id="dgree">
                                    <option value="" data-display= "درجة الشاليه"></option>
                                    <option value="VIP">VIP</option>
                                    <option value="صف اول">صف اول</option>
                                    <option value="صف ثاني">صف ثاني</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12 mt-3">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button class="btn btn-info">ابحث</button>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
        <div class="products">
            <div class="container">
                <div class="row" id="post-data">
                    @include('chalits')

                </div>
                <div id="disblyarea" style="display: none">
                    <div class="container">
                        <p style="text-align: center;font-size: 30px">لا يوجد نتائج</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="import_modal"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection