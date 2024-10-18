<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mt-0 header-title mb-4">
                    <a class="btn btn-primary waves-effect waves-light" href="?p=surat_tugas_kompetisi&form"><i
                            class="fas fa-plus"></i>
                        Ajukan Surat
                    </a>
                </div>
                <hr>
                <table id="datatable" class="table table-striped table-bordered table-hover nowrap" style="width:100%">
                    <thead>
                        <th>Tanggal Pengajuan</th>
                        <th>Nama Lomba</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                    <?php foreach($data as $key => $dt) { ?>
                        <tr>
                            <td><?= show_tanggal($dt['Tanggal']) ?></td>
                            <td><?= $dt['Nama_lomba'] ?></td>
                            <td><?= $dt['status'] ?></td>
                            <td>
                                <a href="?p=surat_tugas_kompetisi&form=view&id=<?= $dt['id'] ?>" class="btn btn-info" title="View">
                                    <i class="fa fa-search"></i>
                                </a>
                                
                                <?php if(strtolower($dt['status']) == 'disetujui') { ?>
                                    <a href="#" class="btn btn-success" onclick="return alert('File berhasil diunduh')" title="Download">
                                        <i class="fa fa-file-pdf"></i>
                                    </a>
                                <?php } else { ?>
                                    <a href="#" class="btn btn-danger" onclick="return confirm('Apa anda yakin?')" title="Cancel">
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