<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{{ $galeriKomunitas->photo }}</p>
</div>

<!-- Komunitas Id Field -->
<div class="form-group">
    {!! Form::label('komunitas_id', 'Komunitas Id:') !!}
    <p>{{ $galeriKomunitas->komunitas_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $galeriKomunitas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $galeriKomunitas->updated_at }}</p>
</div>

