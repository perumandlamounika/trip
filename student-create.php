<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>user Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Added 
                            <a href="trip.php" class="btn btn-danger float-end">GO TO WEBSITE</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>first Name:</label>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                                <label>last Name:</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>gender:</label>
                                <input type="gender" name="gender" class="from-control" >
                            </div>
                            <div class="mb-3">
                                <label>country:</label>
                                <select name="country">
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="france">France</option>
                                    <option value="Asia">Asia</option>
                                    <option value="Egypt">Egypt</option>
                           </select>
                            </div>
                            <div class="mb-3">
                                <label>date_from:</label>
                                <input type="date"  id="date" name="date_from" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>date_to: </label>
                                <input type="date"  id="date" name="date_to" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>