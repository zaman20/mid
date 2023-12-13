<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>
    <!-- bootstrap  css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
       <div class="row">
        <div class="col-lg-2 left-part">
            <div class="left-part-content">
                <h2>Real State System</h2>
                <?php include('menu.php');?>
                
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-9 right-part">
            <?php include('db.php');
                $sql="SELECT * FROM rent";
                $query_rent = mysqli_query($conn,$sql);
                $rent = mysqli_num_rows($query_rent);
                $sql="SELECT * FROM sell";
                $query_sell = mysqli_query($conn,$sql);
                $sell = mysqli_num_rows($query_sell);
                $sql="SELECT * FROM appointment";
                $query_apt = mysqli_query($conn,$sql);
                $apt = mysqli_num_rows($query_apt);
            ?>
            <div class="box rent">Rent <br> 
                <?php echo $rent?>
            </div>
            <div class="box sell">Sell <br>
                <?php echo $sell?>
            </div>
            <div class="box appnt">Appointment <br>
                <?php echo $apt?>
            </div>

        </div>
       </div>
    </div>
</body>
</html>