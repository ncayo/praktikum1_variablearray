<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Daftar Dosen - Form</title>
</head>

<body>
    <div id="body" class="col-md-12">
        <h3>Form Dosen</h3>
        
        <?php echo form_open("dosen/save") ?>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                <label for="gender_0" class="custom-control-label">Laki-laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                <label for="gender_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
            <div class="col-8">
              <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
            <div class="col-8">
              <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nidn" class="col-4 col-form-label">NIDN</label> 
            <div class="col-8">
              <input id="nidn" name="nidn" placeholder="Masukkan NIDN" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="pendidikan" class="col-4 col-form-label">Pendidikan</label> 
            <div class="col-8">
              <input id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        <?php echo form_close() ?>
    </div>
</body>

</html>