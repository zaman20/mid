<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Interest Page</title>
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
            <h2>Buyer are interested for this House</h2>
            <table class="table table-striped mt-3">
                <tr>
                    <th>#</th>
                    <th>Buyer Name</th>
                    <th>House #</th>
                    <th>Mobile </th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>John</td>
                    <td>554</td>
                    <td>5555555555</td>
                    <td>New York</td>
                    <td>02-12-2023</td>
                    <td>
                        <a href="tel:55555" class="btn btn-info">Call</a>
                    </td>
                </tr>
            </table>
        </div>
       </div>
    </div>
</body>
</html>