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
            
                    <div class="form-group row">
                        <label for="diagnosa" class="col-sm-2 col-form-label">Diagnosa <span class="tx-danger">*</span></label>
                        <div class="col-sm-10" id="notifikasi_diagnosa">
                            <input type="text" name="diagnosa" id="diagnosa" value="<?= $record->diagnosa ?>" class="form-control rounded-10" placeholder="Diagnosa" autocomplete="off">
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


