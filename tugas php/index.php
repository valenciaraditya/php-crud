<?php
include 'koneksi/koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="row g-0">
        <div class="col-md-3 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark " style="height: inherit; min-height:100vh;">
            <a class="d-flex  alignment-items-center text-white text-decoration-none mb-1" href="#">
                <i class="bi bi-apple me-2 mt-1"></i><span class="fw-bold fs-4">APPLE ADMIN</span></a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto mt-1">
                    <li>
                        <a href="dashboard.php" class="nav-link text-white"><i class="bi bi-bank me-2"></i>HOME</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link active text-white"><i class="bi bi-pc-display-horizontal me-2"></i>MASTER PROJECT</a>
                    </li>
                    <li>
                        <a href="service.php" class="nav-link text-white"><i class="bi bi-hammer me-2"></i>MASTER SERVICE</a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <div class="dropdown">
                        <a class="d-flex align-items-center dropdown-toggle text-decoration-none text-white"  data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>Admin</strong>
                        
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Profile</a></li>
                          <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                      </div>
                </div>
            </div>
            
            <div class="col-md-9">
              <div class="container-fluid">
                  <div class="row">
                      <h2 class="mt-2">Project</h2>
                  </div>
                  <div class="row">
                      <div class="col-md-8">
                          <div class="card">
                              <div class="card-header">
                                  <h6>Data project</h6>
                              </div>
                              <div class="card-body table-responsive">
                                  <table class="table">
                                      <thead>
                                          <th>Title</th>
                                          <th>Date</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                          <tr>
                                          <?php
                                        include 'koneksi/koneksi.php';
                                            $query = mysqli_query($connect, "SELECT * FROM data ORDER BY id ASC LIMIT 5");
                                            while ($data = mysqli_fetch_array($query)) {
                                                    ?>
                                        <td><?php echo $data['nama'] ?></td>
                                        <td><?php echo $data['tanggal'] ?></td>   
                                        <td><?php echo $data['deskripsi'] ?></td>
                                              <td>
                                                  <div class="d-flex justify-content-end">
                                                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                                  <a href="koneksi/edit.php?id=<?php echo $data['id'];?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                  <a href="koneksi/delete.php?id=<?php echo $data['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger" ><i class="bi bi-trash"></i></a>
                                              </div>
                                              </td>
                                          </tr>
                                      </tbody> <?php } ?>
                                    </table>
                                    <div class="modal fade" id="detailproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            ...
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card">
                              <div class="card-header">
                                  <h6>Tambah Project</h6>
                              </div>
                              <div class="card-body">
                                <form action="koneksi/tambahan.php" method="POST">
                                      <label class="form-label" for="nama">Project Name</label>
                                      <input class="form-control" type="text" name="nama" id="nama" minlength="5" required>
                                      <label class="form-label" for="tanggal">Project Date</label>
                                      <input class="form-control" type="date"  name="tanggal" id="tanggal" required>
                                      <label class="form-label" for="deskripsi">Description</label>
                                      <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                                      <input class="btn btn-success mt-4" type="submit" value="Simpan">
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
         </div>
         
       
  
  
            


    <script src="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\js\bootstrap.js"></script>
</body>
</html>