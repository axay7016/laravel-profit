@extends('admin.layout')

@section('content')
<meta name="_token" content="{{ csrf_token() }}">
<style>
    .dataTables_wrapper .dataTables_filter {
        float: right;
        display: none;
        text-align: right;
    }
    .dataTables_wrapper .dataTables_length {
    float: left;
    display: none;
    }
</style>
<div id="ta" class="container text-center">
    <h3>Manage Emails</h3>
        <div class="col-md-3 input-group pull-right">
           
            <input type="text" name="search" id="search" class="form-control"/>
            <span type="button" class="input-group-addon" id="search_error">
                <i class="fa fa-search"></i>
            </span>
        </div>
    {{-- <div class="form-group pull-right">
        <input type="text" class="form-controller" id="search" name="search"/>
    </div> --}}
        
</div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>DoNotSend</th>
                <th>Unsubscribe</th>
                <th>Created At</th>

            </tr>
        </thead>
            <tbody>
                @if(!empty($data))
                @foreach ($data as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->email }}</td>
                    @if ($d->DoNotSend == 0)
                        
                    <td>{{ $d->DoNotSend }}<a href='/admin/donotsend/on/{{ $d->id }}'><i class="fa fa-toggle-off" aria-hidden="true"></i></a></td>
                    @else
                        
                    <td>{{ $d->DoNotSend }}<a href='/admin/donotsend/off/{{ $d->id }}'><i class="fa fa-toggle-on" aria-hidden="true"></i></a></td>
                    @endif
                    <td>{{ $d->Unsubscribe }}</td>
                    <td>{{ date('d-M-y', strtotime($d->created_at)) }}</td>
                    
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
                @endif
            </tbody>
    </table>
  
    <script type="text/javascript">
    $('#search').on('blur',function(){
    $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{route('fetchData')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    });
    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
    

@stop