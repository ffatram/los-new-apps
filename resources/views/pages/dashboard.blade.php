{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    {{-- begin content --}}

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Job Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Job Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="row">
        <div class="col-xl-12">
            <div class="d-flex flex-column h-100">
                <div class="row">

                    <div class="col-xl-6 col-md-6">
                        <!-- card -->
                        <div class="card card-animate overflow-hidden">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200"
                                    height="120">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-success)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0"
                                        d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                </svg>
                            </div>
                            <div class="card-body" style="z-index:1 ;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                            New Jobs</p>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value"
                                                data-target="4305">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="new_jobs_chart" data-colors='["--vz-success"]' class="apex-charts"
                                            dir="ltr"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-6 col-md-6">
                        <!-- card -->
                        <div class="card card-animate overflow-hidden">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200"
                                    height="120">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-success)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0"
                                        d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                </svg>
                            </div>
                            <div class="card-body" style="z-index:1 ;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                            Interview</p>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value"
                                                data-target="5021">0</span></h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="interview_chart" data-colors='["--vz-danger"]' class="apex-charts"
                                            dir="ltr"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div><!--end row-->
            </div>
        </div><!--end col-->


    </div><!--end row-->



    <!-- end page title -->

    <div class="alert alert-danger" role="alert">
        This is <strong>Datatable</strong> page in wihch we have used <b>jQuery</b> with cnd link!
    </div>





    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Scroll - Horizontal</h5>
                </div>
                <div class="card-body">
                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                    </div>
                                </th>
                                <th>SR No.</th>
                                <th>ID</th>
                                <th>Purchase ID</th>
                                <th>Title</th>
                                <th>User</th>
                                <th>Assigned To</th>
                                <th>Created By</th>
                                <th>Create Date</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>01</td>
                                <td>VLZ-452</td>
                                <td>VLZ1400087402</td>
                                <td><a href="#!">Post launch reminder/ post list</a></td>
                                <td>Joseph Parker</td>
                                <td>Alexis Clarke</td>
                                <td>Joseph Parker</td>
                                <td>03 Oct, 2021</td>
                                <td><span class="badge bg-info-subtle text-info btn-halo">Re-open</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>02</td>
                                <td>VLZ-453</td>
                                <td>VLZ1400087425</td>
                                <td><a href="#!">Additional Calendar</a></td>
                                <td>Diana Kohler</td>
                                <td>Admin</td>
                                <td>Mary Rucker</td>
                                <td>05 Oct, 2021</td>
                                <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                <td><span class="badge bg-info">Medium</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>03</td>
                                <td>VLZ-454</td>
                                <td>VLZ1400087438</td>
                                <td><a href="#!">Make a creating an account profile</a></td>
                                <td>Tonya Noble</td>
                                <td>Admin</td>
                                <td>Tonya Noble</td>
                                <td>27 April, 2022</td>
                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>04</td>
                                <td>VLZ-455</td>
                                <td>VLZ1400087748</td>
                                <td><a href="#!">Apologize for shopping Error!</a></td>
                                <td>Joseph Parker</td>
                                <td>Alexis Clarke</td>
                                <td>Joseph Parker</td>
                                <td>14 June, 2021</td>
                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                <td><span class="badge bg-info">Medium</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>05</td>
                                <td>VLZ-456</td>
                                <td>VLZ1400087547</td>
                                <td><a href="#!">Support for theme</a></td>
                                <td>Donald Palmer</td>
                                <td>Admin</td>
                                <td>Donald Palmer</td>
                                <td>25 June, 2021</td>
                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>06</td>
                                <td>VLZ-457</td>
                                <td>VLZ1400087245</td>
                                <td><a href="#!">Benner design for FB & Twitter</a></td>
                                <td>Mary Rucker</td>
                                <td>Jennifer Carter</td>
                                <td>Mary Rucker</td>
                                <td>14 Aug, 2021</td>
                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                <td><span class="badge bg-info">Medium</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>07</td>
                                <td>VLZ-458</td>
                                <td>VLZ1400087785</td>
                                <td><a href="#!">Change email option process</a></td>
                                <td>James Morris</td>
                                <td>Admin</td>
                                <td>James Morris</td>
                                <td>12 March, 2022</td>
                                <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>08</td>
                                <td>VLZ-460</td>
                                <td>VLZ1400087745</td>
                                <td><a href="#!">Support for theme</a></td>
                                <td>Nathan Cole</td>
                                <td>Nancy Martino</td>
                                <td>Nathan Cole</td>
                                <td>28 Feb, 2022</td>
                                <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>09</td>
                                <td>VLZ-461</td>
                                <td>VLZ1400087179</td>
                                <td><a href="#!">Form submit issue</a></td>
                                <td>Grace Coles</td>
                                <td>Admin</td>
                                <td>Grace Coles</td>
                                <td>07 Jan, 2022</td>
                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>10</td>
                                <td>VLZ-462</td>
                                <td>VLZ140008856</td>
                                <td><a href="#!">Edit customer testimonial</a></td>
                                <td>Freda</td>
                                <td>Alexis Clarke</td>
                                <td>Freda</td>
                                <td>16 Aug, 2021</td>
                                <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                <td><span class="badge bg-info">Medium</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>11</td>
                                <td>VLZ-463</td>
                                <td>VLZ1400078031</td>
                                <td><a href="#!">Ca i have an e-copy invoice</a></td>
                                <td>Williams</td>
                                <td>Admin</td>
                                <td>Williams</td>
                                <td>24 Feb, 2022</td>
                                <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>12</td>
                                <td>VLZ-464</td>
                                <td>VLZ1400087416</td>
                                <td><a href="#!">Brand logo design</a></td>
                                <td>Richard V.</td>
                                <td>Admin</td>
                                <td>Richard V.</td>
                                <td>16 March, 2021</td>
                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>13</td>
                                <td>VLZ-466</td>
                                <td>VLZ1400089015</td>
                                <td><a href="#!">Issue with finding information about order ?</a></td>
                                <td>Olive Gunther</td>
                                <td>Alexis Clarke</td>
                                <td>Schaefer</td>
                                <td>32 March, 2022</td>
                                <td><span class="badge bg-success-subtle text-success">New</span></td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>14</td>
                                <td>VLZ-467</td>
                                <td>VLZ1400090324</td>
                                <td><a href="#!">Make a creating an account profile</a></td>
                                <td>Edwin</td>
                                <td>Admin</td>
                                <td>Edwin</td>
                                <td>05 April, 2022</td>
                                <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                <td><span class="badge bg-success">Low</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i
                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i
                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->



    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Buttons Datatables</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables" class="display table table-bordered nowrap align-middle"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>
                                    <th>Salary</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->








    {{-- end content --}}
@endsection



@push('scripts')
    <!-- Tabel Recommended Jobs -->
    <script src="assets/js/pages/dashboard-job.init.js"></script>

    <script>
        console.log('Script khusus untuk dashboard jalan!');
    </script>

    <script>
        // Pastikan DOM sudah siap
        document.addEventListener('DOMContentLoaded', function() {
            const tombol = document.querySelector('.btn-halo');

            tombol.addEventListener('click', function() {
                alert('Halo Fatur!');
            });
        });
    </script>


    {{-- <script src="assets/js/app.js"></script>

    @vite('resources/js-blade/dashboard.js')
    @vite('resources/js-blade/cs/tabel-job.js') --}}
@endpush
