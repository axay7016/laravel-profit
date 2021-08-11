@include('admin.header')
<div class="model2" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Technical Analysis Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/edit/<?php echo $tadata[0]->id; ?>" method="post" class="form" role="form"
                    autocomplete="off">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Ticker</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="ticker" name="ticker"
                                value="<?php echo $tadata[0]->Ticker; ?>" placeholder="Ticker"
                                title="Please give ticker name" style="text-transform:uppercase" required>
                            <span id="ticker-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Company Name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="CompanyName" name="CompanyName"
                                value="<?php echo $tadata[0]->CompanyName; ?>" placeholder="Company Name"
                                title="Please give Company name" required>
                            <span id="CompanyName-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Listed at</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="Listed_at" name="Listed_at"
                                value="<?php echo $tadata[0]->Listed_at; ?>" placeholder="Listed at"
                                title="Please give Listed_at" required style="text-transform:uppercase">
                            <span id="Listed_at-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">OnDate</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="date" id="OnDate" name="OnDate"
                                value="<?php echo $tadata[0]->OnDate; ?>" placeholder="OnDate"
                                title="Please give On Date" required>
                            <span id="OnDate-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Currency</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="Currency" name="Currency"
                                value="<?php echo $tadata[0]->Currency; ?>" placeholder="Currency"
                                title="Please give Currency type" required>
                            <span id="Currency-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">AtPrice</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="AtPrice" name="AtPrice"
                                value="<?php echo $tadata[0]->AtPrice; ?>" placeholder="AtPrice"
                                title="Please give At Price" required>
                            <span id="AtPrice-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">CurrentPrice</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="CurrentPrice" name="CurrentPrice"
                                value="<?php echo $tadata[0]->CurrentPrice; ?>" placeholder="Current Price"
                                title="Please give CurrentPrice">
                            <span id="CurrentPrice-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">SL_Exit</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="SL_Exit" name="SL_Exit"
                                value="<?php echo $tadata[0]->SL_Exit; ?>" placeholder="SL Exit"
                                title="Please give SL Exit">
                            <span id="SL_Exit-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Target Price</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="TargetPrice" name="TargetPrice"
                                value="<?php echo $tadata[0]->TargetPrice; ?>" placeholder="Target Price"
                                title="Please give Target Price">
                            <span id="TargetPrice-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Holding Period</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="HoldingPeriod" name="HoldingPeriod"
                                value="<?php echo $tadata[0]->HoldingPeriod; ?>" placeholder="Holding Period"
                                title="Please give HoldingPeriod">
                            <span id="HoldingPeriod-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Gain Loss</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="Gain_Loss" name="Gain_Loss"
                                value="<?php echo $tadata[0]->Gain_Loss; ?>" placeholder="Gain/Loss"
                                title="Please give Gain/Loss">
                            <span id="Gain_Loss-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Action</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="Action" name="Action"
                                value="<?php echo $tadata[0]->Action; ?>" placeholder="Action"
                                title="Please give Action" style="text-transform:uppercase">
                            <span id="Action-error" class="hide" style="font-size: 16px;"></span>
                        </div>
                    </div>


                    <div class="form-group row modal-footer">
                        <div class="col-sm-12" style="text-align: center;">
                            <input type="submit" class="btn btn-info" id="save-btn" value="Update"
                                style="border: 1px solid #d0efff;">
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
<script>
$('.close').click(function() {
    $('.model2').fadeOut();
    window.location.href = "{{('/admin')}}";
});
</script>
<!-- Footer -->
@include('admin.footer')