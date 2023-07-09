<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="viewtable.css">
   <title>View Records</title>
</head>
<body>
 

    <table>
        <thead>
            <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Employee Working Hours</th>
            <th>Employee Phone Number</th>
            <th>Delete </th>
            <th>Edit </th>
            </tr>
        </thead>
    <tbody>
         <?php



    require('connection.php');

    function selectData()
    {
        $data = array();
        $p = crud::connect()->prepare('SELECT * FROM crudtable');
        $p->execute();
        $data = $p->fetchAll(PDO::FETCH_ASSOC);

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete($id); // Call the delete function with the provided ID
        }

        return $data;
    }

    $p = selectData(); // Call the selectData() function to fetch the data

    if (count($p) > 0) {
        foreach ($p as $row) {
            echo '<tr>';
            echo '<td>' . $row['empID'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>';
            echo '<td>' . $row['workinghours'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td><a href="view.php?id=' . $row['empID'] . '">Delete</a></td>';
            echo '<td><a href="upDate.php?id=' . $row['empID'] . '">Edit</a></td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="6">No data found</td></tr>';
    }

    function delete($id)
    {
        $p = crud::connect()->prepare('DELETE FROM crudtable WHERE empID=:id');
        $p->bindValue(':id', $id);
        $p->execute();
    }
    ?>
       
       ?> 

               
    </tbody>
    </table>

</body>
</html>
