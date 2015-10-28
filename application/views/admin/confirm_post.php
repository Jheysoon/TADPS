<?php $this->load->view('includes/header') ?>
<body>
	<?php $this->load->view('includes/menu', array('active' => 'con_post')) ?>

	<div class="container-fluid">
		<div class="col-md-8 col-md-offset-2">
			<div class="well well-lg">
			<?php 
				if (count($a) > 0) {
					foreach ($a as $annouce) {
						$user = $this->db->get_where('users', array('id' => $annouce->user))->row();
			 ?>
				<div class="media">
					<div class="media-left">
						<a href="#"><img src="/assets/uploads/<?php echo $user->pic ?>" class="media-object" style="max-width:120px;"></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Announcement</h4>
						<?php echo auto_typography($annouce->message) ?>
						<a href="/confirm/<?php echo $annouce->id ?>" class="btn btn-primary pull-right">Confirm</a>
					</div>
				</div>
			<?php 
					}
				} else {
					?>
				<div class="alert alert-info text-center">
					There is no Announcement to confirm
				</div>
			<?php
				}
				?>
			</div>
		</div>
	</div>

	<?php $this->load->view('includes/footer') ?>
</body>
</html>