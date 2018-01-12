<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Student Class
 *
 * @author Anthony Vu
 */
class Student {
    //put your code here
    
    // Constructor for Student Class
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // Add email
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    // Add grade
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    // Returns the average grade of a student
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    // Returns a string that displays a student's name, average, and contact information
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
