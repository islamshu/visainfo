@extends('welcome')
@section('content')
    <div class="container mb-10">
        <div class="main">
            <div class="container">
                <h2>من نحن </h2>

                <div class="filter rounded">

                    {!! get_general_value('description') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
