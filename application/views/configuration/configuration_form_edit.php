<div class="container">
    <div class="col-sm">

        <!-- form start -->
        <form role="form" method="post" enctype="form-data">
			<div class="card-body">
				<div class="form-group">
					<input type="hidden" name="id" value="<?= $configur['id'] ?>">
					<label class="text-warning">ID STASIUN *</label>
					<input type="Text" name="sta_id" value="<?= $configur['sta_id'] ?>" class="form-control <?= form_error('rgs_fullname') == TRUE ? 'is-invalid' : ''; ?>" placeholder="Input Id Stasiun *">
					<a style="color: red;"><?= form_error('sta_id') ?></a>
				</div>
				<div class="form-group">
					<label class="text-warning">NAMA STASIUN</label>
					<input type="text" name="sta_nama" value="<?= $configur['sta_nama'] ?>" class="form-control" placeholder="Nama Stasiun">
				</div>
				<div class="form-group">
					<label class="text-warning">ALAMAT STASIUN</label>
					<textarea name="sta_alamat" class="form-control" placeholder="Alamat Stasiun" width="100%"><?= $configur['sta_alamat'] ?>
					</textarea>
				</div>
				<div class="form-group">
					<label class="text-warning">COM</label>
					<input type="text" name="controller" value="<?= $configur['controller'] ?>" class="form-control" placeholder="Nama Stasiun">
				</div>
				<div class="form-group">
					<label class="text-warning">BAUD</label>
					<input type="text" name="controller_baud" value="<?= $configur['controller_baud'] ?>" class="form-control" placeholder="Nama Stasiun">
				</div>
				<div class="form-group">
					<button type="Submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
					<button type="Reset" class="btn btn-default"><i class="fas fa-sync-alt"></i> Reset</button>
				</div>
			</div>
			<!-- /.card-body -->
        </form>

    </div>
</div>