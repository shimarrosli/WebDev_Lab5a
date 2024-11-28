<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 5a Q1</title>
</head>

<body>
    <?php
    $name = "Nur Ashimah binti Rosli";
    $matricNumber = "CI230122";
    $course = "BIW";
    $yearOfStudy = "2 2024/2025";
    $address = "No.216 Jalan Indah Taman Berbahagia, 71800 Nilai, Negeri Sembilan.";
    ?>
    <table>
        <tr>
            <td>Name </td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number </td>
            <td><?php echo "$matricNumber"; ?></td>
        </tr>
        <tr>
            <td>Course </td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study </td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address </td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>

</html>