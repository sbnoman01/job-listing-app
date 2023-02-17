<?php

class Job{

    // properties
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Get all jobs
    public function getAllJobs(){
        $this->db->query("SELECT job_list.* FROM job_list INNER JOIN category ON job_list.cat_id = category.cat_id");

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
        $this->db->query("SELECT job_list.* FROM job_list INNER JOIN category ON category.cat_id = job_list.job_id WHERE job_list.cat_id = $category ");

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

    public function create( $data ){
        
        // insert query
        $this->db->query("INSERT INTO `job_list` ( `cat_id`, `company_name`, `job_title`, `job_desc`, `job_salery`, `job_location`, `user_contact`, `email_contact`) VALUES (:cat_id, :company_name, :job_title, :job_desc, :job_salery, :job_location, :user_contact, :email_contact) ");


        // bind data
        $this->db->bind(':cat_id', $data['job_category']);
        $this->db->bind(':company_name', $data['company_name']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':job_desc', $data['job_description']);
        $this->db->bind(':job_salery', $data['job_salery']);
        $this->db->bind(':job_location', $data['job_location']);
        $this->db->bind(':user_contact', $data['job_contact_mobile']);
        $this->db->bind(':email_contact', $data['job_contact_email']);

        // execude
        if( $this->db->execute() ){
            return true;
        }
        else{
            return false;
        }
    }

    // Delete job
    public function delete( $id ){
        
        // insert query
        $this->db->query("DELETE FROM job_list WHERE job_list.job_id = :job_id ");

        // Bind the value
        $this->db->bind(':job_id', $id );

        // execute the query
        if( $this->db->execute() ){
            return true;
        }else{
            return false;
        }
    }

    public function update($job_id, $data ){
        
        // insert query
        $this->db->query("UPDATE `job_list` SET 
            `cat_id` = :cat_id,
            `company_name` = :company_name,
            `job_title` = :job_title,
            `job_desc` = :job_desc,
            `job_salery` = :job_salery,
            `job_location` = :job_location,
            `user_contact` = :user_contact,
            `email_contact` = :email_contact
            WHERE `job_list`.`job_id` = :job_id");



        // bind data
        $this->db->bind(':job_id', $job_id );
        $this->db->bind(':cat_id', $data['job_category']);
        $this->db->bind(':company_name', $data['company_name']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':job_desc', $data['job_description']);
        $this->db->bind(':job_salery', $data['job_salery']);
        $this->db->bind(':job_location', $data['job_location']);
        $this->db->bind(':user_contact', $data['job_contact_mobile']);
        $this->db->bind(':email_contact', $data['job_contact_email']);

        // execude
        if( $this->db->execute() ){
            return true;
        }
        else{
            return false;
        }
    }
}