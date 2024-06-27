<div class="modal-body">
    <div class="container">
        <div class="row">
            <div class="slider col-lg-5 ">
                <div class="gallrey">
                    <div class="img-mian">
                        <span class="skin-Background">
                            <i class="fas fa-angle-left"></i>
                        </span>
                        <span class="skin-Background">
                            <i class="fas fa-angle-right"></i>
                        </span>
                        <img src="{{ asset('uploads/chalite/images/1.jpg') }}" alt="">
                    </div>
                    <div class="thumbnials">
                        <img class="selected" src="{{ asset('uploads/chalite/images/1.jpg') }}" alt="">
                        <img src="{{ asset('uploads/chalite/images/1.jpg') }}" alt="">
                        <img src="{{ asset('uploads/chalite/images/1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="info col-lg-7  ">
                <h3>
                    أسم الشاليه   (120$)
                </h3>
                <div class="title-data">
                    <ul class="stars list-unstyled">
                        <span class="price">العاصمة - برايفت - صف اول</span>
                    </ul>
                </div>
                <div class="title-data">
                    <ul class="stars list-unstyled">
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="tel:{{$item->phone}}" class="btn btn-success">احجز
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="" class="btn btn-success">        احجز
                            <svg style="width: 20;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                            </svg>
                        </a>
                    </div>
                    <br>
                    <div class="col-md-6 mt-2"></div>
                </div>
                <div class="cards d-flex justify-content-start">
                    <div class="order d-flex justify-content-between mr-2">
                        <i class="fas fa-award fa-1x text-info mr-2"></i>
                        <div class="order-top text-center">
                            <p>عدد طلبات الحجز:
                                <span class="ml-2 font-wieght-bold">18</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3488057.605727413!2d39.95974523749998!3d31.378117991227338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sil!4v1719317957657!5m2!1sar!2sil"
                        style="width: 100%;"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
        <div class="chart2 col-md-12">
            <h5>وصف الشاليه</h5>
            <p>هنا نضع وصف تفصيلي للشاليه</p>
        </div>
    </div>
</div>