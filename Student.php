<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//This class represents a student
class Student {

    //Student constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    //Add email to students
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    //Add grade to students
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    //Calculate average for students
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total /
                count($this->grades);
    }

    //Creates a string of student data
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= '(' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
