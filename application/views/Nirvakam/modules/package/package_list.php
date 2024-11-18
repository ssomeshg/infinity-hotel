<style>
.gallery{
	width:100%;
	height:200px;
}
.package-content {
        white-space: pre-wrap; 
        text-align:justify;
    }
</style>


<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> Package List
        </h4>

        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <div class="table-responsive text-nowrap p-2">
                <table class="table table-hover" id="myTable">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-white">S.No</th>
                            <th class="text-white">Package Title</th>
                            <th class="text-white" style="width:20%;">Content</th>
                            <th class="text-white">Image</th>
                            <th class="text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1;
                        foreach ($package as $row):
						?>
                            <tr>
                                <td><span class="fw-medium"><?php echo $i++; ?></span></td>
                                <td><?php echo $row->package_heading; ?></td>
                                <td class="package-content"><?php echo substr($row->package_content, 0, 150) . '...'; ?></td>
                                <td style="width:25%;">
                                    <?php if ($row->image != ''): ?>
                                        <img src="<?php echo base_url('uploads/package/' . $row->image); ?>" alt="package_andaman" class="gallery">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
										<a class="dropdown-item text-primary" href="<?php echo base_url('package/package_active/' . $row->id) ?>"><i class="menu-icon tf-icons bx bx-package"></i> Addplan</a>
										<a class="dropdown-item text-info" href="<?php echo base_url('package/edit_plan/' . $row->id) ?>"><i class="bx bx-edit-alt me-1"></i> editplan</a>

                                            <a class="dropdown-item text-info" href="<?php echo base_url('package/package_edit/' . $row->id) ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item text-danger" href="<?php echo base_url('package/package_delete/' . $row->id) ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Bootstrap Table with Header Dark -->
    </div>
    <!-- / Content -->
</div>
<link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
<script src="//cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>
