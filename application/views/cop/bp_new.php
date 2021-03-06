<?php include 'application/views/header.php' ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap3-wysihtml5.min.css') ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/select2.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap3-wysihtml5.all.min.js') ?>"></script>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 isi">
					<div class="box box-primary">
					<div class="box-header with-border">
						<h3>New Best Practice</h3>
						<small><?php echo date('D, d-m-Y') ?></small>
					</div>
					<div class="box-body">
						<form class="" action="<?php echo site_url('cop/bp_post') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input class="form-control input-md" type="text" name="title" placeholder="Judul" required="">
							</div>
							<div class="form-group">
									<span class="badge bg-blue"><?php echo $scope->scope_name ?></span>
									<input type="hidden" name="id_scope" value="<?php echo $scope->id_scope ?>">
							</div>
							<div class="form-group">
								<textarea name="content" class="form-control input-md textarea" id="" rows="12" maxlength="500" required="" placeholder="Deskripsi"></textarea>	
							</div>
							<input class="btn col-md-4 btn-primary btn-flat pull-right" type="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	<script type="text/javascript">
		$(".invite-be").select2({
			placeholder: "Invite BE"
		});
		$('.textarea').wysihtml5();
	</script>
