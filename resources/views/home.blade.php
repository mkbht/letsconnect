@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="card bg-gray">
            <div class="card-body">
                <form method="post" action="{{ route('post.store') }}">
                    @csrf
                    <textarea name="content" placeholder="Write your status..." class="form-control no-outline"
                              rows="18"></textarea>
                    <button class="btn btn-primary float-right" type="submit">POST</button>
                </form>
            </div>
        </div>
        <div id="status-list">
            @foreach($posts as $post)
                <div class="card status-box">
                    <div class="card-body">
                        <div class="status-header">
                            <img src="https://picsum.photos/100" class="img-thumbnail rounded-circle img-fluid avatar"/>
                            <div class="user-block">
                                <div><b>{{ $post->user->name }}</b></div>
                                <p class="text-black-50">{{ $post->user->username }}</p>
                            </div>
                        </div>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    @if($post->image != null)
                        <img alt="Card image cap" class="card-img-top"
                             src="'{{ asset('tmp/'. $post->image) }}">
                    @endif
                    <div class="card-body p-4">
                        <i class="material-icons text-muted">favorite</i>
                        <b class="like-count">0</b>
                        <i class="material-icons text-muted pl-4">comment</i>
                        <b class="like-count">0</b>
                        <span class="float-right">{{ $post->sentiment['category'] }}</span>
                        <div class="progress pt-4">
                            <div class="progress-bar bg-success"
                                 style="width:{{ $post->sentiment['score']['positivity'] }}%">

                            </div>
                            <div class="progress-bar bg-danger"
                                 style="width: {{ $post->sentiment['score']['negativity'] }}%">

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {!! $posts->links()  !!}
        {{--        {{ dd($posts) }}--}}


    </div>
@endsection

@section('vue-scripts')
    <script>
        new Vue({
            el: '#app',
            data: {
                posts: {!! json_encode($posts) !!},
                busy: false,
            },
            methods: {
                loadMore: function () {
                    this.busy = true;

                    setTimeout(() => {
                        this.busy = false;
                    }, 1000);
                }
            }
        })
    </script>
@endsection
