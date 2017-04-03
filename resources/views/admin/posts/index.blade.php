@extends('layouts.admin')

@section('content')

  <h1>Posts</h1>

  <table class="table">
    <thead>
    <tr>
      <th>Id</th>
      <th>Photo</th>
      <th>Owner</th>
      <th>Category ID</th>
      <th>Title</th>
      <th>Body</th>
      <th>Created</th>
      <th>Updated</th>
    </tr>
    
    @if($posts)
      @foreach($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td><img src="{{$post->photo->name}}" alt="" width="50px"></td>
          <td>{{$post->user->name}}</td>
          <td>{{$post->category_id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->body}}</td>
          <td>{{$post->created_at->diffForHumans()}}</td>
          <td>{{$post->updated_at->diffForHumans()}}</td>
        </tr>
      @endforeach
    @endif
    </thead>
  </table>

@stop