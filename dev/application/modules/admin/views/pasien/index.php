<link href="<?=base_url('assets/backend/')?>lib/select2/css/select2.min.css" rel="stylesheet">
<link href="<?=base_url('assets/backend/')?>lib/select2/css/select2-bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url('assets/backend') ?>/css/style.css">

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="javascript:void(0)"><?= ucfirst($this->uri->segment(2)) ?></a>
            <a class="breadcrumb-item active" href="<?=site_url(set_url(@$this->uri->segment(2).'/'.@$this->uri->segment(3))) ?>"><?=$title ?></a>
        </nav>
    </div><!-- br-pageheader -->
    <!-- <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30"> -->
        <!-- <h4 class="tx-gray-800 mg-b-5"><?=$title ?></h4> -->
    <!-- </div> -->
    <div class="br-pagebody">
        <form action="<?=site_url(set_url(@$this->uri->segment(2)))?>" method="get" enctype="multipart/form-data">
            <div class="row ml-1">
                <div class="col-lg-4 col-md-4 col-12 mb-2"></div>
                <div class="col-lg-3 col-md-4 col-6 mb-2">
                    
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-2">
                    <div class="input-group" id="notifikasi_pencarian">
                        <input type="text" name="pencarian" value="<?= @$_GET['pencarian'] ?>" id="pencarian" class="form-control" placeholder="pencarian" autocomplete="off" aria-describedby="add-cari">
                        <div class="input-group-append">
                            <button type="submit" class="btn color-primary-second float-right" id="terapkan">Filter</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 mb-2">
                    <a href="<?=site_url(set_url($this->uri->segment(2).'/tambah')) ?>" title="" class="btn color-primary-second float-right btn-block">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
            </div>
        </form>
        <div class="row ml-1 mt-2">
            <div class="col-12">
                <?php $this->view('messages') ?>
                <div class="bd rounded table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-colored color-primary-second">
                            <tr>
                                <th width="2%">No</th>
                                <th>No RM</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Diagnosa</th>
                                <th width="10%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($record)): ?>
                                <?php 
                                    $no = 1;
                                    foreach($record as $key => $value){ ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->no_rm ?></td>
                                        <td><?= $value->nama ?></td>
                                        <td><?= $value->umur ?></td>
                                        <td><?= $value->jenis_kelamin== "L"? "Laki-Laki" : "Perempuan" ?></td>
                                        <td><?= $value->diagnosa ?></td>
                                        <td nowrap align="center">
                                            <!-- <a href="<?=base_url(set_url(@$this->uri->segment(2).'/detail/'.$value->id_anggota)) ?>" class="btn btn-info btn-sm" title="detail">
                                                <i class="fas fa-eye"></i>
                                            </a> -->
                                            <a href="<?=base_url(set_url(@$this->uri->segment(2).'/edit/'.$value->id)) ?>" class="btn btn-warning btn-sm" title="edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <button type="button" data-id="<?=$value->id ?>" class="btn btn-danger btn-sm delete" title="Hapus">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>                                
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="text-center">Tidak terdapat data !!!</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Bagian Paginatian -->
                <div class="row mt-3">
                    <div class="col-lg-2 col-md-4 col-12 mb-2">
                        Total Data : <?= indo_currency($total_rows) ?>
                    </div>
                    <div class="col-lg-10 col-md-8 col-12">
                        <ul class="pagination pagination-basic mg-b-0 float-right">
                            <?= pagination($jumlah_hal, $hal_aktif, base_url(set_url(@$this->uri->segment(2).'?pencarian='.@$_GET['pencarian']))) ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

<script src="<?=base_url('assets/backend/')?>lib/select2/js/select2.min.js"></script>