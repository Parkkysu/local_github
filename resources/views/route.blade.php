{{ $id }}

<form action='/api/post' method="POST">
    @csrf
    <input type='text' name='name'>
    <input type='submit'></submit>
</form>
