@include('stock180.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- style css -->
<link rel="stylesheet" href="{{asset('assets/css/contact_us.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @media screen and (max-width: 1023px) {
            .row{
                    padding-top: inherit;
                }
            }
</style>
<div class="container animated fadeIn" style="padding-top:50px;">
    <div class="row">
        <h1 class="header-title"> Contact </h1>
        <hr>
        <div class="col-sm-12" id="parent">
            <div class="col-sm-12 " id="form1">
                <form action="form.php" class="contact-form" method="post">

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required=""
                            autofocus="">
                            <span class="show-error" id="name_error" style="color:red;"></span>
                    </div>
                    <div class="form-group form_left">
                        <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
                        <span class="show-error" id="email_error" style="color:red;"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="cellno"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10"
                            placeholder="Phone No." required="">
                            <span class="show-error" id="mobile_error" style="color:red;"></span>

                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-contact" rows="5" id="comment" name="comment"
                            placeholder="Type Your Message/Feedback here..." required=""></textarea>
                            <span class="show-error" id="msg_error" style="color:red;"></span>

                        <br>
                        <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send
                        </button>
                        <span  id="save-error"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function() {

        $(document).on('click', '.btn-send', function(e) {
            var thisEle = $(this);
            save(thisEle);
        });

        function save(thisBtn) {
            var thisButton = $(thisBtn);

            var thisName = $('#name').val();
            var thisEmail = $('#email').val();
            var thisMobile = $('#phone').val();
            var thisMsg = $('#comment').val();
            if (thisName=='') {
                $('#name_error').text('Please enter name!');
            }
            if (thisEmail=='') {
                $('#email_error').text('Please enter valid email!');
            }
            if (thisMobile=='') {
                $('#mobile_error').text('Please enter valid Phone number!');
            }
            if (thisMsg=='') {
                $('#msg_error').text('Please enter some message!');
            }


            var formData = $('.contact-form').serialize();

            if (thisButton.data('requestRunning')) {
                return;
            }
            thisButton.data('requestRunning', true);
            thisButton.prop("disabled", true);

            $('#save-error').removeClass('hide').html('<b style="color: green;text-align: center;">Processing...</b>');
            var postUrl = "laravel-send-email";
            $.ajax({
                url: postUrl,
                type: "POST",
                dataType: "JSON",
                data: formData,
                success: function(response, textStatus, jqXHR) {
                    // console.log(response);return false;
                    if (response.status == "OK") {
                        $('#save-error').html(response.message).css({
                            "color": "green",
                            "font-weight": "bold"
                        });
                        $('.show-error').hide();
                        $('.contact-form').trigger("reset");
                        // window.location = response.redirect_url;
                    } else {
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
</script>
    <div class="container second-portion">
        <div class="row">
            <!-- Boxes de Acoes -->
            <!-- <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">MAIL & WEBSITE</h3>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp xyz@gmail.com
                                <br>
                                <br>
                                <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
                            </p>

                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">CONTACT</h3>
                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
                                <br>
                                <br>
                                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-756706XXXX
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="info">
                            <h3 class="title">ADDRESS</h3>
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot
                                "xxxxxxxxxxxxxx Krupa", CA - 360001.
                            </p>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div> -->
            <!-- /Boxes de Acoes -->

            <!--My Portfolio  dont Copy this -->

        </div>
    </div>

</div>
@include('stock180.footer')