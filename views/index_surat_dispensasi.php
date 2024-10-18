<div class="row">
    <div class="col-lg-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Surat Dispensasi</a>
                    </li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div>
            <h4 class="page-title">Surat Dispensasi</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mt-0 header-title mb-4">
                    <a class="btn btn-primary waves-effect waves-light" href="?p=surat_dispensasi&form"><i
                            class="fas fa-plus"></i>
                        Ajukan Surat
                    </a>
                </div>
                <hr>
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
                            <td><?= show_tanggal($dt['Tanggal']) ?></td>
                            <td><?= $dt['tujuan'] ?></td>
                            <td><?= $dt['Status'] ?></td>
                            <td>
                                <a href="?p=surat_dispensasi&form=view&id=<?= $dt['id'] ?>" class="btn btn-info" title="View">
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