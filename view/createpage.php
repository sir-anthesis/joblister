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
                    <li role="presentation"><a href="index.php">Home</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">
                <?php echo SET_TITLE ?>
            </h3>
        </div>

        <h2 class="page-header">Create Job Listing</h2>

        <form action="create.php" method="POST">

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" name="company" class="form-control">
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control">
                    <option value="0">Select a Category</option>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category->id_cat ?>"> <?php echo $category->name ?> </option>
                    <?php } ?>
                </select>
            </div>


            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" class="form-control">
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control">
            </div>

            <div class="form-group">
                <label for="user">User</label>
                <input type="text" name="user" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>

            <input type="submit" class="btn btn-default" value="Submit" name="submit">

        </form>

        <footer class="footer">
            <p>&copy; 2023 Anthesis, Inc.
            </p>
        </footer>

    </div> <!-- /container -->

</body>

</html>