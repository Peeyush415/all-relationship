@extends('layouts.app')

@section('title','Post-Comments 1-M Relationship')

@section('content')
    <table border="2">
        <tr>
            <th>Post
                <a href="{{ route('post-comments.create-post') }}"><button>New Post</button></a>
            </th>
            <th>Body</th>
            <th>All Comments</th>
        </tr>
        @foreach ($posts as $post )
            <tr>
                <td>@include('post-comments.post',['post_title' => $post->title,'post_id' => $post->id])</td>
                <td>{{ $post->body }}</td>
                <td>
                    <ol>
                        @foreach ($post->comments  as $comment )
                            <li>{{ $comment->body }}</li>
                        @endforeach
                            <li>
                                {{-- @include('post-comments.create_comment',['post_id' => $post->id]) --}}

                                @include('post-comments.create_comment',['post_id' => $post->id])
                            </li>
                    </ol>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
