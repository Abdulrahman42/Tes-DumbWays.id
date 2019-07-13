<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/dataTables.bootstrap4.css">


    <title>Document</title>
</head>

<body>
    <div class="container mt-auto">
        <div class="row">
            <div class="col-6">
                <h1>Biodata</h1>
            </div>
            <div class="col-6 mt-2 ">
                <!-- Button trigger modal -->
                <div class="float-sm-right">
                    <a href="<?= base_url('tes/add'); ?>" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-account-plus "></i> <span class="menu-title">Tambah</span>
                    </a>
                </div>
            </div>
            <div class="table">
                <table class="table table-bordered" id="datatab">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>No. hp</th>
                            <th>Alamat</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Agama</th>
                            <th>Hobi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $data->full_name ?></td>
                                <td><?= $data->place_of_birth_id ?></td>
                                <td><?= $data->date_of_birth ?></td>
                                <td><?= $data->phone_number ?></td>
                                <td><?= $data->address ?></td>
                                <td><?= $data->last_education ?></td>
                                <td><?= $data->religion ?></td>
                                <td> <?= $data->hobby ?> </td>
                                <td class="text-center">
                                    <a href="<?= base_url('tes/edit/' . $data->id_biodata); ?>" class="badge badge-primary">
                                        <i class="mdi mdi-pencil"></i><span class="menu-title">Update</span>
                                    </a>

                                    <a href="<?= base_url('tes/del/' . $data->id_biodata); ?>" onclick="return confirm('apakah anda yakin?')" class="badge badge-danger tombol-hapus">
                                        <i class="mdi mdi-bitbucket"></i> <span class="menu-title">Delete</span>
                                    </a>
                                </td>

                            </tr>
                            <?php $i++; ?>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('tes'); ?>">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" class="form-control">
                        </div>
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="inputState">Tempat Lahir</label>
                                <select id="inputState" class="form-control">
                                    <option selected></option>
                                    <option>Jakarta</option>
                                    <option>bandung</option>
                                    <option>surabaya</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="nama">Tanggal Lahir</label>
                                <input type="date" id="nama" class="form-control">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="telp">No Hp</label>
                            <input type="tel" id="telp" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="pesan">Alamat</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputState">Pendidikan Terakhirr</label>
                            <select id="inputState" class="form-control">
                                <option selected></option>
                                <option>Sarjana</option>
                                <option>Master</option>
                                <option>SMA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Agama</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label badge badge-secondary" for="exampleRadios1">
                                    Islam
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label badge badge-info" for="exampleRadios2">
                                    Kristen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label badge badge-warning-50" for="exampleRadios3">
                                    Katolik
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Hobi</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="exampleCheckboxs" id="exampleCheckboxs1" value="option1">
                                <label class="form-check-label badge badge-info" for="exampleCheckboxs1">
                                    Renang
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="exampleCheckboxs" id="exampleCheckboxs2" value="option2">
                                <label class="form-check-label" for="exampleCheckboxs2">
                                    Mancing
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="exampleCheckboxs" id="exampleCheckboxs3" value="option3">
                                <label class="form-check-label" for="exampleCheckboxs3">
                                    Game
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="exampleCheckboxs" id="exampleCheckboxs4" value="option4">
                                <label class="form-check-label" for="exampleCheckboxs4">
                                    Ghibah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="exampleCheckboxs" id="exampleCheckboxs5" value="option5">
                                <label class="form-check-label" for="exampleCheckboxs5">
                                    Programming
                                </label>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datatab').DataTable()
        })
    </script>

    <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets/'); ?>js/dataTables.bootstrap4.js"></script>

</body>

</html>