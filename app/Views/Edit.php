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
               <form  action="/signup" method = "POST">
               <div class="mb-3">
               <?php if (isset($validation)) :?>
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
              
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['neme'] ?>">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label"> Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $data['lneme'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $data['email'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $data['email'] ?>">
                </div>
                <div class="mb-3 ">
                    <label class="form-label" for="ConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword" value="<?= set_value('ConfirmPassword')?>">
                </div>
                <button type="submit" class="btn btn-primary" name ="Submit">Submit</button>
                </form>
               </div>
           </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>