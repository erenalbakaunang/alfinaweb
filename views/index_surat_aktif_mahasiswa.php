<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mt-0 header-title mb-4">
                    <a class="btn btn-primary waves-effect waves-light" href="?p=surat_sam&form"><i
                            class="fas fa-plus"></i>
                            <?= lang ('Ajukan Surat') ?>
                    </a>
                </div>
                <hr>
                <table id="datatable" class="table table-striped table-bordered table-hover nowrap" style="width:100%">
                    <thead>
                        <th><?= lang ('Tanggal Pengajuan') ?></th>
                        <th><?= lang ('Tujuan') ?></th>
                        <th><?= lang ('Status') ?></th>
                        <th><?= lang ('Aksi') ?></th>
                    </thead>
                    <tbody>
                    <?php foreach($data as $key => $dt) { ?>
                        <tr>
                            <td><?= show_tanggal($dt['Tanggal']) ?></td>
                            <td><?= $dt['tujuan'] ?></td>
                            <td><?= $dt['status'] ?></td>
                            <td>
                                <a href="?p=surat_sam&form=view&id=<?= $dt['id'] ?>" class="btn btn-info" title="<?= lang('Lihat Data') ?>">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <?php if(strtolower($dt['status']) == 'disetujui') { ?>
                                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#viewPdfModal" title="<?= lang('Lihat Pdf') ?>">
                                        <i class="fa fa-file-pdf"></i>
                                    </a>
                                    <a href="#" class="btn btn-success" onclick="return alert('<?= lang('File berhasil diunduh') ?>')"
                                            title="<?= lang('Unduh') ?>">
                                            <i class="fa fa-download"></i>
                                    </a>
                                <?php } elseif(strtolower($dt['status']) == 'menunggu') { ?>
                                    <a href="#" class="btn btn-danger" onclick="return confirm('<?= lang('Apakah Anda yakin ingin membatalkan surat?') ?>')" title="<?= lang('Batalkan') ?>">
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
<!-- Modal -->
<div class="modal fade" id="viewPdfModal" tabindex="-1" role="dialog" aria-labelledby="viewPdfModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                    <div class="col-lg-1">
                        <button style="margin:0;padding:0;line-height:35px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="far fa-times-circle"></i>
                            </span>
                        </button>
                    </div>

                    <div class="col-lg-9">
                        <h5 class="modal-title" style="line-height: 35px; font-size:14px;">
                        <?= lang ('Surat Aktif Mahasiswa') ?>
                        </h5>
                    </div>

                    <div class="col-lg-2">
                        <button type="button" class="btn btn-primary btn-sm" onclick="return alert('<?= lang('File berhasil diunduh') ?>')"><?= lang ('Unduh') ?></button>
                    </div>
            </div>
            
            <div class="modal-body">
                <div class="t-center">
                    <div style="padding: 150px 200px">
                        <i class="fa fa-5x fa-file-pdf"></i>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-none">
            </div>
        </div>
    </div>
</div>

