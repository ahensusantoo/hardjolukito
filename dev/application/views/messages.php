<?php if ($this->session->has_userdata('warning')) { ?>  
		<div class="alert alert-warning alert-dismissible rounded-10">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
			<i class="icon fa fa-ban"></i> <?=$this->session->flashdata('warning'); ?>
		</div>
<?php } ?>

<?php 
	if ($this->session->has_userdata('danger')) { ?>  
		<div class="alert alert-danger alert-dismissible rounded-10">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
			<i class="icon fa fa-ban"></i> 
			<?=$this->session->flashdata('danger'); ?>
		</div>
<?php } ?>

<?php 
	if ($this->session->has_userdata('success')) { ?>  
		<div class="alert alert-success alert-dismissible rounded-10">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
			<i class="icon fa fa-check"></i> <?=$this->session->flashdata('success'); ?>
		</div>
<?php } ?>

<?php 
	if ($this->session->has_userdata('error')) { ?>  
		<div class="alert alert-error alert-dismissible rounded-10">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
			<i class="icon fa fa-ban"></i> <?=strip_tags(str_replace('</p>', '', $this->session->flashdata('error'))); ?>
		</div>
<?php } ?>
