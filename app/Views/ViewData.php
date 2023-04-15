<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My New Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('dashboard') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url('ViewData') ?>" tabindex="-1" aria-disabled="true">Viw table</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
      <div class="container">
         <div class="container_table ">
            <table class="table table-dark table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Email</th>
                  <th scope="col">Image Name</th>
                  <th scope="col">Create_at</th>
                  <th scope="col">Updated_at</th>
                  <th scope="col" >Update</th>
                  <th scope="col">Delete</th>
                  <th scope="col">Image</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php 
                   foreach ($UserData as $key => $value) {
                    ?>
                   <tr>
                    <th scope='row'><?php echo $value['id']?></th>
                   <th scope='row'><?php echo $value['name'] ?></th>
                   <th scope='row'><?php echo $value['lname'] ?></th>
                   <th scope='row'><?php echo $value['email'] ?></th>
                   <th scope='row'><?php echo $value['image'] ?></th>
                   <th scope='row'><?php echo $value['created_at']?></th>
                   <th scope='row'><?php echo $value['updated_at'] ?></th>
                   <th scope='row' ><a class='btn btn-warning' href="<?php echo base_url('update') ?>/<?php echo $value['id']?>">Update</a></th>
                   <th scope='row' ><a class='btn btn-danger' onclick = 'return confirm("are you confirm to delete ")' href="<?php echo base_url('delete') ?>/<?php echo $value['id']?>">Delete</a></th>
                   <th scope='row' ><a class='btn btn-danger'  href="<?php echo base_url('addImage') ?>/<?php echo $value['id']?>">Add Image</a></th>

                   </tr>
                  
                 <?php  }  
                ?>
              </tbody>
            </table>
         </div>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>