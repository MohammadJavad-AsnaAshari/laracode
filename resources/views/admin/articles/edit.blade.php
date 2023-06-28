@extends("layouts.master")
@section("content")
    <h2>Edit Article :)</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/admin/articles/{{$article->id}}" method="post">
        @csrf
        @method("put")
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" name="title" class="form-control" value="{{$article->title}}">
            <br>
        </div>
        <div class="form-group">
            <label for="body">Body: </label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
            <br>
        </div>
        <button class="btn btn-info">Update</button>
    </form>
@endsection
