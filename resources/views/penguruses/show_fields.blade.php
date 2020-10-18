<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $pengurus->nama }}</p>
</div>

<!-- Jabatan Id Field -->
<div class="form-group">
    {!! Form::label('jabatan_id', 'Jabatan Id:') !!}
    <p>{{ $pengurus->jabatan_id }}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{{ $pengurus->photo }}</p>
</div>

<!-- Divisi Id Field -->
<div class="form-group">
    {!! Form::label('divisi_id', 'Divisi Id:') !!}
    <p>{{ $pengurus->divisi_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pengurus->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pengurus->updated_at }}</p>
</div>

