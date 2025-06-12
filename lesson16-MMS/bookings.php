<?php
session_start()

include_once('config.php');

$user_id = $_SESSION["id"];

if(isset('is_admin') == 'true'){
    $sql = "SELECT movies.movie_name, users.email,bookings,id, bookings.nr_ticket, bookings.date, bookings.is_approved, bookings.time FROM movies 
    INNER JOIN bookings ON movies.id = bookings.movie_id
    INNER JOIN users ON user.id = bookingsuser_id";

    $selectBookings = $conn ->prepare($sql);
    $selectBookings -> execute();

    $bookings_data = $selectBookings -> fetchAll();
}

else{
        $sql = "SELECT movies.movie_name, users.email, bookings.nr_ticket, bookings.date, bookings.is_approved, bookings.time FROM movies 
         FROM movies INNER JOIN users ON user.id = bookings.user_id WHERE bookings.user_id = :user_id";

         $selectBookings = $conn ->prepare($sql);

         $selectBookings->bindParam(":user_id, $user_id");

         $selectBookings -> execute();

         $bookings_data = $selectBookings -> fetchAll();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bookings Table</h2>
    <table>
        <tr>
            <th>Movie Name</th>
            <th>Movie Name</th>
            <th>Movie Name</th>
            <th>Movie Name</th>
            <th>Movie Name</th>
            <th>Movie Name</th>
        </tr>
        <tbody>
            <?php foreach($_SESSION['is_admin' == 'true']){?>
                <tr>
                    <td><?php echo $bookings_data['movie_name']{?></td>
                    <td><?php echo $bookings_data['email']?></td>
                    <td><?php echo $bookings_data['nr_tickets']?></td>
                    <td><?php echo $bookings_data['date']?></td>
                    <td><?php echo $bookings_data['time']?></td>
                    <td><?php echo $bookings_data['is_approved']?></td>

                    <td><a href="approve.php?id=<?php echo $bookings_data['id']?>">Approve</td>
                    <td><a href="decline.php?id=<?php echo $bookings_data['id']?>">Decline</td>
                </tr>

                <?php }} else{ ?>
                            <?php foreach($bookings_data as $booking_data['is_admin' == 'true']){?>
                <tr>
                    <td><?php echo $bookings_data['movie_name']?></td>
                    <td><?php echo $bookings_data['email']?></td>
                    <td><?php echo $bookings_data['nr_tickets']?></td>
                    <td><?php echo $bookings_data['date']?></td>
                    <td><?php echo $bookings_data['time']?></td>
                    <td><?php echo $bookings_data['is_approved']?></td>

                    <td><a href="approve.php?id=<?php echo $bookings_data['id']?>">Approve</td>
                    <td><a href="decline.php?id=<?php echo $bookings_data['id']?>">Decline</td>    
                            
                
                </tr>
                <?php }}?>
        </tbody>
   
         </table>
</body>
</html>