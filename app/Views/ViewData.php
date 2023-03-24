<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
      <div class="container">
         <div class="container_table ">
            <table class="table table-dark table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Email</th>
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