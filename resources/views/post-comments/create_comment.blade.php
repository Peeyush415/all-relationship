<form action="{{ route('post-comments.store-comment') }}" method="post">
    @csrf
    <textarea name="body" id="" cols="15" rows="3"></textarea>
    <input type="hidden" name="post_id" value="{{ (int) $post_id }}">
    <button type="submit">send...</button>
</form>
