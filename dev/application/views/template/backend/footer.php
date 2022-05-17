        <script src="<?=base_url('assets/backend') ?>/lib/popper.js/popper.js"></script>
        <script src="<?=base_url('assets/backend') ?>/lib/bootstrap/bootstrap.js"></script>
        <script src="<?=base_url('assets/backend') ?>/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
        <script src="<?=base_url('assets/backend') ?>/lib/peity/jquery.peity.js"></script>
        <script src="<?=base_url('assets/backend') ?>/lib/moment/moment.js"></script>
        
        <script src="<?=base_url('assets/backend') ?>/lib/confirm_dialog/jquery-confirm.min.js"></script>

        <script src="<?=base_url('assets/backend') ?>/js/main.js"></script>
    </body>
</html>


<script>

	$('.delete').click(function(){
        var id = $(this).data('id')
        $.confirm({
            title: 'Delete',
            content: 'Apakah Anda Yakin Akan menghapus data ini ?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Ya',
                    btnClass: 'btn-red',
                    action: function(){
                        var response = getJSON("<?=base_url(set_url(@$this->uri->segment(2).'/action/hapus')) ?>", {id:id})
                        if(response){
                            window.location.replace("<?=base_url(set_url(@$this->uri->segment(2))) ?>");
                        }else{
                            $.confirm({
                                title: 'errors',
                                content: 'Terjadi kesalahan sistem, silahkan coba kembali',
                                type: 'red',
                                typeAnimated: true,
                                buttons: {
                                    tryAgain: {
                                        text: 'Oke',
                                        btnClass: 'btn-red',
                                        action: function(){
                                            $('#loading').hide()
                                        }
                                    },
                                    Tutup: function () {
                                        $('#loading').hide()
                                    }
                                }
                            });
                        }
                    }
                },
                tryAgain2: {
                    text: 'Batal',
                    btnClass: 'btn-primary',
                    action: function(){
                        $('#loading').hide()
                    }
                },
            }
        });
        
    })


	$('#myForm').submit(function(e){
        e.preventDefault()
        var dataToSend  = new FormData(this)
        var action = $('#myForm').attr('action')
        $.ajax({
            url      : "<?=base_url(set_url($this->uri->segment(2).'/action/')) ?>"+action,
            dataType : 'json',
            type     : 'post',
            data     : dataToSend,
            processData :false,
            contentType :false,
            cache       :false,
            beforeSend:function(){
                $('#loading').show()
            },
            complete:function(){
                $('#loading').hide()
            },
            success  : function(data){
                console.log(data)
                // $('#pesan_notifikasi div').remove()
                $('.invalid-feedback').remove()
                $('.is-invalid').removeClass('is-invalid');

                if(typeof(data.file) != "undefined" && data.file !== null){
                    if(data.file == false){
                        $.each(data.error_file, function(key, value){
                            $('#'+key).addClass('is-invalid')
                            $('#notifikasi_'+key).append(`<div class="invalid-feedback">`+value+`</div>`)
                        })
                    }else{
                        $.each(data.error_file, function(key, value){
                            $('#'+key).removeClass('is-invalid')
                            $('#notifikasi_'+key).append('')
                        })
                    }
                }else{
                    if(data.status){
                        window.location.replace("<?=base_url(set_url(@$this->uri->segment(2))) ?>");
                    }else{
                        if(data.errors){
                            $.each(data.errors, function(key, value){
                                $('#'+key).addClass('is-invalid')
                                $('#notifikasi_'+key).append(`<div class="invalid-feedback">`+value+`</div>`)
                            })
                        }else{

                            if(data.status == false){
                                $.confirm({
                                    title: 'errors',
                                    content: 'Terjadi kesalahan sistem, silahkan coba kembali',
                                    type: 'red',
                                    typeAnimated: true,
                                    buttons: {
                                        tryAgain: {
                                            text: 'Oke',
                                            btnClass: 'btn-red',
                                            action: function(){
                                                $('#loading').hide()
                                            }
                                        },
                                        close: function () {
                                                $('#loading').hide()
                                        }
                                    }
                                });
                            }
                            $.each(data.errors, function(key, value){
                                $('#'+key).removeClass('is-invalid')
                                $('#notifikasi_'+key).append('')
                            })
                        }
                        $('html,body').animate({scrollTop: $('body').offset().top},'fast');
                    }
                }
            }
        })
    })

    $('#myFormSecond').submit(function(e){
        e.preventDefault()
        var dataToSend  = new FormData(this)
        var action = $('#myFormSecond').attr('action')
        $.ajax({
            url      : "<?=base_url(set_url($this->uri->segment(2).'/action/')) ?>"+action,
            dataType : 'json',
            type     : 'post',
            data     : dataToSend,
            processData :false,
            contentType :false,
            cache       :false,
            beforeSend:function(){
                $('#loading').show()
            },
            complete:function(){
                $('#loading').hide()
            },
            success  : function(data){
                console.log(data)
                // $('#pesan_notifikasi div').remove()
                $('.invalid-feedback').remove()
                $('.is-invalid').removeClass('is-invalid');

                if(typeof(data.file) != "undefined" && data.file !== null){
                    if(data.file == false){
                        $.each(data.error_file, function(key, value){
                            $('#'+key).addClass('is-invalid')
                            $('#notifikasi_'+key).append(`<div class="invalid-feedback">`+value+`</div>`)
                        })
                    }else{
                        $.each(data.error_file, function(key, value){
                            $('#'+key).removeClass('is-invalid')
                            $('#notifikasi_'+key).append('')
                        })
                    }
                }else{
                    if(data.status){
                        window.location.replace("<?=base_url(set_url(@$this->uri->segment(2).'/'.@$this->uri->segment(3))) ?>");
                    }else{
                        if(data.errors){
                            $.each(data.errors, function(key, value){
                                $('#'+key).addClass('is-invalid')
                                $('#notifikasi_'+key).append(`<div class="invalid-feedback">`+value+`</div>`)
                            })
                        }else{

                            if(data.status == false){
                                $.confirm({
                                    title: 'errors',
                                    content: 'Terjadi kesalahan sistem, silahkan coba kembali',
                                    type: 'red',
                                    typeAnimated: true,
                                    buttons: {
                                        tryAgain: {
                                            text: 'Oke',
                                            btnClass: 'btn-red',
                                            action: function(){
                                                $('#loading').hide()
                                            }
                                        },
                                        close: function () {
                                                $('#loading').hide()
                                        }
                                    }
                                });
                            }
                            $.each(data.errors, function(key, value){
                                $('#'+key).removeClass('is-invalid')
                                $('#notifikasi_'+key).append('')
                            })
                        }
                        $('html,body').animate({scrollTop: $('body').offset().top},'fast');
                    }
                }
            }
        })
    })

    function notifikasi(type, string){
        var notifikasi = `
            <div class="control-group">
                <div class="alert alert-`+type+`">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>`+string+`</strong>
                </div>
            </div>`
        return notifikasi
    }

    function getJSON(url,data){
        return JSON.parse($.ajax({
            type        : 'POST',
            url         : url,
            data        : data,
            dataType    :'json',
            global      : false,
            async       : false,
            beforeSend:function(){
                $('#loading').show();
            },
            complete: function(){
                $('#loading').hide();
            },
            success:function(msg){

            },
        }).responseText);
    }
</script>