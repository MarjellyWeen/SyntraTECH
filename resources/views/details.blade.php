@extends('style')
@section('detail')
<section id="content" class="content">
    <div class="container">
        <div class="row">
                <h2>{{$detailcourse->name}} (€{{$detailcourse->price}})</h2>
                <hr class="linehr">
                <div class="recap">{{$detailcourse->description}}</div>

                <div>{{$detailcourse->full}}</div>
        </div>
    </div>
</section>
@endsection