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

    public function getByCategory( $category ){
        $this->db->query("SELECT job_list.* FROM job_list INNER JOIN category ON job_list.job_id = category.cat_id WHERE job_list.cat_id = $category ");

        $res =  $this->db->resultSet();

        return $res;
    }

    public function getCategory( $category ){

        $this->db->query("SELECT * FROM category WHERE cat_id = :category");

        $this->db->bind(':category', $category);
        $name =  $this->db->single();

        return $name;

    }

    public function getJob( $job_id ){
        $this->db->query("SELECT * FROM job_list WHERE job_id = :job_id ");

        // Bind the value
        $this->db->bind( ':job_id', $job_id );

        $job = $this->db->single();

        return $job;
    }


}