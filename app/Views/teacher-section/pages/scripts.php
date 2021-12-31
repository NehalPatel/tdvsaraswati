<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->

<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- DataTables -->

<script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.js"></script>

<script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script src="<?php echo base_url(); ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<!-- AdminLTE App -->

<!-- Toastr -->

<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>



<script src="<?php echo base_url(); ?>/assets/jquery.form.js"></script>

<script src="<?php echo base_url(); ?>/assets/notification.js"></script>

<!-- page script -->

<script>

    $(function () {

        $("#example1").DataTable();

    });
    var url = window.location;
	const allLinks = document.querySelectorAll('.nav-item a');
	const currentLink = [...allLinks].filter(e => {
	  return e.href == url;
	});

	currentLink[0].classList.add("active")
	currentLink[0].closest(".nav-treeview").style.display="block";
	currentLink[0].closest(".has-treeview").classList.add("active");

</script>