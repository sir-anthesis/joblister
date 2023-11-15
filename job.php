<?php

include_once 'config/init.php';

$job = new Job;

$template = new Template('view/jobpage.php');

$job_id = isset($_GET['jobID']) ? $_GET['jobID'] : null;

$template->job = $job->getJob($job_id);

$template->id_job = $job->getJob($job_id)->id_job;
$template->title = $job->getJob($job_id)->title;
$template->loc = $job->getJob($job_id)->location;
$template->user = $job->getJob($job_id)->contact_user;
$template->date = $job->getJob($job_id)->post_date;
$template->desc = $job->getJob($job_id)->description;
$template->comp = $job->getJob($job_id)->company;
$template->slr = $job->getJob($job_id)->salary;
$template->email = $job->getJob($job_id)->contact_email;

if ($del = isset($_GET['delID']) ? $_GET['delID'] : null) {
    if ($job->deleteJob($del)) {
        redirect('index.php', 'Your job has been Deleted', 'success');
    } else {
        redirect('index.php', 'Oops... Something gone wrong', 'error');
    }
}


echo $template;