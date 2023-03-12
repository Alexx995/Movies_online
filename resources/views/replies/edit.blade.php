


    <img src="{{ $movie->image }}" alt="">
  <p>{{$movie->name}}</p>
  <p>{{$movie->imdb_rating}}</p>
    <p>{{$movie->year}}</p>


    {{$comment->parent->comment}}

    <form action="{{route('reply.update', $comment)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="text" value="{{$comment->comment}}"  id="comment"  name="new_name" >

        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>
