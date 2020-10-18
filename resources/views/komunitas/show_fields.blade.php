<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $komunitas->name }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $komunitas->type }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $komunitas->description }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $komunitas->image }}</p>
</div>

<!-- Instagram Link Field -->
<div class="form-group">
    {!! Form::label('instagram_link', 'Instagram Link:') !!}
    <p>{{ $komunitas->instagram_link }}</p>
</div>

<!-- Facebook Link Field -->
<div class="form-group">
    {!! Form::label('facebook_link', 'Facebook Link:') !!}
    <p>{{ $komunitas->facebook_link }}</p>
</div>

<!-- Youtube Link Field -->
<div class="form-group">
    {!! Form::label('youtube_link', 'Youtube Link:') !!}
    <p>{{ $komunitas->youtube_link }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $komunitas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $komunitas->updated_at }}</p>
</div>

