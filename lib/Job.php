<?php

class Job{

    // properties
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Get all jobs
    public function getAllJobs(){
        $this->db->query("SELECT * FROM job_list");

        //Asign Results
        $results = $this->db->resultSet();

        return $results;
    }
}