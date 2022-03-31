@extends('main')

@section('title', 'Data Category ')

@section('main-content')

@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <h4>Data Category</h4>
                    </div>

                    <div class="pull-right">
                        <a href="{{ url('Catagory/add' )}}" class="btn btn-icon btn-success">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>
                </div>
                
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>User Input</th>
                                <th>Tanggal Input</th>
                                <th>Tanggal Update</th>
                                <th>User Update</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorys as $item)
                                <tr>
                                    <td>{{ $loop->iteration + $categorys->firstItem() - 1 }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->user_input }}</td>
                                    <td>{{ $item->tanggal_input }}</td>
                                    <td>{{ $item->tanggal_update }}</td>
                                    <td>{{ $item->user_update }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('Catagory/edit/' .$item->id )}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                        <form action="{{ url('Catagory/' .$item->id )}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-icon btn-danger"><i class="far fa-trash-alt"></i></button>    
                                        <form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            
                </div>


                <div class="card-footer text-right">
                    {!! $categorys->links() !!}
                </div>
            </div>
        </div>
    </div>


    
@endsection