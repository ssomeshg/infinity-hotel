<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-header">Video Details </h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url() . 'gallery_category_save' ?>" method="post" enctype="multipart/form-data" onSubmit="return validate();" autocomplete="off">
                            <input type="hidden" name="id" id="id" value="<?php echo isset($video->id) ? $video->id : ''; ?>" />
                            <div class="row">

                                <div class="col-md-6">
                                    <label class="col-sm- col-form-label" for="category_name">Category Name</label>
                                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter category name" />
                                    <div> <span id="username_error" style="color:red"></span></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-sm- col-form-label" for="category_name">Category Image</label>
                                    <input type="file" class="form-control" name="image" id="image" placeholder="Enter Video ID" />
                                    <div> <span id="username_error" style="color:red"></span></div>
                                </div>

                                <div class="col-sm-12 mt-3" align=right>
                                    <input type='submit' class='btn btn-primary' value='Submit'>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive text-nowrap mt-5">
                            <table id="myTable" class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr class="table-dark">
                                        <th class="text-white">S.No</th>
                                        <th class="text-white">Category Name</th>
                                        <th class="text-white">Category Image</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($gallery_category as $row): ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $row->category_name; ?>
                                                <input type="hidden" class="category_name" value="<?php echo $row->id; ?>">
                                            </td>
                                            <td><?php if ($row->image != ''): ?>
                                                    <img src="<?php echo base_url('uploads/gallery/' . $row->image); ?>" alt="banner" style="width:100%; height:100px;">
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-icon btn-outline-primary edit-video" data-id="<?php echo $row->id; ?>"><span class=" tf-icons bx bx-edit-alt"></span></a> |
                                                <a href="<?php echo base_url() . 'Banner/video_delete/' . $row->id ?>" class="btn btn-icon btn-outline-danger"><span class="tf-icons bx bx-trash"></span></a>
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
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css">
<script src="//cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>
<script>
    $(document).ready(function() {
        $('.edit-video').on('click', function(e) {
            e.preventDefault();
            var videoId = $(this).data('id');
            editvideo(videoId);
        });

        function editvideo(id) {
            $.ajax({
                url: '<?php echo base_url('Banner/gallery_category_edit'); ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function(response) {
                    $('#id').val(response.id);
                    $('#category_name').val(response.category_name);
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + status + ' - ' + error);
                }
            });
        }
    });
</script>