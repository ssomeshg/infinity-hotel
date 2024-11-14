<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Admin List</h5> 
                <a href="<?= base_url() . 'nirvakam_create' ?>" class="btn btn-primary d-block m-3">
                <i class='bx bx-list-ul'></i> Add</a></a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table id="vesselsListTable" class="table table-bordered" style="width:100%">
                        <caption>List of Admin</caption>
                        <thead>
                            <tr class="table-dark">
                                <th class="text-white">S.No</th>
                                <th class="text-white">User Name</th> 
                                <th class="text-white">Email</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $i=1; foreach ($nirvakam as $item): ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $item->username; ?></td>
                                    <td><?php echo $item->email; ?></td>
                                    <td>
									<a href="<?php echo base_url() . 'Nirvakam/Edit_nirvakam/' . $item->id ?>" class="btn btn-icon btn-outline-primary"><span class="tf-icons bx bx-edit-alt"></span></a> | 
									<a href="<?php echo base_url() . 'Nirvakam/Delete_nirvakam/' . $item->id ?>" class="btn btn-icon btn-outline-danger"><span class="tf-icons bx bx-trash"></span></a>
									</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
