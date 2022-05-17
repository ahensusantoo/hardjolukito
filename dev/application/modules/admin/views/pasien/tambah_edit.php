<link href="<?=base_url('assets/backend/')?>lib/select2/css/select2.min.css" rel="stylesheet">
<link href="<?=base_url('assets/backend/')?>lib/select2/css/select2-bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url('assets/backend') ?>/css/style.css">


<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="javascript:void(0)"><?= ucfirst(@$this->uri->segment(2)) ?></a>
            <a class="breadcrumb-item active" href="<?=site_url(set_url(@$this->uri->segment(2).'/'.@$this->uri->segment(3))) ?><?= @$this->uri->segment(4) != null ? '/'.@$this->uri->segment(4) : null ?>"><?=$title ?></a>
        </nav>
    </div><!-- br-pageheader -->
    <!-- <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30"> -->
        <!-- <h4 class="tx-gray-800 mg-b-5"><?=$title ?></h4> -->
    <!-- </div> -->
    <div class="br-pagebody">
        <div class="row ">
            <div class="col-12">
                <a href="<?=site_url(set_url(@$this->uri->segment(2))) ?>" title="" class="btn btn-warning float-right">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
        
        <form action="<?=$page ?>" id="myForm">
            <div class="row ml-1 mt-4">
                <div class="col-12">
                    <?php $this->view('messages') ?>
                    <input type="hidden" name="id" value="<?=$record->id ?>">
            
                    <div class="form-group">
                        <label for="nama" class="">Nama Pasien <span class="tx-danger">*</span></label>
                        <div class="" id="notifikasi_nama">
                            <input type="text" name="nama" id="nama" value="<?= $record->nama ?>" class="form-control rounded-10" placeholder="Nama Pasien" autocomplete="off">
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-6">
                    		<div class="form-group">
		                        <label for="no_rm" class="">No RM <span class="tx-danger">*</span></label>
		                        <div class="" id="notifikasi_no_rm">
		                            <input type="text" name="no_rm" id="no_rm" value="<?= $record->no_rm ?>" class="form-control rounded-10" placeholder="No RM" autocomplete="off">
		                        </div>
		                    </div>	
                    	</div>
                    	<div class="col-6">
                    		<div class="form-group">
		                        <label for="umur" class="">Umur <span class="tx-danger">*</span></label>
		                        <div class="" id="notifikasi_umur">
		                            <input type="text" name="umur" id="umur" value="<?= $record->umur ?>" class="form-control rounded-10" placeholder="Umur" autocomplete="off">
		                        </div>
		                    </div>	
                    	</div>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin" class="">Jenis Kelamin <span class="tx-danger">*</span></label>
                        <div class="">
                            <div class="row mg-t-9" id="notifikasi_jenis_kelamin">
                                <div class="col-lg-2 col-md-3 col-3">
                                    <label class="rdiobox rdiobox-primary-second">
                                        <input name="jenis_kelamin" value="L" id="L" type="radio" <?= $record->jenis_kelamin != null ? $record->jenis_kelamin == "L"  ? 'checked' : null : 'checked' ?> >
                                        <span>Laki-laki</span>
                                    </label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4">
                                    <label class="rdiobox rdiobox-primary-second">
                                        <input name="jenis_kelamin" value="P" id="P" type="radio" <?= $record->jenis_kelamin != null ? $record->jenis_kelamin == "P"  ? 'checked' : null : null ?> >
                                        <span>Perempuan</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="diagnosa" class="">Diagnosa <span class="tx-danger">*</span></label>
                        <div class="" id="notifikasi_diagnosa">
                        	<select name="diagnosa" id="diagnosa" class="form-control select2-show-search">
		                        <?php foreach($diagnosa as $key => $value ) { ?>
			                        <option value="<?=$value->id ?>" <?= $record->id_diagnosa == $value->id ? "selected" : null ?> ><?= $value->diagnosa  ?></option>
	                        	<?php } ?>
	                        </select>
                        </div>
                    </div>

                </div>    
            </div>

            <div class="row ml-1 mt-2 mb-5">
                <div class="col-12">
                    <button type="submit" class="btn color-primary-second float-right rounded-10 btn-block">
                        <i class="fa fa-paper-plane"></i> Simpan
                    </button>    
                </div>
            </div>
        </form>
            
        
    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->



<script src="<?=base_url('assets/backend/')?>lib/select2/js/select2.min.js"></script>

