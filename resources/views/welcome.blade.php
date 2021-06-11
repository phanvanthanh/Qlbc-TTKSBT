@extends('layouts.template.index')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-12"><h5>TRUNG TÂM KIỂM SOÁT BỆNH TẬT TỈNH TRÀ VINH</h5></div>                
            </div>
                
        </div>
    </div>
        
</div>








    <!--Wysiwig js-->
    

    <script src="{{ asset('public/template/default/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            var _token=jQuery('form[name="frmDmLoi"]').find("input[name='_token']").val();
            load(null, null,_token);
            function load(tenDmLoi=null, idDichVu=null,_token){
                
                var xhr1;   
                var url="{{ route('loadDmLoiPublic') }}";
                if(xhr1 && xhr1.readyState != 4){
                    xhr1.abort(); //huy lenh ajax truoc do
                }
                xhr1 = $.ajax({
                    url:url,
                    type:'POST',
                    dataType:'json',
                    cache: false,
                    data:{
                        "_token":_token,
                        "ten_dm_loi":tenDmLoi,
                        "id_loai_danh_muc":idDichVu,
                    },
                    error:function(){
                    },
                    success:function(data){
                        $('.tblDmLoi').empty();
                        jQuery('.tblDmLoi').html(data.html);
                    },
                });
            }

            
            jQuery('.btnTimKiem').on('click', function(){
                var _token=jQuery('form[name="frmDmLoi"]').find("input[name='_token']").val();
                var tenDmLoi=jQuery('#ten_dm_loi').val();
                var idDichVu=jQuery('#id_loai_danh_muc').val();
                console.log(tenDmLoi);
                console.log(idDichVu);
                load(tenDmLoi, idDichVu,_token);
            });



            
        });



    </script>
@endsection
