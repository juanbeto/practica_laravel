@if(!$errors->isEmpty())
    <div class="alert alert-danger">
        <p><strong>Opps!</strong> por favor arregle el error</p>
        <ul>
            @foreach($errors->all() as $error)
                <il>{{$error}}</il>
            @endforeach
        </ul>
    </div>
@endif