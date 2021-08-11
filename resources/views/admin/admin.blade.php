@extends('admin.layout')

@section('content')

<!-- Container (The Band Section) -->
<div id="ta" class="container text-center">
    <h3>Technical Analysis</h3>
    <div class="col-md-12 pt-20 pb-20">

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create new Technical Analysis Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="tadata-form" class="form" role="form" autocomplete="off">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Ticker</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="ticker" name="ticker" value="" placeholder="Ticker" title="Please give ticker name" style="text-transform:uppercase" required style="text-transform:uppercase">
                                    <span id="ticker-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Company Name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="CompanyName" name="CompanyName" value="" placeholder="Company Name" title="Please give Company name" required >
                                    <span id="CompanyName-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Listed at</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="Listed_at" name="Listed_at" value="" placeholder="Listed at" title="Please give Listed_at" required style="text-transform:uppercase">
                                    <span id="Listed_at-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">OnDate</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="date" id="OnDate" name="OnDate" value="" placeholder="OnDate" title="Please give On Date" required>
                                    <span id="OnDate-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Currency</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="Currency" name="Currency" value="" placeholder="Currency" title="Please give Currency type" required>
                                    <span id="Currency-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Buy Price</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="AtPrice" name="AtPrice" value="" placeholder="AtPrice" title="Please give At Price" required>
                                    <span id="AtPrice-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">CurrentPrice</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="CurrentPrice" name="CurrentPrice" value="" placeholder="Current Price" title="Please give CurrentPrice" required style="text-transform:uppercase">
                                    <span id="CurrentPrice-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">SL_Exit</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="SL_Exit" name="SL_Exit" value="" placeholder="SL Exit" title="Please give SL Exit" required>
                                    <span id="SL_Exit-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Target Price</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="TargetPrice" name="TargetPrice" value="" placeholder="Target Price" title="Please give Target Price" required>
                                    <span id="TargetPrice-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Holding Period</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="HoldingPeriod" name="HoldingPeriod" value="" placeholder="Holding Period" title="Please give HoldingPeriod">
                                    <span id="HoldingPeriod-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Gain Loss</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="Gain_Loss" name="Gain_Loss" value="" placeholder="Gain/Loss" title="Please give Gain/Loss">
                                    <span id="Gain_Loss-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Action</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" id="Action" name="Action" value="" placeholder="Action" title="Please give Action" style="text-transform:uppercase">
                                    <span id="Action-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>


                            <div class="form-group row modal-footer">
                                <div class="col-sm-12" style="text-align: center;">
                                    <input type="button" class="btn btn-info" id="save-btn" value=" Add" style="border: 1px solid #d0efff;">
                                </div>
                                <div class="col-md-12">
                                    <span id="save-error" class="hide" style="font-size: 16px;"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- save ta data -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function() {

        $(document).on('click', '#save-btn', function(e) {
            var thisEle = $(this);
            save(thisEle);
        });

        function save(thisBtn) {
            var thisButton = $(thisBtn);
            var fullNameEle = $('#ticker');


            if (fullNameEle.val() != '') {
                if (!validateFirstLastName(fullNameEle)) {
                    $('#name-error').removeClass('hide').text('Enter valid ticker.').css({
                        "color": "#FF5733"
                    });
                    fullNameEle.addClass('has-error');
                    return false;
                } else {
                    var len = fullNameEle.val().length;
                    if (parseInt(len) < 1) {
                        $("#ticker-error").removeClass('hide').text('Enter at least 1 characters.').css({
                            "color": "#FF5733"
                        });
                        fullNameEle.addClass('has-error');
                        return false;
                    }
                }
                $("#ticker-error").addClass('hide').text('');
                fullNameEle.removeClass('has-error');
            } else {
                $("#ticker-error").removeClass('hide').text('Please enter name.').css({
                    "color": "#FF5733"
                });
                fullNameEle.addClass('has-error');
                return false;
            }

            var formData = $('#tadata-form').serialize();

            if (thisButton.data('requestRunning')) {
                return;
            }
            thisButton.data('requestRunning', true);
            thisButton.prop("disabled", true);

            $('#save-error').removeClass('hide').html(
                '<b style="color: green;text-align: center;">Processing...</b>');

            var postUrl = "/admin/save";
            // var postUrl = "/admin/delete/{id}";

            $.ajax({
                url: postUrl
                , type: "POST"
                , dataType: "JSON"
                , data: formData
                , success: function(response, textStatus, jqXHR) {
                    // console.log(response);return false;
                    if (response.status == "OK") {
                        $('#save-error').html(response.message).css({
                            "color": "green"
                            , "font-weight": "bold"
                        });
                        window.location = response.redirect_url;
                    } else {
                        $('#save-error').html(response.message).css({
                            "color": "red"
                            , "font-weight": "bold"
                        });
                    }
                }
                , error: function(jqXHR, textStatus, errorThrown) {
                    $('#save-btn-error').html('Failed to Process!!').css({
                        "color": "red"
                        , "font-weight": "bold"
                    });
                }
                , complete: function() {
                    thisButton.data('requestRunning', false);
                    thisButton.prop("disabled", false);
                }
            });
        }
    });

    function validateFirstLastName(element) {
        var firstLastName = element.val();
        var pattern = /^[a-zA-Z_]+(?:[a-zA-Z\.\-\'\s]+)*$/;
        return pattern.test(firstLastName);
    }

</script>
<!-- end save ta data -->
<div class="table_div">
    <table id="example" class="display" style="width:100%">

        <thead>
            <tr>
                <th> <a href="" class="	glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#exampleModalCenter">Add</a></th>

            </tr>

            <tr>

                <!-- <th>Id</th> -->
                <th>Ticker</th>
                <th>Company Name</th>
                <th>Listed At</th>
                <th>On date</th>
                <th>Buy Price</th>
                <th>Currency</th>
                <th>Current Price</th>
                <th>SL Exit</th>
                <th>Target Price</th>
                <th>Holding Period</th>
                <th>Gain Loss</th>
                <th>Action</th>
                <th>Last Saved</th>
                <th>

                </th>



            </tr>
        </thead>
        <tbody>
            @if(!empty($tadata) && $tadata->count())
            @foreach ($tadata as $data)
            <tr>
                <!-- <td>{{ $data->id }}</td> -->
                <td>{{ $data->Ticker }}</td>
                <td>{{ $data->CompanyName }}</td>
                <td>{{ $data->Listed_at }}</td>
                <td>{{ $data->OnDate }}</td>
                <td>{{ $data->AtPrice }}</td>
                <td>{{ $data->Currency }}</td>
                <td>{{ $data->CurrentPrice }}</td>
                <td>{{ $data->SL_Exit }}</td>
                <td>{{ $data->TargetPrice }}</td>
                <td>{{ $data->HoldingPeriod }}</td>
                <td>{{ ucfirst(trans($data->Gain_Loss)) }}</td>
                <td>{{ $data->Action }}</td>

                <form action="/admin/{{$data->status}}" method="post" id="statusForm{{$data->id}}">
                    @csrf
                    <!-- If status is 1 an unchecked checkbox -->
                    @if ($data->status == "hide")
                    <td>{{ date('d-M-y', strtotime($data->updated_at)) }}<a href="/admin/{{$data->status}}/{{$data->id}}">
                            <span style="color:orangered;" class="glyphicon glyphicon-eye-close"></span>

                        </a>

                    </td>
                    <input name="id" type="hidden" value="{{$data->id}}">

                    @else
                    <td>{{ date('d-M-y', strtotime($data->updated_at)) }}<a href="/admin/{{$data->status}}/{{$data->id}}">
                            <span class="glyphicon glyphicon-eye-open"></span>

                        </a>
                </form>

                </td>
                @endif
                <td>
                    <a href='/admin/email_template/{{ $data->id }}' data-toggle="modal2" style="font-size: 18px;">&#9993;</a>
                    <a href='/admin/edit/{{ $data->id }}' data-toggle="modal1" style="font-size: 18px;">🖉</a>
                    <a href='/admin/delete/{{ $data->id }}'>❌</a>
                    
                </td>

            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10">There are no data.</td>
            </tr>
            @endif
        </tbody>
      
    </table>
    {!! $tadata->links() !!}
</div>

<script>
    $(document).ready(function() {
        $(".showhide").click(function(e) {
            e.preventDefault();
            $('tr.cancelled').toggle();
        });
    });
    var msg = "{{Session::get('alert')}}";
    var exist = "{{Session::has('alert')}}";
    if (exist) {
        alert(msg);
    }

</script>
<script>
    $(function() {

        $(document).on('click', '#hidebtn', function(e) {
            var thisEle = $(this);
            save(thisEle);
        });

        function save(thisBtn) {
            if (thisButton.data('requestRunning')) {
                return;
            }
            thisButton.data('requestRunning', true);
            thisButton.prop("disabled", true);

            $('#save-error').removeClass('hide').html(
                '<b style="color: green;text-align: center;">Processing...</b>');

            var postUrl = "/admin/hide";
            // var postUrl = "/admin/delete/{id}";

            $.ajax({
                url: postUrl
                , type: "GET"
                , dataType: "JSON"
                , data: formData
                , success: function(response, textStatus, jqXHR) {
                    // console.log(response);return false;
                    if (response.status == "OK") {
                        $('#save-error').html(response.message).css({
                            "color": "green"
                            , "font-weight": "bold"
                        });
                        window.location = response.redirect_url;
                    } else {
                        $('#save-error').html(response.message).css({
                            "color": "red"
                            , "font-weight": "bold"
                        });
                    }
                }
                , error: function(jqXHR, textStatus, errorThrown) {
                    $('#save-btn-error').html('Failed to Process!!').css({
                        "color": "red"
                        , "font-weight": "bold"
                    });
                }
                , complete: function() {
                    thisButton.data('requestRunning', false);
                    thisButton.prop("disabled", false);
                }
            });
        }
    });

</script>

{{-- <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function() {
        function save(thisBtn) {
            var thisButton = $(thisBtn);
            var fullNameEle = $('#sender');
    
            var formData = $('#email_form').serialize();
                    // console.log(formData);
    
            if (thisButton.data('requestRunning')) {
                return;
            }
            thisButton.data('requestRunning', true);
            thisButton.prop("disabled", true);
    
            $('#save-error').removeClass('hide').html(
                '<b style="color: green;text-align: center;">Processing...</b>');
            // controller adderss
    
            var postUrl = "/admin/email_template/";
            // var postUrl = "/admin/delete/{id}";
    
            $.ajax({
                url: postUrl,
                type: "POST",
                data: formData,
                dataType: "json",
                success: function(response, textStatus, jqXHR) {
                    console.log(response); return false; 
                    if (response.status == "OK") {
                        $('#save-error').html(response.message).css({
                            "color": "green",
                            "font-weight": "bold"
                        });
                        window.location = response.redirect_url;
                    }
                     else {
                        $('#save-error').html(response.message).css({
                            "color": "red",
                            "font-weight": "bold"
                        });
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#save-btn-error').html('Failed to Process!!').css({
                        "color": "red",
                        "font-weight": "bold"
                    });
                },
                complete: function() {
                    thisButton.data('requestRunning', false);
                    thisButton.prop("disabled", false);
                }
            });
        }
    });
</script> --}}
@stop
