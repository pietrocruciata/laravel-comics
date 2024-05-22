@extends('layout.app')
@section('construct')
<div class="container">
    <div class="row">
        <h2 class="p-5">COMICS</h2>
        <div class="col gap-3 d-flex flex-wrap">

            @foreach($comics as $comic)
            <div class="card " style="width: 18rem;">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><span><strong>TITOLO: </strong></span>{{$comic['title']}}</p>
                    <p class="card-text"><span><strong>PREZZO: </strong></span>{{$comic['price']}}</p>
                    <p class="card-text"><span><strong>SERIE: </strong></span>{{$comic['series']}}</p>
                    <p class="card-text"><span><strong>USCITA: </strong></span>{{$comic['sale_date']}}</p>
                    <p class="card-text"><span><strong>TIPO: </strong></span>{{$comic['type']}}</p>
                    <p class="card-text"><span><strong>DESCRIZIONE: </strong></span>{{$comic['description']}}</p>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection