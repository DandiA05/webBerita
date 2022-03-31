@extends('main')

@section('title','Edit Data Video ')

@section('main-content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>News</h1>
            </div>

        <div class="section-body">
 
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">

                    <div class="pull-left">
                        <h4>Edit Data Berita</h4>
                    </div>

                    <div class="pull-right">
                        <a href="{{ url('newsind' )}}" class="btn btn-icon btn-primary">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>

                </div>
                
                <div class="card-body">
                   
                    
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ url('newsind/'.$newsind->id) }}" method="POST">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group">
                                        <label>Tanggal Berita</label>
                                        <input type="date" name="tanggal_berita" value="{{ $newsind->tanggal_berita }}" class="form-control" autofocus required>
                                    </div>
                                    @php
                                    $category =  DB::table('category')->get();
                                    @endphp
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="id_category" id="" class="form-control" required>
                                            @foreach ($category as $item)                                                
                                                <option value="{{ $item->id }}" @if($newsind->id_category == $item->id ) selected @endif >{{ $item->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title"  value="{{ $newsind->title }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea name="content" style="height: 200px" class="form-control" required>{{ $newsind->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" name="status" value="{{ $newsind->status }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>User input</label>
                                        <input type="text" name="user_input"  value="{{ $newsind->user_input }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>User Update</label>
                                        <input type="text" name="user_update"  value="{{ $newsind->user_update }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Update</label>
                                        <input type="date" name="tanggal_update"  value="{{ $newsind->tanggal_update }}" class="form-control" autofocus required>
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