@extends("layouts.master")
@section("title", "Article")
@section("content")
    <h2>All Article :)</h2>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>operation</th>
        </tr>
        </thead>
        <tbody>

        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>
                    <div class="d-flex">
                        <form action="/admin/articles/{{$article->id}}" method="post">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        <form action="/admin/articles/{{$article->id}}/edit" method="get">
                            @csrf
                            <button class="btn btn-info ml-2">Update</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
    <br>
    <p>Create New Article: </p>
    <a href="/admin/articles/create">
        <button class="btn btn-success">create</button>
    </a>
@endsection
