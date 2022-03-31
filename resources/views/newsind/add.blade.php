@extends('main')

@section('title','Tambah Data Berita ')

@section('main-content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Berita</h1>
            </div>

        <div class="section-body">
 
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <div class="pull-left">
                        <h4>Add Data Berita</h4>
                    </div>

                    <div class="pull-right">
                        <a href="{{ url('newsind' )}}" class="btn btn-icon btn-secondary">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>

                </div>
                
                <div class="card-body">
                   
                    
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{url('newsind')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tanggal Berita</label>
                                        <input type="date" name="tanggal_berita" class="form-control" autofocus required>
                                    </div>
                                    @php
                                        $category =  DB::table('category')->get();
                                    @endphp
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="id_category" id="" class="form-control" required>
                                            @foreach ($category as $item)                                                
                                                <option value="{{ $item->id }}">{{ $item->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea name="content" style="height: 300px" class="form-control" autofocus required></textarea>
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
                                        <label>User Update</label>
                                        <input type="text" name="user_update" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Update</label>
                                        <input type="date" name="tanggal_update" class="form-control" autofocus required>
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