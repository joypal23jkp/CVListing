@extends('admin.master' )

@section('body')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                @if(Session::get('message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{Session::get('message')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>CV List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Tables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($managecv as $cv)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$cv->id}}</td>
                                        <td>{{$cv->first_name}}</td>
                                        <td>{{$cv->last_name}}</td>
                                        <td>{{$cv->address}}</td>
                                        <td>{{$cv->contact}}</td>
                                        <td>
                                            <a href="#viewModal{{$cv->id}}" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg" >
                                                <span><i class="fa fa-i-cursor"></i> </span> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="card" style="width: 100%; padding: 20px; border: 1px solid green">
                                                <div class="card-header bg-success text-white font-weight-bold">
                                                    CV Information
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Cras justo odio</li>
                                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                                    <li class="list-group-item">Vestibulum at eros</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
