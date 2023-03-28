<table border="2">
    <tr>
        <td>
            <form action="{{ route('post-comments.destroy-post',[$post_id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            {{-- <a href="{{ route('post-comments.destroy-post',[$post_id]) }}"><button>Delete</button></a></td> --}}
    </tr>
    <tr>
        <td>{{ $post_title }}</td>
    </tr>
</table>
