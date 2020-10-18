<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo') !!}
</div>
<div class="clearfix"></div>

<!-- Komunitas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('komunitas_id', 'Komunitas Id:') !!}
    {!! Form::select('komunitas_id', $komunitas, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('galeriKomunitas.index') }}" class="btn btn-default">Cancel</a>
</div>
