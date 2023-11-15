<?php

include_once 'config/init.php';

$job = new Job;

$job_id = isset($_GET['jobID']) ? $_GET['jobID'] : null;

if (isset($_POST['submit'])) {

    $data = array();
    $data['id_cat'] = $_POST['category'];
    $data['company'] = $_POST['company'];
    $data['title'] = $_POST['title'];
    $data['description'] = $_POST['description'];
    $data['salary'] = $_POST['salary'];
    $data['location'] = $_POST['location'];
    $data['contact_user'] = $_POST['user'];
    $data['contact_email'] = $_POST['email'];

    if ($job->updateJob($job_id, $data)) {
        redirect('index.php', 'Your job has been updated', 'success');
    } else {
        redirect('index.php', 'Oops... Something gone wrong', 'error');
    }
}

$template = new Template('view/updatepage.php');

$template->job = $job->getJob($job_id);

$template->id_job = $job->getJob($job_id)->id_job;
$template->id_cat = $job->getJob($job_id)->id_cat;
$template->title = $job->getJob($job_id)->title;
$template->loc = $job->getJob($job_id)->location;
$template->user = $job->getJob($job_id)->contact_user;
$template->date = $job->getJob($job_id)->post_date;
$template->desc = $job->getJob($job_id)->description;
$template->comp = $job->getJob($job_id)->company;
$template->slr = $job->getJob($job_id)->salary;
$template->email = $job->getJob($job_id)->contact_email;

$template->categories = $job->getCategories();

echo $template;