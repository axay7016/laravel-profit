
@if ($data)
    @foreach($data as $row)
    <tr>
        <td><a href="{{ URL::to('api/chart?ticker=')}}{{$row->Ticker}}">{{ $row->Ticker }}</a></td>
        <td>{{$row->CompanyName}}</td>
        <td>{{$row->Listed_at}}</td>
        <td style="box-shadow: -2px 0px 0px #000;">{{$row->OnDate}}</td>
        <td>{{$row->Currency}}</td>
        <td style="box-shadow: 2px 0px 0px #000;">{{$row->AtPrice}}</td>
        <td>${{ number_format($row->previous_close, 2) }}</td>
        <td class="refresh_price" data-ticker_id="{{$row->id}}" >
            ${{ number_format($row->CurrentPrice, 2) }}
            <i style="color:blue;" id="icon_{{ $row->id }}" class="fa fa-refresh" aria-hidden="true"></i>
        </td>
        <td>@if($row->SL_Exit != null)
            {{$row->SL_Exit}}
            @else
            -
            @endif</td>
        <td>{{ucfirst(trans($row->Gain_Loss))}}</td>
        <td style="box-shadow: -2px 0px 0px #000;" class="@if ($row->glprice < 0) low @else high @endif">
            {{ number_format($row->glprice, 2) }}
        </td>
        <td>{{$row->Action}}</td>   
        <!--<td>{{$row->exit_date}}</td>-->      
    </tr>
    @endforeach
    <tr>
        <td colspan="13" align="center">
            @if($q == '')
                {!! $data->render() !!}
            @endif
        </td>
    </tr>
@else
<tr>
    <td colspan="12" align="center">
        <p>No Data Available</p>
    </td>
</tr>
@endif
