@extends('main')

@section('title', 'Data News ')

@section('main-content')
@endsection

@section('content')

<style>
    tr:hover {background-color: gainsboro;}

    .table:not(.table-sm) thead th {
    border-bottom: none;
    background-color: #6777ef;
    color: white;
    padding-top: 15px;
    padding-bottom: 15px;
}
</style>

    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-lg-12 col-md-6 col-sm-6 col-12" style="padding: 0px;">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                    <i class="fas fa-video"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Berita</h4>
                    </div>
                    <div class="card-body">
                        {{ $newsindcount }}
                    </div>
                  </div>
                </div>
              </div>

            <div class="card">
                <div class="card-header justify-content-between">
                    <div class="pull-left col-9"  style="padding-left: 0px">
                        <h4>Data Berita</h4>
                    </div>

                    <div class="pull-right card-header justify-content-between col-3"  style="padding: 0px">
                       <a href="{{ url('newsind.export' )}}" class="btn btn-icon btn-primary">
                         Download Excel
                        </a>
                        <a href="{{ url('newsind/add' )}}" class="btn btn-icon btn-success">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>
                </div>
                <div  class="card-header justify-content-between" >
                    
                        <form action="{{ url('SearchByTitleOrContent' )}}" method="GET" class="col-4" style="padding-left: 0px">
                            @csrf
                            <input type="search" name="search" placeholder="Search by Title/Content" class="form-control" autofocus >
                        </form>                       
                    
                        <form action="{{ url('FilterTanggalBerita' )}}" method="GET" class="justify-content-between card-header "  style="padding: 0px">
                            <div>Filter Tanggal Berita From :</div>                        
                            <div >
                                <input type="date" name="start_date" id="start_date"  class="form-control" autofocus >
                            </div>                            
                            <div>To :</div>                             
                            <div >
                                <input type="date" name="end_date" id="end_date"  class="form-control" autofocus >
                            </div>
                            <div>
                             <button type="submit" name="filterdate" class="btn btn-success">Filter</button>
                            </div>
                        </form>
                                        
                </div>

                
                <div class="card-body">
                    <div class="table-responsive" style="display: block;overflow-x: auto;white-space: nowrap;">
                        <table class="table table-bordered table-md">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tanggal Berita</th>
                                    <th>Kategori</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>User Input</th>
                                    <th>User Update</th>
                                    <th>Tanggal Update</th>   
                                    <th class="text-center">Detail</th>                             
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newsind as $item)
                                    <tr>
                                        <td>{{ $loop->iteration + $newsind->firstItem() - 1 }}</td>
                                        <td>{{ $item->tanggal_berita }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ Str::limit($item->content, 100, ' (...)') }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->user_input }}</td>
                                        <td>{{ $item->user_update }}</td>
                                        <td>{{ $item->tanggal_update }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('newsind/detail/' .$item->id )}}" class="btn btn-icon btn-success">See Detail</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ url('newsind/edit/' .$item->id )}}" class="btn btn-icon btn-warning"><i class="far fa-edit"></i></a>
                                            <form action="{{ url('newsind/' .$item->id )}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-icon btn-danger"><i class="far fa-trash-alt"></i></button>    
                                            <form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-right">
                            {!! $newsind->links() !!}
                        </div>
                    </div>

                    {{-- <div class="table-responsive py-3" style="display: block;overflow-x: auto;white-space: nowrap;">
                        <table class="table table-bordered table-md data-table" id="data-table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tanggal Berita</th>
                                    <th>Kategori</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>User Input</th>
                                    <th>User Update</th>
                                    <th>Tanggal Update</th>   
                                    <th class="text-center">Detail</th>                             
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                        <div class="text-right">
                            {!! $newsind->links() !!}
                        </div>
                    </div> --}}
                
                </div>
                
            </div>
        </div>
    </div>




    {{-- <script type="text/javascript">
        
        $(document).ready(function() {
             $('.data-table').DataTable({
                 processing: true,
                 serverSide: true,
                 ajax: "{{ route('getdata') }}",
                 columns: [
                     {data: 'tanggal_berita', name: 'tanggal_berita'},
                     {data: 'category', name: 'category'},
                     {data: 'title', name: 'title'},
                     {data: 'content', name: 'content'},
                     {data: 'status', name: 'status'},
                     {data: 'user_input', name: 'user_input'},
                     {data: 'user_update', name: 'user_update'},
                     {data: 'tanggal_update', name: 'tanggal_update'},
                     {data: 'action', name: 'action', orderable: false, searchable: false},
                 ],
             });
         });
     </script> --}}

    
@endsection