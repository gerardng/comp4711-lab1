<?php

/**
 * Created by PhpStorm.
 * User: gerard
 * Date: 2016-09-09
 * Time: 4:48 PM
 */
class Student
{
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /*If you assign values to an array without the index,
    PHP will automatically increment the internal reference
    so each value goes into the next element. */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /* When traversing an array of key/value pairs,
    for instance "foreach($stuff as $key =>> $value)", you use the => operator to tell PHP to
    put the current key into the $key variable and
    the associated value at the key into the $value variable */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}