
<a href="{{ route('allMovies')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Filmovizija</a>
<br><br>
<div class="row">

    <div class="col-xs-18 col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="{{ $movie->image }}" alt="">
            <div class="caption">
                <h4>{{ $movie->name }}</h4>
                <p>{{ $movie->imdb_rating }}</p>
                <p><strong>Year: </strong> {{ $movie->year }}</p>

            </div>
        </div>
    </div>
</div>


<h4>{{$comment->comment}}</h4>
<p>{{$comment->user->name}}</p>
<p>{{$comment->created_at}}</p>


<hr>

<form action="{{route('add.response', $comment)}}" method="POST">
    <input type="hidden" name="_method" value="POST">
    <input type="text" id="response"  name="response" >
    {{ csrf_field() }}
    <button type="submit">Submit</button>
</form>





{{--@foreach ($comment as $commen)--}}

        @if ($comment->replies->count() > 0)
            @foreach ($comment->replies as $reply)

                <div class="reply">
                    <hr>
                                {{ $reply->comment }}<br>
                                {{ $reply->user->name }}<br>
                                {{ $reply->created_at }}

                    @if ($reply->user->id == Auth::user()->id)
                        <a href="{{ route('reply.edit', $reply)}}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{route('comment.destroy', $reply)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-danger" value="Delete" name="delete"/>
                        </form>

                    @endif

                </div>
            @endforeach
        @endif
{{--@if ($comment->user->id == Auth::user()->id)--}}
{{--    <a href="{{ route('response.edit', $comment)}}">--}}
{{--        @csrf--}}
{{--        <button type="button" class="btn btn-warning">Edit</button>--}}
{{--    </a>--}}

{{--@endif--}}
{{--@endforeach--}}
