<section class="content-header">
        <h1> Items
            <small>Data barang</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
            <li class="active">Items</li>
        </ol>
        </section>
        <!-- Main content -->
          <section class="content">
          <?php $this->view('messages') ?>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Barcode Generator</h3>
                    <div class="pull-right">
                        <a href="<?=site_url('item')?>"class="btn btn-warning btn-flat btn-sm" >
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                    
                </div>
                <div class="box-body">
                <?php
                $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '">';
                ?>
                <br>
                <?=$row->barcode?>
                </div>
            </div>

          </section>