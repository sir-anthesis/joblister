<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobLister</title>

    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/jumbotron-narrow.css">

</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">About</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">
                <?php echo SET_TITLE ?>
            </h3>
        </div>

        <h2 class="page-header">
            <?php echo $title ?> (
            <?php echo $loc ?> )
        </h2>
        <small>Posted by
            <?php echo $user ?> on
            <?php echo $date ?>
        </small>

        <hr>
        <p class="lead">
            <?php echo $desc ?>
        </p>
        <ul class="list-group">
            <li class="list-group-item"><strong>Company : </strong>
                <?php echo $comp ?>
            </li>
            <li class="list-group-item"><strong>Salary : </strong>
                <?php echo $slr ?>
            </li>
            <li class="list-group-item"><strong>Email : </strong>
                <?php echo $email ?>
            </li>
        </ul>

        <a class="btn btn-success" href="index.php"> Back </a>
        <a class="btn btn-default" href="update.php?jobID=<?php echo $id_job ?>"> Edit </a>
        <a class="btn btn-danger" href="job.php?delID=<?php echo $id_job ?>"> Delete </a>
        <br><br>


        <footer class="footer">
            <p>&copy; 2023 Anthesis, Inc.
            </p>
        </footer>

    </div> <!-- /container -->

</body>

</html>