<?php

class Job
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*, categories.name as cname
                        FROM jobs
                        INNER JOIN categories
                        ON jobs.id_cat = categories.id_cat
                        ORDER BY post_date DESC
                        ");

        $result = $this->db->resultSet();

        return $result;
    }

    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories");

        $result = $this->db->resultSet();

        return $result;
    }

    public function getByCategory($category)
    {
        $this->db->query("SELECT jobs.*, categories.name as cname
                        FROM jobs
                        INNER JOIN categories
                        ON jobs.id_cat = categories.id_cat
                        WHERE jobs.id_cat = $category
                        ORDER BY post_date DESC
                        ");

        $result = $this->db->resultSet();

        return $result;
    }

    public function getCategory($category)
    {
        $this->db->query("SELECT * FROM categories WHERE id_cat = :category");

        $this->db->bind(':category', $category);

        $row = $this->db->single();

        return $row;
    }

    public function getJob($jobID)
    {
        $this->db->query("SELECT * FROM jobs WHERE id_job = :jobID");

        $this->db->bind(':jobID', $jobID);

        $row = $this->db->single();

        return $row;
    }

    public function createJob($data)
    {
        if (
            $data['id_cat'] != 0 &&
            $data['company'] != '' &&
            $data['title'] != '' &&
            $data['description'] != '' &&
            $data['salary'] != '' &&
            $data['location'] != '' &&
            $data['contact_user'] != '' &&
            $data['contact_email'] != ''
        ) {
            $this->db->query("INSERT INTO jobs (id_cat, company, title, description, salary, location, contact_user, contact_email) VALUES (:id_cat, :company, :title, :description, :salary, :location, :contact_user, :contact_email)");

            $this->db->bind(':id_cat', $data['id_cat']);
            $this->db->bind(':company', $data['company']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':salary', $data['salary']);
            $this->db->bind(':location', $data['location']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function deleteJob($id_job)
    {
        $this->db->query("DELETE FROM jobs where id_job = $id_job");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateJob($id, $data)
    {
        if (
            $data['id_cat'] != 0 &&
            $data['company'] != '' &&
            $data['title'] != '' &&
            $data['description'] != '' &&
            $data['salary'] != '' &&
            $data['location'] != '' &&
            $data['contact_user'] != '' &&
            $data['contact_email'] != ''
        ) {
            $this->db->query("UPDATE jobs
            SET
              id_cat = :id_cat,
              company = :company,
              title = :title,
              description = :description,
              salary = :salary,
              location = :location,
              contact_user = :contact_user,
              contact_email = :contact_email
            WHERE
              id_job = $id;
            ");

            $this->db->bind(':id_cat', $data['id_cat']);
            $this->db->bind(':company', $data['company']);
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':salary', $data['salary']);
            $this->db->bind(':location', $data['location']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

}