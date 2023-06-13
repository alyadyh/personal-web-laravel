@extends('dashboard.layout')

@section('content')
<div class="page-header">
    <h3 class="page-title"> Dashboard </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Message</li>
      </ol>
    </nav>
  </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h3 class="card-title">Welcome back, {{Auth::user()->name}}</h3>
                <h4 class="card-title">How's your day?</h4>
                <div class="list-wrapper">
                    <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                    <li class="completed">
                        <div class="form-check form-check-primary">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked> Great </label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check form-check-primary">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""> So so </label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check form-check-primary">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""> Bad </label>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
                <h4 class="card-title mb-1">Open Projects</h4>
                <p class="text-muted mb-1">Your data status</p>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="preview-list">
                    <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-primary">
                        <i class="mdi mdi-file-document"></i>
                        </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                        <h6 class="preview-subject">Admin dashboard design</h6>
                        <p class="text-muted mb-0">Broadcast web app mockup</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">15 minutes ago</p>
                        <p class="text-muted mb-0">30 tasks, 5 issues </p>
                        </div>
                    </div>
                    </div>
                    <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                        <i class="mdi mdi-cloud-download"></i>
                        </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                        <h6 class="preview-subject">Wordpress Development</h6>
                        <p class="text-muted mb-0">Upload new design</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">1 hour ago</p>
                        <p class="text-muted mb-0">23 tasks, 5 issues </p>
                        </div>
                    </div>
                    </div>
                    <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                        <i class="mdi mdi-clock"></i>
                        </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                        <h6 class="preview-subject">Project meeting</h6>
                        <p class="text-muted mb-0">New project discussion</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">35 minutes ago</p>
                        <p class="text-muted mb-0">15 tasks, 2 issues</p>
                        </div>
                    </div>
                    </div>
                    <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-danger">
                        <i class="mdi mdi-email-open"></i>
                        </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                        <h6 class="preview-subject">Broadcast Mail</h6>
                        <p class="text-muted mb-0">Sent release details to team</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">55 minutes ago</p>
                        <p class="text-muted mb-0">35 tasks, 7 issues </p>
                        </div>
                    </div>
                    </div>
                    <div class="preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                        <i class="mdi mdi-chart-pie"></i>
                        </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                        <div class="flex-grow">
                        <h6 class="preview-subject">UI Design</h6>
                        <p class="text-muted mb-0">New application planning</p>
                        </div>
                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                        <p class="text-muted">50 minutes ago</p>
                        <p class="text-muted mb-0">27 tasks, 4 issues </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
                <h4 class="card-title">Messages</h4>
                <p class="text-muted mb-1 small">View all</p>
            </div>
            <div class="preview-list">
                <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                    <img src="{{ asset('admin/assets/images/faces/face6.jpg') }}" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Leonard</h6>
                        <p class="text-muted text-small">5 minutes ago</p>
                    </div>
                    <p class="text-muted">Well, it seems to be working now.</p>
                    </div>
                </div>
                </div>
                <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                    <img src="{{ asset('admin/assets/images/faces/face8.jpg') }}" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Luella Mills</h6>
                        <p class="text-muted text-small">10 Minutes Ago</p>
                    </div>
                    <p class="text-muted">Well, it seems to be working now.</p>
                    </div>
                </div>
                </div>
                <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                    <img src="{{ asset('admin/assets/images/faces/face9.jpg') }}" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Ethel Kelly</h6>
                        <p class="text-muted text-small">2 Hours Ago</p>
                    </div>
                    <p class="text-muted">Please review the tickets</p>
                    </div>
                </div>
                </div>
                <div class="preview-item border-bottom">
                <div class="preview-thumbnail">
                    <img src="{{ asset('admin/assets/images/faces/face11.jpg') }}" alt="image" class="rounded-circle" />
                </div>
                <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">Herman May</h6>
                        <p class="text-muted text-small">4 Hours Ago</p>
                    </div>
                    <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Portfolio Slide</h4>
            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                <div class="item">
                <img src="{{ asset('admin/assets/images/dashboard/Rectangle.jpg') }}" alt="">
                </div>
                <div class="item">
                <img src="{{ asset('admin/assets/images/dashboard/Img_5.jpg') }}" alt="">
                </div>
                <div class="item">
                <img src="{{ asset('admin/assets/images/dashboard/img_6.jpg') }}" alt="">
                </div>
            </div>
            <div class="d-flex py-4">
                <div class="preview-list w-100">
                <div class="preview-item p-0">
                    <div class="preview-thumbnail">
                    <img src="{{ asset('admin/assets/images/faces/face12.jpg') }}" class="rounded-circle" alt="">
                    </div>
                    <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                        <h6 class="preview-subject">CeeCee Bass</h6>
                        <p class="text-muted text-small">4 Hours Ago</p>
                        </div>
                        <p class="text-muted">Well, it seems to be working now.</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <p class="text-muted">Well, it seems to be working now. </p>
            <div class="progress progress-md portfolio-progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-12 col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">To do list</h4>
            <div class="add-items d-flex">
                <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                <button class="add btn btn-primary todo-list-add-btn">Add</button>
            </div>
            <div class="list-wrapper">
                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                <li>
                    <div class="form-check form-check-primary">
                    <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Create invoice </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                    <div class="form-check form-check-primary">
                    <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                </li>
                <li class="completed">
                    <div class="form-check form-check-primary">
                    <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                    <div class="form-check form-check-primary">
                    <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                </li>
                <li>
                    <div class="form-check form-check-primary">
                    <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection