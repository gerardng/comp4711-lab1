<?php

/**
 * Created by PhpStorm.
 * User: gerard
 * Date: 2016-09-09
 * Time: 4:48 PM
 */
class Student {
    /**
     * Default constructor
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Adds addresses to $email[]
     * @param $which
     * @param $address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    /**
     * Adds number grades to $grade[]
     * @param $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculates average of all the $value 's of each object in $grade[]
     * @return integer
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total / count($this->grades);
    }

    /**
     * Returns a students first & last name, average, email/s
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what){
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}