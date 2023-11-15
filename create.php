<?php

include_once 'config/init.php';

$job = new Job;

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

    if ($job->createJob($data)) {
        redirect('index.php', 'Your job has been uploaded', 'success');
    } else {
        redirect('index.php', 'Oops... Something gone wrong', 'error');
    }
}

$template = new Template('view/createpage.php');

$template->categories = $job->getCategories();

echo $template;