<h2>TAMBAH PRODUK</h2>
<div class="kotak2">
<form class="form-horizontal" action="<?php echo base_url()?>shopping/proses_produk" method="post" name="frmCO" id="frmCO">
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="nama_produk">Nama Produk:</label>
            <div class="col-xs-9">
                <input type="nama_produk" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="deskripsi">Deskripsi :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="harga">Harga:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
            </div>
        </div> 
        <div class="form-group has-success has-feedback">
        	<label class="control-label col-xs-3" for="gambar">Gambar:</label>
        		<div class="col-xs-9">
        			<input type="text" class="form-control" name="gambar" id="gambar" placeholder="Gambar">
        		</div>
        </div>
        <div class="form-group has-success has-feedback">
        	<label class="control-label col-xs-3" for="kategori">Kategori:</label>
        		<div class="col-xs-9">
        			<input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori">
        				</div>
        		</div>       
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary">Tambah Produk</button>
            </div>
        </div>
    </form>
    
</div>