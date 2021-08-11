<div class="row">
    <div class="col-md-4">
        @if($records->total() > 0)
            <div class="total-records">Showing {{$record_starts}} to {{$record_ends}} of Total Records: {!! $records->total() !!}</div>
        @else
            <div class="total-records">Total Records: {!! $records->total() !!}</div>
        @endif
    </div>

    <div class="col-md-8">
        <div style="float:right;">
            {!!str_replace('pagination','pagination
            pagination-sm',str_replace('/?','?',$records->appends(Request::except('page'))->render()))!!}
        </div>
    </div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 table-responsive">
        <table class="table table-striped">
        	<thead>
        		<tr>
        			<td>#</td>
        			<td>Title</td>
        			<td>Content</td>
        			<td>Date</td>
        			<td>Status</td>
                    <td>Actions</td>
        		</tr>
        	</thead>
        	<tbody>
        	@if(count($records) > 0)
        		@php $counter = 0; @endphp
        		@foreach($records as $rec)
        			@php $counter++; @endphp
	        		<tr>
	        			<td>{{$counter}}</td>
	        			<td>{{$rec->title}}</td>
	        			<td>{{$rec->content}}</td>
	        			<td>{{$rec->created_at}}</td>
	        			<td>{{$rec->status}}</td>
                        <td>
                        <button type="button" class="btn btn-xs btn-warning edit_resource" data-url="{{route('admin.edit', ['id'=>$rec->id])}}">Edit</button>
                        </td>
	        		</tr>
        		@endforeach
        	@else
        		<tr><td colspan="5">Record not found!!</td></tr>
        	@endif
        	</tbody>
        </table>
	</div>
</div>