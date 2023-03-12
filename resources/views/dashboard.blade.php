<html>
<head>
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

Welcome  {{auth()->user()->name}}, <a href="{{ route('get.list') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> My watch list</a>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>Welcome to filmovizija</h4>
            <hr>
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                </thead>
                <tbody>
                <tr>
                    <td>{{auth()->user()->name}}</td>
                    <td>{{auth()->user()->email}}</td>
                   <td><form action="logout" method="post">
                       @csrf
                        <button type="submit">Logout</button>
                    </form></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
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
                    <form action="{{route('add.to.list', $movie->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning"><i class="fa fa-angle-left"></i>Add to watchlist</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
