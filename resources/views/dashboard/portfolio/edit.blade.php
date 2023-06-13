@extends('dashboard.layout')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Portfolio </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Portfolios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
      </ol>
    </nav>
</div>
<div class="row">
    <div class="col-5 grid-margin stretch-card">
        <a class="" href="{{ route('portfolio.index') }}">
            <button type="submit" class="btn btn-warning mr-2" >Go back</button>
        </a>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">New Portfolio</h4>
            <p class="card-description"> Add your new portfolio </p>
            <form class="forms-sample" action="{{ route('portfolio.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputTitle1">Title</label>
                  <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Title" value="{{ $data->title }}" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="exampleTextarea1" placeholder="Description" rows="4" value="{{ $data->description }}" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputTitle1">URL Link</label>
                  <input type="text" class="form-control" id="exampleInputTitle1" placeholder="URL link" value="{{ $data->url_link }}" name="url_link">
                </div>
                <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="img[]" class="file-upload-default" value="{{ $data->image_file }}" name="image_file">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-dark" >Cancel<a href="{{ route('portfolio.index') }}"></a></button>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection