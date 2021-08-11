@include('stock180.header')
<!-- Container (usefullinks Section) -->
<div id="newsletter" class="container-fluid  bg-grey">
    <h2>Newsletter</h2><br>

    <div class="container">
        <h4>You will find our research on current topics and detailed analysis below based on the market conditions:
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 post">
                        @if(!empty($newsletter) && $newsletter->count())
                        @foreach ($newsletter as $data)
                        <div class="@if($loop->odd) card-w-bg @else card-d-bg @endif">


                            <div class="row">
                                <div class="col-md-12 post-header-line">
                                    <!-- <span class="glyphicon glyphicon-user"></span>by <a href="#">Bhaumik</a> |  -->
                                    <span class="glyphicon glyphicon-calendar">
                                    </span>{{ date('d-M-y', strtotime($data->created_at)) }} | <strong> <a href="{{asset('/uploads/'.$data->filesource) }}"
                                                target="_black">{{ $data->title }}</a></strong>
                                    <!-- <span class="glyphicon glyphicon-comment"></span><a href="#">3 Comments</a> | -->
                                    <!-- <i class="icon-share"></i><a href="#">39 Shares</a> |  -->
                                    <!-- <span class="glyphicon glyphicon-tags">
                                </span> Tags : <a href="#"><span class="label label-info">Snipp</span></a> <a href="#">
                                    <span class="label label-info">Bootstrap</span></a> <a href="#"><span class="label label-info">
                                        UI</span></a> <a href="#"><span class="label label-info">growth</span></a> -->
                                </div>
                            </div>

                            <div class="row post-content">
                               {{-- <div class="col-md-12">
                                    <h4 style="margin-bottom: -6px;    margin-top: -6px;">
                                        <strong> <a href="{{asset('/uploads/'.$data->filesource) }}"
                                                target="_black">{{ $data->title }}</a></strong>
                                    </h4>
                                </div>--}}
                                <div class="col-md-12">
                                    <p>
                                        {{ $data->description }}
                                    </p>
                                    <p>
                                        <!-- <a class="btn btn-read-more" href="http://www.jquery2dotnet.com/2013/12/cool-share-button-effects-styles.html">Read more</a></p> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div>
                            <div class="col-md-10">There are no data.<div>
                                </div>
                                @endif

                                {!! $newsletter->links() !!}
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

@include('stock180.footer')