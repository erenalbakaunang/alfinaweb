<div class="row row-detail-page">
    <div class="col-lg-1 left-back-link">
        <a href="?p=<?= strtolower($label_status) ?>">
            <i class="fa fa-arrow-left"></i>
        </a>
    </div>

    <div class="col-lg-11">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="label-content">Surat <?= $label_status ?> / <?= $label ?? '' ?></h6>
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
                        <th><?= $column[1] ?></th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $dt) { ?>
                            <tr>
                                <td><?= $dt['nama'] ?></td>
                                <td><?= $dt[$column[0]] ?></td>
                                <td>
                                    <a href="?p=<?= $slug ?>&form=view&id=<?= $dt['id'] ?>" class="btn btn-info"
                                        title="View">
                                        <i class="fa fa-search"></i>
                                    </a>

                                    <?php if (strtolower($label_status) == 'disetujui') { ?>
                                        <a href="#" class="btn btn-success" onclick="return alert('File berhasil diunduh')"
                                            title="Download">
                                            <i class="fa fa-file-pdf"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a href="#" class="btn btn-danger" onclick="return confirm('Apa anda yakin?')"
                                            title="Cancel">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>