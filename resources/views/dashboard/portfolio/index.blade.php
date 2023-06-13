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
        <a class="" href="{{ route('portfolio.create') }}">
            <button type="submit" class="btn btn-primary mr-2" >+ New Portfolio</button>
        </a>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All Portfolio</h4>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> # </th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>URL Link</th>
                    <th>Image File</th>
                    <th class="col-2"> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach ($data as $item)
                    <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $item->category->name }}</td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->description }}</td>
                      <td><a href="<?php echo $item->url_link?>">{{ $item->url_link }}</a></td>
                      <td><img src="{{ asset($item->image_file_url) }}" alt="" width="4"></td>
                      <td>
                        <a href='{{ route('portfolio.edit', $item->id) }}' class="btn btn-sm btn-warning">
                          <span class="mdi mdi-grease-pencil"></span>
                        </a>
                        <form id="delete-portfolio-{{ $item->id }}" onsubmit="return confirm('You want to delete this data?')" 
                          action="{{ route('portfolio.destroy', $item->id)  }}" class="d-inline" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit" name='submit'> 
                            <span class="mdi mdi-delete"></span>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection