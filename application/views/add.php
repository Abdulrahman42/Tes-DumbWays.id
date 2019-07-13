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

            </div>
            <div class="col-lg-6  mx-auto stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add User</h4>
                        <form method="post" action="<?= base_url('tes/add'); ?>">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="fullname" class="form-control">
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
                                <input type="tel" id="telp" name="phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="pesan">Alamat</label>
                                <textarea class="form-control" name="address" rows="3"></textarea>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets/'); ?>js/dataTables.bootstrap4.js"></script>

</body>

</html>