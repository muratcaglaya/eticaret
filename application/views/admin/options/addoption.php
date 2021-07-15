<?php
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/leftmenu');
?>

<div class="row">
	<div class="col-md-8">
		<div class="box box-solid">
			<div class="box-body">
				<form method="post" autocomplete="off" action="<?php echo base_url('admin/secenekekle')?>">
					<div class="form-group">
						<label>Seçenek Adı</label>
						<input type="text" name="option" placeholder="Seçenek Adını Giriniz." required class="form-control"/>
					</div>					
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-flat btn-success">Ekle</button>
					</div> 
				</form>
			</div>
		</div>
	</div>


<?php	$this->load->view('admin/include/footer');?>