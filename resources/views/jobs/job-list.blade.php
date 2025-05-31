@extends('layouts.master', [
    'title' => 'Job list',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush
@section('content')
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Jobs</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                <div class="me-2 mb-2">

                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <i class="ti ti-file-export me-1"></i>Export
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                        class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                        class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_post"
                        class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Post job</a>
                </div>
                <div class="head-icons ms-2">
                    <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Collapse" id="collapse-header">
                        <i class="ti ti-chevrons-up"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Job List</h5>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                    <div class="me-3">
                        <div class="input-icon-end position-relative">
                            <input type="text" class="form-control date-range bookingrange"
                                placeholder="dd/mm/yyyy - dd/mm/yyyy">
                            <span class="input-icon-addon">
                                <i class="ti ti-chevron-down"></i>
                            </span>
                        </div>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Role
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Senior IOS
                                    Developer</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Junior PHP
                                    Developer</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Network
                                    Engineer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Select Status
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Accepted</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">sent</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Expired</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Declined</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Sort By : Last 7 Days
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently
                                    Added</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7
                                    Days</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th>Job ID</th>
                                <th>Job Title</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Salary Range</th>
                                <th>Posted Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-001</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/apple.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Senior IOS Developer</a>
                                            </h6>
                                            <span class="d-block mt-1">25 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>New York , USA</td>
                                <td>30, 000 - 35, 000 / month</td>
                                <td>12 Sep 2024 </td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-002</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/php.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Junior PHP Developer</a>
                                            </h6>
                                            <span class="d-block mt-1">20 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>Los Angeles, USA</td>
                                <td>20, 000 - 25, 000 / month</td>
                                <td>24 Oct 2024 </td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-003</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/black.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Junior PHP Developer</a>
                                            </h6>
                                            <span class="d-block mt-1">20 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>Los Angeles, USA</td>
                                <td>20, 000 - 25, 000 / month</td>
                                <td>24 Oct 2024 </td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-004</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/react.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Junior React Developer
                                                </a></h6>
                                            <span class="d-block mt-1">35 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>Bristol, UK</td>
                                <td>30, 000 - 35, 000 / month</td>
                                <td>18 Feb 2024 </td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-005</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/laravel.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Senior Laravel Developer
                                                </a></h6>
                                            <span class="d-block mt-1">40 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>Washington, USA</td>
                                <td>32, 000 - 36, 000 / month</td>
                                <td>20 Jul 2024</td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-006</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/devops.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">DevOps Engineer</a></h6>
                                            <span class="d-block mt-1">20 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>Coventry, UK</td>
                                <td>25, 000 - 35, 000 / month</td>
                                <td>10 Apr 2024</td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-007</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/android.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Junior Android
                                                    Developer</a></h6>
                                            <span class="d-block mt-1">25 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>Chicago, USA</td>
                                <td>28, 000 - 32, 000 / month</td>
                                <td>29 Aug 2024</td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-008</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/html.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Senior HTML
                                                    Developer</a></h6>
                                            <span class="d-block mt-1">35 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>Carlisle, UK</td>
                                <td>25, 000 - 28, 000 / month</td>
                                <td>22 Feb 2024</td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-009</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/ui.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Junior UI/UX
                                                    Designer</a></h6>
                                            <span class="d-block mt-1">20 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>Lancaster, UK</td>
                                <td>20, 000 - 25, 000 / month</td>
                                <td>03 Nov 2024</td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Job-010</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md bg-light rounded">
                                            <img src="assets/img/icons/grafic.svg" class="img-fluid rounded-circle"
                                                alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Senior Graphic
                                                    Designer</a></h6>
                                            <span class="d-block mt-1">25 Applicants</span>
                                        </div>
                                    </div>
                                </td>
                                <td>Software</td>
                                <td>San Diego, USA</td>
                                <td>22, 000 - 28, 000 / month</td>
                                <td>17 Dec 2024</td>

                                <td>
                                    <div class="action-icon d-inline-flex">
                                        <a href="#" class="me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_post"><i class="ti ti-edit"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                class="ti ti-trash"></i></a>
                                    </div>
                                </td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Post -->
    <div class="modal fade" id="add_post">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Post Job</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="{{ route('job-grid.store') }}" method="POST" role="form">
                    @csrf
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="basic-info" role="tabpanel"
                                    aria-labelledby="info-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Job Title <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Job Description <span class="text-danger">
                                                        *</span></label>
                                                <textarea rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Job Category <span class="text-danger">
                                                        *</span></label>
                                                <select required name="category" class="select">
                                                    <option value="">Select</option>
                                                    @foreach ($categories as $itemCategory)
                                                        <option value="{{ $itemCategory->idjob_categorie }}">
                                                            {{ $itemCategory->libelle_categorie }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Job Type <span class="text-danger">
                                                        *</span></label>
                                                <select name="type" required class="select">
                                                    <option value="">Select</option>
                                                    @foreach ($types as $itemType)
                                                        <option value="{{ $itemType->idjob_type }}">
                                                            {{ $itemType->libelle_type }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Job Level <span class="text-danger">
                                                        *</span></label>
                                                <select required name="level" class="select">
                                                    <option value="">Select</option>
                                                    @foreach ($level as $itemLevel)
                                                        <option value="{{ $itemLevel->idjob_level }}">
                                                            {{ $itemLevel->libelle_level }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Experience <span class="text-danger">
                                                        *</span></label>
                                                <select required name="experience" class="select">
                                                    <option value="">Select</option>
                                                    @foreach ($experiences as $itemExpe)
                                                        <option value="{{ $itemExpe->idjob_experience }}">
                                                            {{ $itemExpe->libelle_experience }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Qualification <span class="text-danger">
                                                        *</span></label>
                                                <select required name="qualification" class="select">
                                                    <option>Select</option>
                                                    @foreach ($qualifications as $itemQual)
                                                        <option value="{{ $itemQual->idjob_qualification }}">
                                                            {{ $itemQual->libelle_qualification }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Gender <span class="text-danger">
                                                        *</span></label>
                                                <select required name="gender" class="select">
                                                    <option value="">Select</option>
                                                    <option value="Homme / Male">Male</option>
                                                    <option value="Femme / Female">Female</option>
                                                    <option value="Deux / Two">Deux</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Min. Sallary <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Max. Sallary <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 ">
                                                <label class="form-label">Job Expired Date <span class="text-danger">
                                                        *</span></label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar text-gray-7"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Required Skills</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Address <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Country <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">City <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#success_modal">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Post Job -->

    <!-- Add Job Success -->
    <div class="modal fade" id="success_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center p-3">
                        <span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i
                                class="ti ti-check fs-24"></i></span>
                        <h5 class="mb-2">Job Posted Successfully</h5>
                        </p>
                        <div>
                            <div class="row g-2">
                                <div class="col-12">
                                    <a href="job-list.html" class="btn btn-dark w-100">Back to List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Job Success -->

    <!-- Edit Post -->
    <div class="modal fade" id="edit_post">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Job</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="job-list.html">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="contact-grids-tab pt-0">
                                <ul class="nav nav-underline" id="myTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="info-tab" data-bs-toggle="tab"
                                            data-bs-target="#basic-infos" type="button" role="tab"
                                            aria-selected="true">Basic Information</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="address-tabs" data-bs-toggle="tab"
                                            data-bs-target="#addresss" type="button" role="tab"
                                            aria-selected="false">Location</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContents">
                                <div class="tab-pane fade show active" id="basic-infos" role="tabpanel"
                                    aria-labelledby="info-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div
                                                class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                                <div
                                                    class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                    <img src="assets/img/profiles/avatar-30.jpg" alt="img"
                                                        class="rounded-circle">
                                                </div>
                                                <div class="profile-upload">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Upload Profile Image</h6>
                                                        <p class="fs-12">Image should be below 4 mb</p>
                                                    </div>
                                                    <div class="profile-uploader d-flex align-items-center">
                                                        <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                            Upload
                                                            <input type="file" class="form-control image-sign"
                                                                multiple="">
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-light btn-sm">Cancel</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Job Title <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control" value="Senior IOS Developer">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Job Description <span class="text-danger">
                                                        *</span></label>
                                                <textarea rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Job Category <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>IOS</option>
                                                    <option>Web & Application</option>
                                                    <option>Networking</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Job Type <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Full Time</option>
                                                    <option>Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Job Level <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Team Lead</option>
                                                    <option>Manager</option>
                                                    <option>Senior</option>
                                                    <option>junior</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Experience <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Entry Level</option>
                                                    <option>Mid Level</option>
                                                    <option>Expert</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Qualification <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Bachelore Degree</option>
                                                    <option>Master Degree</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Gender <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Male</option>
                                                    <option selected>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Min. Sallary <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>10k - 15k</option>
                                                    <option>15k -20k</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Max. Sallary <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>40k - 50k</option>
                                                    <option>50k - 60k</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 ">
                                                <label class="form-label">Job Expired Date <span class="text-danger">
                                                        *</span></label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy" value="29 Aug 2024">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar text-gray-7"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Required Skills</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#success_modal">Save & Next</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="addresss" role="tabpanel" aria-labelledby="address-tab"
                                    tabindex="0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Address <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Country <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>USA</option>
                                                    <option>Canada</option>
                                                    <option>Germany</option>
                                                    <option>France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">State <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>California</option>
                                                    <option>New York</option>
                                                    <option>Texas</option>
                                                    <option>Florida</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">City <span class="text-danger">
                                                        *</span></label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Los Angeles</option>
                                                    <option>San Diego</option>
                                                    <option>Fresno</option>
                                                    <option>San Francisco</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Zip Code <span class="text-danger">
                                                        *</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="map-grid mb-3">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin"
                                                    style="border:0;" allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light me-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#success_modal">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Post Job -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked items, this cant be undone once you
                        delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="job-list.html" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection
