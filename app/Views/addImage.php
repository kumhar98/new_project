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