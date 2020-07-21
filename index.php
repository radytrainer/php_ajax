<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Request</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container text-center">
        <h1 class="py-4">AJAX Request</h1>
        <hr>
    </div>
    <div class="container-fluid d-flex">
        <div class="section-one p-4 w-40">
            <h5 class="py-3">Information</h5>
            <form action="request.php" id="form-data" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="fname" autocomplete="off" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="col">
                        <input type="text" name="lname" autocomplete="off" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col">
                        <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col">
                        <textarea name="address" id="area"  rows="5" autocomplete="off" placeholder="Address" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col">
                        <input type="submit" name="btn-submit" class="btn btn-primary btn-block" value="ADD NEW">
                    </div>
                </div>
            </form>
        </div>
        <div class="section-two flex-fill p-4">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody class="table-body"></tbody>
            </table>
        </div>
    </div>
<p class="message"></p>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>