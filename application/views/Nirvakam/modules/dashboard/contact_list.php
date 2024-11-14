<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Contact List</h5> 
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table id="myTable" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr class="table-dark">
                                <th class="text-white">S.No</th>
                                <th class="text-white">User Name</th> 
                                <th class="text-white">Email</th>
                                <th class="text-white">Phone</th>
                                <th class="text-white">Subject</th>
                                <th class="text-white">Message</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =1; foreach($contact as $row): ?>
                                <tr>
                                    <td><?=  $i++; ?></td>
                                    <td><?=  $row->name; ?></td>
                                    <td><?= $row->email; ?></td>
                                    <td><?= $row->phone_number; ?></td>
                                    <td><?=  $row->subject; ?></td>
                                    <td><?=  $row->message; ?></td>
                                    <td>
									<a href="<?php echo base_url() . 'Web/contact_delete/' . $row->id ?>" class="btn btn-icon btn-outline-danger"><span class="tf-icons bx bx-trash"></span></a>
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