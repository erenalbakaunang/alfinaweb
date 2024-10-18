<div class="row row-detail-page">
    <div class="col-lg-1 left-back-link">
        <a href="/">
            <i class="fa fa-arrow-left"></i>
        </a>
    </div>

    <div class="col-lg-11">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="label-content">Surat Menunggu</h6>
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
                        <th>Jenis Pengajuan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $dt) { ?>
                            <tr>
                                <td><?= show_tanggal($dt['Tanggal']) ?></td>
                                <td><?= $dt['jenis'] ?></td>
                                <td>
                                    <a href="javascript:void(0);" data-href="?p=menunggu&form=view&id=<?= $dt['id'] ?>" class="btn btn-info dt-control" title="View">
                                        Lacak Surat
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