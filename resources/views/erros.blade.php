@if ($errors->any())
    <div class="alert alert-danger col-3 mx-auto mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style: none">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif