<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>galeryImages</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark px-5">
      <a class="navbar-brand">Images Galery</a>
      <div class="form-inline">
        <a href='../index.php'>
          <button class="btn btn-light mr-2 my-2 my-sm-0" 
           type="submit">Home</button>
        </a>
        <a href='../pages/addImage.php'>
          <button class="btn btn-light my-2 my-sm-0" 
           type="submit">Add Image</button>
        </a>
      </div>
    </nav>
    <br>

    <div class="container">
      <div class='row'>
        <div class='col-md-8 card'>
          <h4 class='m-3'>Edit Image</h4><hr>
          <?php
          
            include_once '../modelo/conexion.php';
            include_once '../modelo/editar_modelo.php';
            $id= $_GET['id'];
            $image= new ImagenEdit();
            $image->update($id);
            $rows= $image->select($id);
            
            if(!empty($rows)){
              foreach($rows as $row){
          ?>
          <form action='' method='post' class='card-body'>
           
            <input type='text' class='form-control mb-3' 
             name='titlePostEdit' placeholder='Title'
             value='<?php echo $row['TITLE']; ?>' >
            <input type='text' class='form-control mb-3' 
             name='descriptionPostEdit' placeholder='Description'
             value='<?php echo $row['DESCRIPTION']; ?>'>
            
            <input type='submit' class='btn btn-block btn-success' 
             name='editarBtn' value='Send'>
          </form>
          <?php }  } ?>
        </div>
      </div>
    </div>
    <br>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>