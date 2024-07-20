<?php
include_once('common/header.php');
require_once('db_config.php');
include_once('common/navbar.php');
include_once('common/sidebar.php');
?>

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">All Bookings</h2>
        </div>
    </div>

    <div class="container-fluid mt-4" style="margin-left: 10%;">
        <div class="row justify-content-center"> <!-- Centering the content -->
            <div class="col-lg-8"> <!-- Adjust column size as needed -->
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Movie Price</th>
                                        <th>No Of Seats</th>
                                        <th>Person Card Info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $booking_details_result = mysqli_query($connection, "SELECT * FROM booking_details");
                                    if ($booking_details_result && mysqli_num_rows($booking_details_result) > 0) {
                                        while ($booking_detail = mysqli_fetch_assoc($booking_details_result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $booking_detail['booking_id']; ?></td>
                                                <td><?php echo $booking_detail['user_price']; ?></td>
                                                <td><?php echo $booking_detail['user_seat']; ?></td>
                                                <td><?php echo $booking_detail['user_card']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="4" class="text-center">No bookings found.</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include_once('common/footer.php');
?>
