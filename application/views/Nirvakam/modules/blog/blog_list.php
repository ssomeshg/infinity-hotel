<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Blog List</h5>
                <a href="<?= base_url() . 'blog_create' ?>" class="btn btn-primary d-block m-3">
                    <i class='bx bx-list-ul'></i> Add</a></a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table id="myTable" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr class="table-dark">
                                <th class="text-white">S.No</th>
                                <th class="text-white">Title</th>
                                <th class="text-white">Content</th>
                                <th class="text-white">Meta Tag</th>
                                <th class="text-white">Meta Title</th>
                                <th class="text-white">Mata Description</th>
                                <th class="text-white">Image</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($blog as $row): ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td class="package-content"><?php echo $row->title; ?></td>
                                    <td class="package-content"><?php echo $row->description; ?></td>
                                    <td class="package-content"><?php echo $row->meta_tag; ?></td>
                                    <td class="package-content"><?php echo $row->meta_title; ?></td>
                                    <td class="package-content"><?php echo $row->meta_description; ?></td>
                                    <td><?php if ($row->image != ''): ?>
                                            <img src="<?php echo base_url('uploads/blog/' . $row->image); ?>" alt="before_after" style="width:100%; height:100px;">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url() . 'Blog/blog_edit/' . $row->id ?>" class="btn btn-icon btn-outline-primary"><span class="tf-icons bx bx-edit-alt"></span></a> |
                                        <a href="<?php echo base_url() . 'Blog/blog_delete/' . $row->id ?>" class="btn btn-icon btn-outline-danger"><span class="tf-icons bx bx-trash"></span></a>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css">
<script src="//cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>