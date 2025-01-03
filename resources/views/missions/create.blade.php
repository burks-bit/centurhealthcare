@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Mission</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('missions.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mission:</strong>
                <textarea class="form-control ckeditor" style="height:250px" name="mission wysiwyg-editor" placeholder="Type here" style=""></textarea>
            </div>
            <div class="form-group py-2">
                <input class="form-check-input me-1" name="enabled" type="checkbox" value="1" aria-label="...">
                Enable
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 py-2">
            <a class="btn btn-sm btn-primary" href="{{ route('missions.index') }}"> Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection