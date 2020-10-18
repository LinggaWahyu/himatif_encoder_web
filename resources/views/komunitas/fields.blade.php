<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['partner' => 'partner', 'komunitas' => 'komunitas', 'kegiatan' => 'kegiatan'], null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control editor']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Instagram Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram_link', 'Instagram Link:') !!}
    {!! Form::text('instagram_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_link', 'Facebook Link:') !!}
    {!! Form::text('facebook_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Youtube Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('youtube_link', 'Youtube Link:') !!}
    {!! Form::text('youtube_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('komunitas.index') }}" class="btn btn-default">Cancel</a>
</div>
