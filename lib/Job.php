<?php

class Job{

    // properties
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Get all jobs
    public function getAllJobs(){
        $this->db->query("SELECT job_list.* FROM job_list INNER JOIN category ON job_list.job_id = category.cat_id");

        //Asign Results
        $results = $this->db->resultSet();

        return $results;
    }

    public function getCategories (){
        $this->db->query("SELECT * FROM category");

        //Asign Results
        $results = $this->db->resultSet();

        return $results;
    }
}