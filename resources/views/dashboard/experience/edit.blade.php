@extends('dashboard.layout')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Experience </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Biography</a></li>
        <li class="breadcrumb-item active" aria-current="page">Experience</li>
      </ol>
    </nav>
</div>
<div class="row">
    <div class="col-5 grid-margin stretch-card">
        <a class="" href="{{ route('experience.index') }}">
            <button type="submit" class="btn btn-warning mr-2" >Go back</button>
        </a>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Experience</h4>
            <p class="card-description"> Edit your previous experience </p>
            <form class="forms-sample" action="{{ route('experience.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
              <div class="form-group">
                <label for="exampleInputTitle1">Position</label>
                <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Work position" value="{{ $data->title }}" name="title">
              </div>
              <div class="form-group">
                <label for="exampleInputTitle2">Company</label>
                <input type="text" class="form-control" id="exampleInputTitle2" placeholder="Company name" value="{{ $data->info1 }}" name="info1">
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="form-group col-auto">
                    <label for="exampleInputDate3">Start Date</label>
                    <input type="date" class="form-control" id="exampleInputDate3" placeholder="dd/mm/yyyy" value="{{ $data->start_date }}" name="start_date">
                  </div>
                  <div class="form-group col-auto">
                    <label for="exampleInputDate4">End Date</label>
                    <input type="date" class="form-control" id="exampleInputDate4" placeholder="dd/mm/yyyy" value="{{ $data->end_date }}" name="end_date">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Content</label>
                <textarea class="form-control" id="exampleTextarea1" placeholder="Explain your job" rows="4" value="{{ $data->content }}" name="content"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-dark" >Cancel<a href="{{ route('experience.index') }}"></a></button>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection