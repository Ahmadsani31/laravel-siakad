@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">User</a></div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data User</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-bordered table-md table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Created At</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no=1;
                                            @endphp
                                            @foreach ($User as $us)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$us->name}}</td>
                                                    <td>{{$us->email}}</td>
                                                    <td>
                                                        @php
                                                          echo $us->email_verified_at ? '<div class="badge badge-success">Active</div>': '<div class="badge badge-warning">No Active</div>'
                                                        @endphp
                                                        
                                                    </td>
                                                    <td>{{$us->created_at}}</td>

                                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
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

    <!-- Page Specific JS File -->
@endpush
