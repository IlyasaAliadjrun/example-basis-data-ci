<h1>Edit Mahasiswa</h1>

<form action="<?php echo site_url('mahasiswa/doedit/'.$mhs->id); ?>" method="POST">
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" placeholder="Enter NIM" value="<?=$mhs->nim?>">
  </div>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" value="<?=$mhs->nama?>">
  </div>

  <div class="form-group">
    <label for="semester">Semester</label>
    <input type="text" class="form-control" id="semester" name="semester" placeholder="Enter Semester" value="<?=$mhs->semester?>">
  </div>

  <div class="form-group">
    <label for="ipk">IPK</label>
    <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Enter IPK" value="<?=$mhs->ipk?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>