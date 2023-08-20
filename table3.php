<?php
include_once('query.php');
$query="select sum(esalary), min(esalary), max(esalary),avg(esalary) from employee";
$result=mysqli_query($link,"$query" ) ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home page</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
<img src="home.jpg" id="bg" alt="">
<div class="container">
    <table align="center"  border="1px" style="width:1000px; line-height:25px">
        <tr>
            <th colspan="4" ><h2 align="center">Query results</h2> </th>
        </tr>
        <t>
            <th>Sum</th>
            <th>Min</th>
            <th>Max</th>
            <th>Average</th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $rows['sum(esalary)'];?></td>
                <td><?php echo $rows['min(esalary)'];?></td>
                <td><?php echo $rows['max(esalary)'];?></td>
                <td><?php echo $rows['avg(esalary)'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>