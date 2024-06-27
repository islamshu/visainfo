@extends('welcome')
@section('content')
<div class="container">
    <div class="main">
        <div class="container">
            <h2>تواصل معنا</h2>

            <div class="filter rounded">
                @include('dashboard.parts._error')
                @include('dashboard.parts._success')

    <form action="{{ route('contact_post') }}" method="post">
        @method('post')
        @csrf
        <div class="row">
            <div class="col-md-8 mt-2">
                <label class="form-lable" for="">الاسم  </label>
                <input type="text" value="{{ old('name') }}" required class="form-control" name="name" id="">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8 mt-2">
                <label class="form-lable" for=""> البريد الاكتروني</label>
                <input type="email" value="{{ old('email') }}" required class="form-control" name="email" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mt-2">
                <label class="form-lable" for=""> العنوان</label>
                <input type="text" value="{{ old('title') }}" required class="form-control" name="title" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mt-2">
                <label class="form-lable" for="">الموضوع</label>
                <textarea name="body" required class="form-control" id="" cols="5" rows="5">{{ old('body') }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mt-4">
                <input type="submit"  class="form-control text-center btn btn-info"  value="ارسال" id="">
            </div>
        </div>
        
    </form>
</div>
</div>
</div>
</div>
@endsection
