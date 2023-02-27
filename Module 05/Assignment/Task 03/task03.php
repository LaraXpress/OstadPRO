<?php
    include_once "person.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment Module-5 Task-3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
        $person = new Person();
        if(isset($_POST['submit'])){
            if(!empty($_POST['name'] && $_POST['email'])){
                if(preg_match('/^[a-zA-Z\s]+$/',$_POST['name'])){
                    $pname  = $_POST['name'];
                    $pemail = $_POST['email'];

                    $person->setName($pname);
                    $person->setEmail($pemail);
                }else{
                    $err = "<span style='color:#ef6262'><b>Invalid Name</b></span>";
                }
            }else{
                $err = "<span style='color:#ef6262'><b>Field must not be Empty!</b></span>";
            }
            
        }
    ?>
<div class="container">
  <h2>HTML Basics</h2>
   <?php 
      if(!empty($err)){
        echo $err;
      }            
  ?>
  <form action="">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>        
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  <form action="">
    <?php
    echo <<<DOC
      <b>{$person->getName()}</b><br/>
      <b>{$person->getEmail()}</b><br/>
      DOC;
    ?>
  </form>
</div>

</body>
</html>
