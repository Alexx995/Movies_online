<head>
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<h4>Welcome  {{auth()->user()->name}}, This is your watch list </h4>
<br><br>

<a href="{{ route('allMovies')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Filmovizija</a>
<br><br>
{{--@foreach($movies as $movie)--}}
{{--    {{ $movie->name }} - {{ $movie->imdb_rating }}--}}
{{--    <br>--}}
{{--@endforeach--}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row">
    @foreach($movies as $movie)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $movie->image }}" alt="">
                <div class="caption">
                    <a href="{{ route('get.movie', $movie->id) }}" ><i class="fa fa-angle-left"></i>{{ $movie->name }}</a>
                    <p>{{ $movie->imdb_rating }}</p>
                    <p><strong>Year: </strong> {{ $movie->year }}</p>
                    <form action="{{route('delete.movie', $movie->id)}}" method="post">
                        @method('delete') @csrf
                        <button type="submit" class="btn btn-warning"><i class="fa fa-angle-left"></i>Delete from watchlist</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

