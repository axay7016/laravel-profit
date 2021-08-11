<div class="modal bs-example-modal-sm" id="edit_resource_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-danger" style="font-size: 30px;">&times;</span></button>
                <h4 class="modal-title" style="font-weight: 600;">Edit Status</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array('url'=>route('admin.update',['id'=>$record->id]), 'method'=>'put', 'id'=>'edit_resource_form', 'class'=>'form-horizontal', 'onsubmit'=>'return false;')) }}
                    <div class="form-group">
                        <div class="col-md-4">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', $record->title, array('id'=>'title', 'class'=>'form-control', 'autofocus'=>true, 'placeholder'=>'post title')) }}
                            <p id="title-error" class="hide" style="color: red;"></p>
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('content', 'Content') }}
                            {{ Form::text('content', $record->content, array('id'=>'content', 'class'=>'form-control', 'placeholder'=>'content')) }}
                            <p id="content-error" class="hide" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            {{ Form::button('Save', array('id'=>'save_resource_btn', 'class'=> 'btn btn-primary', 'style'=>'width: 100%;border-radius: 3px;')) }}
                        </div>
                        <div class="col-md-10">
                            <p id="save_resource-error" class="hide" style="color: red;"></p>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" >Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>-->
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
    $(document).on('click', "#save_resource_btn", function(event){
        event.preventDefault();
        
        var thisButton = $(this);
        var formEle = $('#edit_resource_form');
        if(formEle.find('#title').val() == ''){
            $("#title-error").removeClass('hide').text('Enter post title.').css({"color":"#FF5733"});
            return false;
        }else{
            $("#title-error").addClass('hide').text('');
        }
        if(formEle.find('#content').val() == ''){
            $("#nacontentme-error").removeClass('hide').text('Enter content.').css({"color":"#FF5733"});
            return false;
        }else{
            $("#content-error").addClass('hide').text('');
        }
        if ( thisButton.data('requestRunning') ) {
            return;
        }
        thisButton.data('requestRunning', true);
        thisButton.prop("disabled", true);
        $("#save_resource-error").text('');
        var url = formEle.attr('action');
        var formData = formEle.serialize();
        // console.log(formData);return false;
        $.ajax({
          type: 'PUT',
          dataType: 'JSON',
          data: formData,
          url: url,
        }).done(function(data){
          if(data.status == 'OK'){
            $("#save_resource-error").removeClass('hide').text(data.message).css({"color":"green"});
            setTimeout(function() {
              $("#edit_resource_modal .close").click();
              $("#resource_modal_div").empty();
              window.location.reload();
            }, 3000);
          }else{
            $("#save_resource-error").removeClass('hide').text(data.message);
            if (typeof data.errors.title !== 'undefined') {
              $("#title-error").removeClass('hide').text(data.errors.title).css({"color":"#FF5733"});
            }
            if (typeof data.errors.content !== 'undefined') {
              $("#content-error").removeClass('hide').text(data.errors.content).css({"color":"#FF5733"});
            }
          }
        }).fail(function(jqXHR, ajaxOptions, thrownError){
          $("#save_resource-error").removeClass('hide').text(data.message).css({"color":"#FF5733"});
        }).always(function() {
          thisButton.data('requestRunning', false);
          thisButton.prop("disabled", false);
        });
    });
});
</script>