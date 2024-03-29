<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css">
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
          <a class="nav-link active" aria-current="page" href="#<?php echo base_url('dashboard') ?>">Home</a>
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
           <div class="row mt-5">
               <div class="col-md-6 offset-md-3">
               <form   method = "POST" enctype='multipart/form-data'>
               <div class="mb-3">
               <?php if (isset($errors)) :?>
                <div class="alert alert-danger">
                    <?= validation_list_errors() ?> 

                </div>
                 <?php endif ; ?>
                <?php 
                if (isset($Flash_message)) : ?>
                <div class="alert alert-success">
                     Congratulation! Registered successfully

                </div>
                 <?php endif ;  ?>
              
                    <label for="imageName" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="imageName" name="imageName" value="">
                </div>
                <button type="submit" class="btn btn-primary" name ="Submit">Submit</button>
                </form>
               </div>
           </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>