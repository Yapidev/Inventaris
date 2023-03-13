<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Laporan Peminjaman Inventaris</div>
        <div class="panel-body">
            <form action="" class="form-inline">
                <div class="form-group">
                    <label for="">Tanggal Awal</label><br>
                    <input type="date" id="tgl_awal" name="tglDari" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Sampai</label><br>
                    <input type="date" id="tgl_sampai" name="tglsampai" class="form-control">
                </div>
                <div class="form-group"><br>
                    <input type="submit" class="btn btn-primary btn-sm" value="Filter">
                    <button class="btn btn-sm btn-success">Cetak Laporan</button>
                </div>
            </form>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Inventaris</th>
                        <th>Jumlah</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>Laptop</td>
                    <td>Andika</td>
                    <td>10</td>
                    <td>10-11-2021</td>
                    <td>12-11-2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>