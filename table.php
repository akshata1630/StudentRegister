<div class="card">
    <div class="card-body">


        <?php

            $db = mysqli_connect('localhost','root','','system');
            $query = "SELECT * FROM student";
            $result=mysqli_query($db, $query);
           // $insertdata=mysqli_fetch_array($result);
            echo "<pre>";
            //print_r($insertdata);
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