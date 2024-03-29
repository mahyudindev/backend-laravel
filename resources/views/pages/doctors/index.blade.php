@extends('layouts.app')

@section('title', 'Doctors')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Doctor</h1>
                <div class="section-header-button">
                    <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Doctor</a></div>
                    <div class="breadcrumb-item">All Doctor</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Doctors</h2>
                <p class="section-lead">
                    You can manage all Users, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Posts</h4>
                            </div>
                            <div class="card-body">

                                <div class="float-left">
                                    <form method="GET" action="{{ route('doctors.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Specialist</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($doctors as $doctor)
                                            <tr>
                                                <td>
                                                    @if ($doctor->photo)
                                                        <img src="{{ $doctor->photo }}" width="50px" />
                                                    @else
                                                        No Image
                                                    @endif
                                                    {{-- @if ($doctor->photo)
                                                        <img src="{{ asset('doctors/' . $doctor->photo) }}"
                                                            width="50px" />
                                                    @else
                                                        No Image
                                                    @endif --}}
                                                </td>

                                                <td>{{ $doctor->doctor_name }}
                                                </td>
                                                <td>
                                                    {{ $doctor->doctor_email }}
                                                </td>
                                                <td>
                                                    {{ $doctor->doctor_phone }}
                                                </td>
                                                <td>
                                                    {{ $doctor->doctor_specialist }}
                                                </td>
                                                <td>{{ $doctor->created_at }}</td>
                                                <td>

                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('doctors.edit', $doctor->id) }}'
                                                            class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                        <form action="{{ route('doctors.destroy', $doctor->id) }}"
                                                            method="POST" class="ml-2"
                                                            id="delete-form-{{ $doctor->id }}">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <a class="btn btn-danger btn-action" data-toggle="modal"
                                                                data-target="#confirmDeleteModal{{ $doctor->id }}"
                                                                title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </form>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="confirmDeleteModal{{ $doctor->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="confirmDeleteModalLabel{{ $doctor->id }}"
                                                            aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="confirmDeleteModalLabel{{ $doctor->id }}">
                                                                            Are You Sure?</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        This action cannot be undone. Do you want to
                                                                        continue?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger"
                                                                            onclick="document.getElementById('delete-form-{{ $doctor->id }}').submit()">Yes</button>
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $doctors->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
