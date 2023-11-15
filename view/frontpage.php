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
                    <li role="presentation"><a href="create.php">Upload Job</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">
                <?php echo SET_TITLE ?>
            </h3>
        </div>

        <?php displayMessage(); ?>

        <div class="jumbotron">
            <h2>
                <?php echo $title ?>
            </h2>
            <form method="GET" action="index.php">
                <select name="category" class="form-control">
                    <option value="0">Select a Category</option>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category->id_cat ?>"> <?php echo $category->name ?> </option>
                    <?php } ?>
                </select>
                <br>
                <input type="submit" class="btn btn-lg btn-success" value="FIND">
            </form>
        </div>

        <?php foreach ($jobs as $job) { ?>
            <div class="row marketing">
                <div class="col-md-10">
                    <h4>
                        <?php echo $job->title; ?>
                    </h4>
                    <p>
                        <?php echo $job->description; ?>
                    </p>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-default" href="job.php?jobID=<?php echo $job->id_job; ?>">View</a>
                </div>
            </div>
        <?php } ?>

        <footer class="footer">
            <p>&copy; 2023 Anthesis, Inc.
            </p>
        </footer>

    </div> <!-- /container -->

</body>

</html>