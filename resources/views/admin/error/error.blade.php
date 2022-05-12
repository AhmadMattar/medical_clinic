@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        @if ($error == 'The patient id field is required.')
        <li>{{ 'The name field is required.' }}</li>
        @else
        <li>{{ $error }}</li>
        @endif
        @endforeach
    </ul>
</div>
@endif
