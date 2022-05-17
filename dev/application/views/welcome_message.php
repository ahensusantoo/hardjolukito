<?php $this->view('template/backend/header') ?>
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
            <div class="br-pageheader pd-y-15 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-12">
                    <a class="breadcrumb-item" href="index.html">Bracket</a>
                    <span class="breadcrumb-item active">Blank Page</span>
                </nav>
            </div><!-- br-pageheader -->
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                <h4 class="tx-gray-800 mg-b-5">Blank Page (Default Layout)</h4>
                <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
            </div>
            <div class="br-pagebody">
                <!-- start you own content here -->
            </div><!-- br-pagebody -->
        </div><!-- br-mainpanel -->
        <?= $template ?>
        <!-- ########## END: MAIN PANEL ########## -->
<?php $this->view('template/backend/footer') ?>
