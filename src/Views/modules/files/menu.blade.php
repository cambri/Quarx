<div class="row">
    @if (isset($createBtn))
    <a class="btn btn-primary pull-right" href="{!! route('quarx.files.create') !!}">Add New</a>
    @endif
    <div class="raw-m-hide pull-right raw-m-hide">
        {!! Form::open(['url' => 'quarx/files/search']) !!}
        <input class="form-control header-input pull-right raw-margin-right-24" name="term" placeholder="Search">
        {!! Form::close() !!}
    </div>
    <h1 class="page-header">Files</h1>
</div>