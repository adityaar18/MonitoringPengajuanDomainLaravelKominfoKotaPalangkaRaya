    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('template/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--
	<script src="{{ asset('template/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('template/assets/vendor/chartist/js/chartist.min.js') }}"></script> -->
	<script src="{{ asset('template/assets/scripts/klorofil-common.js') }}"></script>
    
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.11.5/datatables.min.js"></script> -->
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>

    

	<!--CK Editor untuk pembuatan Deskripsi, 
    untuk .ckeditor ini nantinya akan di deklarasikan pada create.blade.php pada bagian deskripsi-->
    
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '.ckeditor' ) ) 
            .then( editor => {
            console.log( editor );
        } )
        
        //memunculkan modal secara otomatis
        jQuery(document).ready(function($){
            $('#datatables').DataTable();

            $('#mymodal').on('show.bs.modal',function(e){
           
                var button = $(e.relatedTarget);
                var modal = $(this);

                modal.find('.modal-body').load(button.data("remote"));
                modal.find('.modal-title').html(button.data("title"))
        
            });

            $('#jenis_permohonan').trigger('change');
        });

        $('#jenis_permohonan').change(function(){
            var value = $(this).val();
            
            $('.jika-pilih-1 input').attr('disabled', 'disabled');
            $('.jika-pilih-2 input').attr('disabled', 'disabled');
            $('.jika-pilih-3 input').attr('disabled', 'disabled');
            $('.jika-pilih-4 input').attr('disabled', 'disabled');
            
            $('.jika-pilih-2').hide();
            $('.jika-pilih-3').hide();
            $('.jika-pilih-4').hide();

            if(value == 'Sub_Domain_Web'){
                $('.jika-pilih-1 input').removeAttr('disabled');
            }else if(value == 'Sub_Domain_dan_Hosting'){
                $('.jika-pilih-2').show();
                
                $('.jika-pilih-2 input').removeAttr('disabled');
            }else if(value == 'Sub_Domain_saja'){
                $('.jika-pilih-3').show();
                
                $('.jika-pilih-3 input').removeAttr('disabled');
            }else{
                $('.jika-pilih-4').show();
                
                $('.jika-pilih-4 input').removeAttr('disabled');
            }
        });
    </script>



<div class="modal" id="mymodal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>
                    <h5 class="modal-title"></h5>

                </div>
                <div class="modal-body">
                     <i class="fa fa-spinner fa-spin"></i>
                </div>
            </div>

        </div>

    </div>
    