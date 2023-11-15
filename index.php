<?php

include_once 'config/init.php';

$job = new Job;

$template = new Template('view/frontpage.php');
$template->title = "Find Your Dream Job";

$category = isset($_GET['category']) ? $_GET['category'] : null;
if ($category) {
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Latest Jobs of ' . $job->getCategory($category)->name;
} else {
    $template->jobs = $job->getAllJobs();
}


$template->categories = $job->getCategories();

echo $template;