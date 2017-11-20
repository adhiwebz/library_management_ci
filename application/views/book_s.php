<!DOCTYPE html>
<html>

    <head>
        <title>Book,Library Manage</title>
        <?php $this->load->view('include/head_includes'); ?>
        <link href="<?php echo base_url('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">

    </head>

    <body class="theme-blue">

        <?php $this->load->view('include/navbar'); ?>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Book MANAGEMENT
                                    <small><?php echo'Total ' . count($books) . ' books added'; ?></small>
                                </h2>
                            </div>
                            <div class="body">
                                <div class="button-demo">
                                    <a href="<?php echo base_url('books/add'); ?>" class="btn btn-primary waves-effect">Add a Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    ALL Books
                                </h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">


                           <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>RFID</th>
                            </tr>
                        </thead>        
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>RFID</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($books as $book): ?>
                                <tr>
                                    <td><?php echo $book->id; ?></td>
                                    <td><?php echo $book->name; ?></td>
                                    <td><?php echo $book->author; ?></td>
                                    <td><?php echo $book->category; ?></td>
                                    <td><?php echo $book->rfid; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Exportable Table -->



            </div>
        </section>
        <?php $this->load->view('include/footer_includes'); ?>
        <script src="<?php echo base_url('assets/plugins/jquery-datatable/jquery.dataTables.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-datatable/extensions/export/jszip.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="<?php echo base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="<?php echo base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="<?php echo base_url('assets/'); ?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
        <script>
            $(function () {

                $('.js-exportable').DataTable({
                    dom: 'Bfrtip',
                    responsive: true,
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    </body>

</html>