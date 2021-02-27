<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width-device-width, initail-sacel-1.0">
    <meta http-equive="X-UA-Compatible" content="le-edge">
    <title> PHP CRUD with bootstrap Model</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>




<!-- Modal -->
<div class="modal fade" id="StudentDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     


      
      
    <form method="post"  action="<?php echo base_url().'index.php/Student/create';?>">
      
      <div class="modal-body">
        
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Roll Number</label>
            <input type="number" name="rollno" class="form-control" placeholder="Enter Roll Number">
        </div>
        <div class="form-group">
            <label>Standard</label>
            <input type="number" name="std" class="form-control" placeholder="Enter standard">
        </div>
    
    </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="Submit" name="insertdata" class="btn btn-primary">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2> APPLICATION MODEL</h2>
            </div>
            <div class="card">
                <div class="card-body">
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#StudentDataModal">
                    ADD USER
                </button>
        </div>
    </div>


    <?php

        $db = mysqli_connect('localhost','root','','system');
        $query = "SELECT * FROM student";
        $result=mysqli_query($db, $query);
        //$result=mysqli_fetch_array($result);
        echo "<pre>";
        //print_r($result);
        echo "</pre>";
    ?>
    <table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Studnet Name</th>
        <th scope="col">Roll Number</th>
        <th scope="col">Standard</th>
        
      </tr>
    </thead>
<?php

if($result)
{
foreach($result as $row)
{
    ?>
        <tbody>
            <tr>
                <td> <?php echo $row['id']; ?> </td>
                <td> <?php echo $row['sname']; ?></td>
                <td> <?php echo $row['rollno']; ?></td>
                <td> <?php echo $row['std']; ?></td>
                
            </tr>
        </tbody>

    <?php

    }
}
else{
            echo "No record found";
    }
?>

</table>

</div>
</div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
