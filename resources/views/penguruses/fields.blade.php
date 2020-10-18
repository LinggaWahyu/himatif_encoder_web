<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_id', 'Jabatan:') !!}
    {!! Form::select('jabatan_id', $jabatanPengurus, null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo') !!}
</div>
<div class="clearfix"></div>

<!-- Divisi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('divisi_id', 'Divisi:') !!}
    {!! Form::select('divisi_id', $divisi, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('penguruses.index') }}" class="btn btn-default">Cancel</a>
</div>
