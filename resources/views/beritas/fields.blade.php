<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control editor']) !!}
</div>

<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    {!! Form::file('thumbnail') !!}
</div>
<div class="clearfix"></div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Berita:') !!}
    {!! Form::select('category_id', $category_berita, null, ['class' => 'form-control']) !!}
</div>

<!-- Isshow Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isshow', 'Isshow:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isshow', 0) !!}
        {!! Form::checkbox('isshow', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('beritas.index') }}" class="btn btn-default">Cancel</a>
</div>
