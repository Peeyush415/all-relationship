@extends('layouts.app')

@section('title','Create Post and Comments')

@section('content')
    <table border="5">
        <form action="{{ route('post-comments.store-post') }}" method="post">
            @csrf
            <tr>
                <th>Title</th>
                <td><input type="text" name="title"/></td>
            </tr>
            <tr>
                <th>Content</th>
                <td><textarea name="body" id="" cols="30" rows="10"></textarea></td>
            </tr>

            <tr>
                <td colspan="2"><button type="submit">Create Post</button></td>
            </tr>

        </form>
    </table>
@endsection
