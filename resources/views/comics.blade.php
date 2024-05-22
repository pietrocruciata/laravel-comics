@extends('layout.app')
@section('construct')
<div class="container">
    <div class="row">
        <h2 class="p-5">COMICS</h2>
        <div class="col gap-3 d-flex flex-wrap">

            @foreach($comics as $comic)
            <div class="card border border-0" style="width: 18rem;">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="..." style="height:350px">
                <div class="card-body text-bg-dark">
                    <p class="card-text"><span><strong>TITOLO: </strong></span>{{$comic['title']}}</p>
                    <p class="card-text"><span><strong>SERIE: </strong></span>{{$comic['series']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection