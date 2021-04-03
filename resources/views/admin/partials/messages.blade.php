@if ($errors->any())
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif