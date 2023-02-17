<?php

// Redirect to page
    function redirect( $page = FALSE, $message = NULL, $message_type = NULL ){
        
        if( is_string( $page ) ){
            $location = $page;
        }else{
            $location = $_SERVER['SCRIPT_NAME'];
        }

        // Check for message
        if( $message != NULL ){
            // set message
            $_SESSION['message'] = $message;
        }

        // check message type 
        if( $message_type != NULL ){
            
            //set message type
            $_SESSION['message_type'] = $message_type;
        }

        // redirect
        header('Location: '.$location);

        exit;
    }

// Display Messages
    function displayMessages(){

        if( !empty($_SESSION['message']) ){

            //asign message var
            $message = $_SESSION['message'];

            // check messag type
            if( $_SESSION['message_type'] ){

                //asign message type
                $message_type = $_SESSION['message_type'];

                if( $message_type == 'error' ){
                    echo '<div class="alert alert-danger w-50 m-auto mb-3">' . $message . '</div>';
                }else{
                    echo '<div class="alert alert-success w-50 m-auto mb-3">' . $message . '</div>';
                }
            }

            // sunset message
            unset( $_SESSION['message'] );
            unset( $_SESSION['message_type'] );
        } else{
            echo '';
        }
    }