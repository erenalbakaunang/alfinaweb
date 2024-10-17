<div class="row row-detail-page">
    <div class="col-lg-1 left-back-link">
        <a href="?p=disetujui">
            <i class="fa fa-arrow-left"></i>
        </a>
    </div>

    <div class="col-lg-11">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="label-content">Surat Disetujui / <?= $label ?? '' ?></h6>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-striped table-bordered table-hover nowrap" style="width:100%">
                    <thead>
                        <th>Tanggal Pengajuan</th>
                        <th>Tujuan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php foreach($data as $key => $dt) { ?>
                            <tr>
                                <td><?= $dt['nama'] ?></td>
                                <td><?= $dt['tujuan'] ?></td>
                                <td><?= $dt['status'] ?></td>
                                <td>
                                    <a href="?p=surat_sam&form=view&id=<?= $dt['id'] ?>" class="btn btn-info" title="View">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#" class="btn btn-success" title="Download">
                                        <i class="fa fa-file-pdf"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>