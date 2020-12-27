<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <a href="index.php?page=addStudent">ADD</a>
    <tr>
        <th>STT</th>
        <th>NAME</th>
        <th>CLASS</th>
        <th>MAIL</th>
        <th>PHONE</th>
        <th>GENDER</th>
        <th>ADDRESS</th>
        <th>ACTION</th>
    </tr>
    <?php foreach ($students as $key=>$student):?>
        <tr>
            <td><?php echo $key++?></td>
            <td><?php echo $student->getStudentName()?></td>
            <td><?php echo $student->getClass()?></td>
            <td><?php echo $student->getMail()?></td>
            <td><?php echo $student->getPhone()?></td>
            <td><?php echo $student->getGender()?></td>
            <td><?php echo $student->getAddress()?></td>
            <td>
                <a href="index.php?page=editStudent&id=<?php echo $student->getId()?>">Edit</a>
                <a href="index.php?page=deleteStudent&id=<?php echo $student->getId()?>">Delete</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>