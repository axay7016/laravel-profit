@include('stock180.header')
<!-- Container (usefullinks Section) -->
<div id="useful_links" class="container-fluid  bg-grey">
    <h2>useful Links</h2><br>

    <div class="container">
        <h4>Useful readings and video links you might find interesting and informative</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 post">
                        @if(!empty($useful_links) && $useful_links->count())
                        @foreach ($useful_links as $data)
                        <div class="@if($loop->odd) card-w-bg @else card-d-bg @endif">
                            <div class="row">
                                <div class="col-md-12 post-header-line">
                                    <span class="glyphicon glyphicon-calendar">
                                    </span>{{ date('d-M-y', strtotime($data->created_at)) }} | <strong> <a href="{{ $data->url }}" target="_blank">
                                                {{ $data->title }}</a></strong>
                                </div>
                            </div>

                            <div class="row post-content">
                               {{-- <div class="col-md-12">
                                    <h4 style="margin-bottom: -6px;    margin-top: -6px;">
                                     
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

                                {!! $useful_links->links() !!}
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        @include('stock180.footer')