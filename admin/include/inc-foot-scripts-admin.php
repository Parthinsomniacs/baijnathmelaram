<script type="text/javascript" src="<?php echo $jsurl; ?>jquery.js"></script>
<script type="text/javascript" src="<?php echo $jsurl; ?>iziToast.min.js"></script>
<script type="text/javascript" src="<?php echo $jsurl; ?>popper.min.js"></script>
<script type="text/javascript" src="<?php echo $jsurl; ?>bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $jsurl; ?>wow.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script pdfsrc="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>


<script type="text/javascript">
    /* WOW JS */
    var $window = $(window);
    if ($window.width() > 100) {
        new WOW().init();
    }

    $('.insomenu-bars').click( function() {
        $("body").toggleClass("insomenu-open");
    });

    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });

    $(document).on("input","textarea",function(){
        $(this).val($(this).val().replace(/'/g, '"'));
    });

    $("#site-setting1").submit(function(e) {
        e.preventDefault();
    }).validate({
        rules: {
        },
        messages: {
        },
        submitHandler: function(form) {
            $("#site-setting1").find(':input[type="submit"]').html('SUBMITTING...');
            $("#site-setting1").find(':input[type="submit"]').prop('disabled');
            var formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?php echo $siteurl; ?>include/inc-settings.php",
                data: formData,
                 dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.statusCode == 200)
                    {
                       
			iziToast.success({ title: 'OK', message: 'Admin data updated successfully', position: 'topRight' ,transitionIn: 'fadeInDown'});
            
            
        }else{
            
        }
    },
    complete: function() {
                    iziToast.info({ title: 'Done', message: 'Task Complate.', position: 'topRight' ,transitionIn: 'fadeInDown'});                    
                    $("#site-setting1").find(':input[type="submit"]').html('SUBMIT');
                    // $("#site-setting").find(':input[type="submit"]').prop('disabled', false);
                    $("#site-setting1").find(':input[type="submit"]').removeProp('disabled');
                },
                error: function(xhr, ajaxOptions, thrownError){
                    $("#site-setting1").find(':input[type="submit"]').html('SUBMIT');
                    // $("#site-setting").find(':input[type="submit"]').prop('disabled', false);
                    $("#site-setting1").find(':input[type="submit"]').removeProp('disabled');
                }
            });
            return false;
        }
    });

    $("#site-setting2").submit(function(e) {
        e.preventDefault();
    }).validate({
        rules: {
        },
        messages: {
        },
        submitHandler: function(form) {
            $("#site-setting2").find(':input[type="submit"]').html('SUBMITTING...');
            $("#site-setting2").find(':input[type="submit"]').prop('disabled');
            var formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?php echo $siteurl; ?>include/inc-settings.php",
                data: formData,
                 dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.statusCode == 200)
                    {
                        iziToast.success({ title: 'Done', message: 'Admin data updated successfully.', position: 'topRight' ,transitionIn: 'fadeInDown'});                   
                        
                    }else{

                    }
                },
                error: function(xhr, ajaxOptions, thrownError){
                        iziToast.error({ title: 'Error', message: 'Can\'t save data right now.', position: 'topRight' ,transitionIn: 'fadeInDown'});                                       
                    $("#site-setting2").find(':input[type="submit"]').html('SUBMIT');
                    $("#site-setting2").find(':input[type="submit"]').removeProp('disabled');
                },
                complete: function() {
                    $("#site-setting2").find(':input[type="submit"]').html('SUBMIT');
                    $("#site-setting2").find(':input[type="submit"]').removeProp('disabled');
                }
            });
            return false;
        }
    });

    $("#site-setting3").submit(function(e) {
        e.preventDefault();
    }).validate({
        rules: {
        },
        messages: {
        },
        submitHandler: function(form) {
            $("#site-setting3").find(':input[type="submit"]').html('SUBMITTING...');
            $("#site-setting3").find(':input[type="submit"]').prop('disabled');
            var formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?php echo $siteurl; ?>include/inc-settings.php",
                data: formData,
                 dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.statusCode == 200)
                    {
                        iziToast.success({ title: 'Done', message: 'Admin data updated successfully.', position: 'topRight' ,transitionIn: 'fadeInDown'});                   

                    }else{

                    }
                },
                error: function(xhr, ajaxOptions, thrownError){                    
                    iziToast.error({ title: 'Error', message: 'Can\'t save data right now.', position: 'topRight' ,transitionIn: 'fadeInDown'});                                       
                    $("#site-setting3").find(':input[type="submit"]').html('SUBMIT');
                    $("#site-setting3").find(':input[type="submit"]').removeProp('disabled');
                },
                complete: function() {
                    $("#site-setting3").find(':input[type="submit"]').html('SUBMIT');
                    $("#site-setting3").find(':input[type="submit"]').removeProp('disabled');
                }
            });
            return false;
        }
    });

    $("#site-setting4").submit(function(e) {
        e.preventDefault();
    }).validate({
        rules: {
        },
        messages: {
        },
        submitHandler: function(form) {
            $("#site-setting4").find(':input[type="submit"]').html('SUBMITTING...');
            $("#site-setting4").find(':input[type="submit"]').prop('disabled');
            var formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?php echo $siteurl; ?>include/inc-settings.php",
                data: formData,
                 dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.statusCode == 200)
                    {
                        iziToast.success({ title: 'Done', message: 'Admin data updated successfully.', position: 'topRight' ,transitionIn: 'fadeInDown'});                  
                        
                    }else{
                    }
                },
                error: function(xhr, ajaxOptions, thrownError){
                    $("#site-setting4").find(':input[type="submit"]').html('SUBMIT');
                    $("#site-setting4").find(':input[type="submit"]').removeProp('disabled');
                    iziToast.error({ title: 'Error', message: 'Can\'t save data right now.', position: 'topRight' ,transitionIn: 'fadeInDown'});                                       
                },
                complete: function() {
                    $("#site-setting4").find(':input[type="submit"]').html('SUBMIT');
                    $("#site-setting4").find(':input[type="submit"]').removeProp('disabled');
                }

            });
            return false;
        }
    });


    $("#send-email").click(function() {
        var formData = {};
        $.ajax({
            type: "POST",
            url: "<?php echo $siteurl; ?>include/inc-send-email.php",
            data: formData,
            contentType: 'applicatio/json',
            success: function(data) {
                if (data.statusCode == 200)
                {
                    iziToast.success({ title: 'Done', message: 'Admin data updated successfully.', position: 'topRight' ,transitionIn: 'fadeInDown'});                  
                    
                }else{
                }
            },
            error: function(xhr, ajaxOptions, thrownError){
                $("#site-setting4").find(':input[type="submit"]').html('SUBMIT');
                $("#site-setting4").find(':input[type="submit"]').removeProp('disabled');
                iziToast.error({ title: 'Error', message: 'Can\'t save data right now.', position: 'topRight' ,transitionIn: 'fadeInDown'});                                       
            },
            complete: function() {
                $("#site-setting4").find(':input[type="submit"]').html('SUBMIT');
                $("#site-setting4").find(':input[type="submit"]').removeProp('disabled');
            }

        });
    });
</script>