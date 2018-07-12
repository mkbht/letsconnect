@extends('layouts.app')

@section('content')
    <div class="main">

        <div class="card bg-gray">
            <div class="card-body">
                <form>
                    <textarea placeholder="Write your status..." class="form-control no-outline" rows="18"></textarea>
                    <button class="btn btn-primary float-right">POST</button>
                </form>
            </div>
        </div>

        @for($i=0;$i<10;$i++)
            <div class="card status-box">
                <div class="card-body">
                    <div class="status-header">
                        <img src="https://picsum.photos/100" class="img-thumbnail rounded-circle img-fluid avatar"/>
                        <div class="user-block">
                            <div><b>{{ Auth::user()->name }}</b></div>
                            <p class="text-black-50">{{ @Auth::user()->username }}</p>
                        </div>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
                <img alt="Card image cap" class="card-img-top" src="https://picsum.photos/300">
                <div class="card-body p-4">
                    <i class="material-icons text-muted">favorite</i>
                    <b class="like-count">2</b>
                    <i class="material-icons text-muted pl-4">comment</i>
                    <b class="like-count">2</b>
                </div>
            </div>
        @endfor


    </div>
@endsection
