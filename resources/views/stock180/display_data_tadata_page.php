@if (!empty($tadata ?? '') && $tadata ?? ('')->count())
                    @foreach ($tadata ?? '' as $data)

                        <tr>
                            <td class="ticker_value">{{ strtoupper(trans($data->Ticker)) }}</td>
                            <td class="comp_name comp_name_value">{{ $data->CompanyName }}</td>
                            <td>{{ strtoupper(trans($data->Listed_at)) }}</td>
                            <td style="box-shadow: -2px 0px 0px #000;">{{ $data->OnDate }}</td>
                            <td>{{ $data->Currency }}</td>
                            <td style="box-shadow: 2px 0px 0px #000;">${{ number_format($data->AtPrice, 2) }}</td>
                            <td>${{ number_format($data->previous_close, 2) }}
                            <td>
                                ${{ number_format($data->CurrentPrice, 2) }}
                                <a class="refresh_link" href='/refresh/{{ $data->id }}/{{ $data->Ticker }}/{{ $data->Listed_at }}'>
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>${{ number_format($data->SL_Exit, 2) }}</td>
                            <td>{{ ucfirst(trans($data->Gain_Loss)) }}</td>
                            <td style="box-shadow: -2px 0px 0px #000;" class="@if ($data->glprice
                            < 0) low @else high @endif">
                                    ${{ number_format($data->glprice, 2) }}</td>
                            {{-- <td class="@if ($data->glprice <
                                    0) low @else high @endif">
                                    {{ number_format($data->glpercent, 2) }}% </td> --}}
                            <td style="box-shadow: 2px 0px 0px #000;">{{ strtoupper(trans($data->Action ?? '')) }}</td>
                            {{--<td>
                                {{ Carbon\Carbon::parse($data->created_at)->format('M-Y') }}
                            </td>
                            --}}
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="10">There are no data.</td>
                    </tr>
                @endif