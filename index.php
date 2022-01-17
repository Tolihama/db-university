<?php
    require_once __DIR__ . './partials/scripts/departments_query.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Departments list</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>View</th>
                </tr>
            </thead>
            <?php
                if (count($departments) > 0) :
            ?>
            <tbody>
                <?php 
                    foreach($departments as $department) :
                ?>
                <tr>
                    <td><?php echo $department['id']; ?></td>
                    <td><?php echo $department['name']; ?></td>
                    <td><?php echo $department['address']; ?></td>
                    <td><?php echo $department['phone']; ?></td>
                    <td>
                        <a href="http://localhost/db-university/id?<?php echo $department['id']; ?>">View</a>
                    </td>

                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
            <?php
                endif;
            ?>
        </table>


    </main>

    
</body>
</html>