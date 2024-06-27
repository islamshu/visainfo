@foreach ($chalits as $item)
<div class="product-item col-lg-3 col-md-4 col-sm-6">
    <a href="#" style="text-decoration: none; color: inherit;" onclick="make('{{$item->id}}')"  data-toggle="modal" data-target="#staticBackdrop">
        <div class="item-head">
            <div class="ht">
                <ul class="stars list-unstyled float-left">
                    {{ get_stars($item->stars) }}
                </ul>
                <span class="price float-right bg-light">{{ $item->price }}$</span>
            </div>
            <div class="img-box">
                <img src="{{ asset('uploads/'.$item->thumb_image) }}">
            </div>
            
          
        </div>
        <div class="item-body">
            @if($item->discount > 0)

            <div class="rate rate-good">
                </i>
                يحتوي على خصم
            </div>
            @endif

            <span class="catg"> {{ $item->state }} -{{ $item->category }} - {{ $item->dgree }} </span>
            <p>
                <abbr title=" " style="text-decoration: none; ">{{ $item->title }} </abbr>
            </p>
            <ul class="icons list-unstyled">
                <li>
                    <abbr title="">
                        <i class="fad fa-bullseye-arrow"></i> 24
                    </abbr>
                </li>
                <li>
                    <abbr title="">
                        <i class="fas fa-eye"></i> {{ $item->view_num == null ? 0 : $item->view_num }}
                    </abbr>
                </li>
                <li>
                    @if($item->discount > 0)
                    <abbr title="">
                        <i class="fas fa-percent"></i> {{ $item->discount }}
                    </abbr>
                    @endif
                </li>
            </ul>
        </div>
    </a>
</div>

@endforeach