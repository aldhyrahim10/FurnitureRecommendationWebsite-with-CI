        <!-- Datatables -->
	<script type="text/javascript">
		$(document).ready( function () {
		$('#table').DataTable({
			"lengthChange": false,
			"pageLength": 5,
		});
		});
  	</script>
	
	<script src="<?= base_url('assets/backend/vendor/jquery/jquery.min.js');?>"></script>
	<script src="<?= base_url('assets/backend/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
	<script src="<?= base_url('assets/backend/vendor/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?= base_url('assets/backend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js');?>"></script>
	<script src="<?= base_url('assets/backend/vendor/chartist/js/chartist.min.js');?>"></script>
	<script src="<?= base_url('assets/backend/scripts/klorofil-common.js');?>"></script>

	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
	<script>
    	ClassicEditor
        	.create( document.querySelector( '.ckeditor' ) )
                .then( editor => {
                    console.log( editor );
                })
                .catch( error => {
                    console.error( error );
                });
    </script>