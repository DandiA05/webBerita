@extends('main')

@section('title','Add Data Catagory ')

@section('main-content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Catagory</h1>
            </div>

        <div class="section-body">
 
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <div class="pull-left">
                        <h4>Add Data Catagory</h4>
                    </div>

                    <div class="pull-right">
                        <a href="{{ url('Catagory' )}}" class="btn btn-icon btn-secondary">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>

                </div>
                
                <div class="card-body">
                   
                    
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{url('Catagory')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" name="category" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>User Input</label>
                                        <input type="text" name="user_input" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Input</label>
                                        <input type="date" name="tanggal_input" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Update</label>
                                        <input type="date" name="tanggal_update" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>User Update</label>
                                        <input type="text" name="user_update" class="form-control" autofocus required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
                            </div>
                        </div>
                 
                </div>
            </div>
        </div>
    </div>
    
@endsection