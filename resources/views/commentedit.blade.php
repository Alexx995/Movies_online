to je to

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



<form action="{{route('coment.update', $comment)}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="text" value="{{$comment->comment}}"  id="comment"  name="comment" >
{{ csrf_field() }}
    <button type="submit">Submit</button>
</form>
