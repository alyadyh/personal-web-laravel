@extends('dashboard.layout')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Education </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Biography</a></li>
        <li class="breadcrumb-item active" aria-current="page">Education</li>
      </ol>
    </nav>
</div>
<div class="row">
    <div class="col-5 grid-margin stretch-card">
        <a class="" href="{{ route('education.create') }}">
            <button type="submit" class="btn btn-primary mr-2" >+ New Education</button>
        </a>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">All education</h4>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Studies </th>
                    <th> Institution </th>
                    <th> Start Date </th>
                    <th> End Date </th>
                    <th class="col-2"> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach ($data as $item)
                    <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->info1 }}</td>
                      <td>{{ $item->start_date_indo }}</td>
                      <td>{{ $item->end_date_indo }}</td>
                      <td>
                        <a href='{{ route('education.edit', $item->id) }}' class="btn btn-sm btn-warning">
                          <span class="mdi mdi-grease-pencil"></span>
                        </a>
                        <form id="delete-education-{{ $item->id }}" onsubmit="return confirm('You want to delete this data?')" 
                          action="{{ route('education.destroy', $item->id)  }}" class="d-inline" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit" name='submit'> 
                            <span class="mdi mdi-delete"></span>
                          </button>
                        </form>
                      </tr>
                      </td>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
</div>
@endsection
