<!-- Nama Lengkap Field -->
<div class="form-group">
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    <p>{{ $kontak->nama_lengkap }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $kontak->email }}</p>
</div>

<!-- Isi Field -->
<div class="form-group">
    {!! Form::label('isi', 'Isi:') !!}
    <p>{{ $kontak->isi }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $kontak->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $kontak->updated_at }}</p>
</div>

