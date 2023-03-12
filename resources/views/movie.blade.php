

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
{{--                    <form action="{{route('delete.movie', $movie->id)}}" method="post">--}}
{{--                        @method('delete') @csrf--}}
{{--                        <button type="submit" class="btn btn-warning"><i class="fa fa-angle-left"></i>Delete from watchlist</button>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
</div>


<form action="{{route('add.comment', $movie->id)}}" method="post">
     @csrf
    <textarea name="comment" rows="5" cols="50" placeholder="Write comment" > </textarea>
    <input type="submit" value="Add comment">
</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


@foreach ($comments as $comment)

    <hr><p>{{$comment->user->name}}</p>
    <p>{{$comment->updated_at}}</p>
   <b><p>{{$comment->comment}}</p></b>
 <p>{{$comment->replies->count()}} comments response </p>
    <a href="{{ route('comment.response', $comment)}}">
        @csrf
        <button type="button" class="btn btn-warning">Response</button>
    </a>
    @if ($comment->user->id == Auth::user()->id)
    <a href="{{ route('comment.edit', $comment)}}">
        @csrf
        <button type="button" class="btn btn-warning">Edit</button>
    </a>
    <form action="{{route('comment.destroy', $comment)}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-danger" value="Delete" name="delete"/>
    </form>

    @endif



@endforeach

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

