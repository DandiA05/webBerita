@extends('main')

@section('title', 'Data News ')

@section('main-content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>CMS Berita DPR RI</h1>
            </div>

        <div class="section-body">

    
@endsection

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                </div>
                
                <div class="card-body">
                    @if (count($newsind) > 0)
                        <section id="tag_container">
                            @include('newsind.newsind');
                        </section>
                    </div>

                @endif
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(window).on('hashchange',function(){
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else{
                    getData(page);
                }
            }
        });
        $(document).ready(function(){
            $(document).on('click','.pagination a',function(event){
                event.preventDefault();
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                var url = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];
                getData(page);
            });
        });
        function getData(page) {
            // body...
            $.ajax({
                url : '?page=' + page,
                type : 'get',
                datatype : 'html',
            }).done(function(data){
                $('#tag_container').empty().html(data);
                location.hash = page;
            }).fail(function(jqXHR,ajaxOptions,thrownError){
                alert('No response from server');
            });
        }

</script>
    
@endsection