<?php

class Booking extends CI_Model {
    public $time;
    public $courseName;
    public $room;
    public $instructor;
    public $weekday;

    // courses
    public $code;

    public function __construct() {
        parent::__construct();
    }
	
	public function getTime() {
        if(isset($this->time)) {
            return $this->time;
        }
        else {
            return null;
        }
    }

	/*Get methods*/
    public function getCourseName() {
        if(isset($this->courseName)) {
            return $this->courseName;
        }
        else {
            return null;
        }
    }

    public function getRoom() {
        if(isset($this->room)) {
            return $this->room;
        }
        else {
            return null;
        }
    }

    public function getInstructor() {
        if(isset($this->instructor)) {
            return $this->instructor;
        }
        else {
            return null;
        }
    }

    public function getWeekDay() {
        if(isset($this->weekday)) {
            return $this->weekday;
        }
        else {
            return null;
        }
    }

    public function getCode() {
        if(isset($this->code)) {
            return $this->code;
        }
        else {
            return null;
        }
    }
	/*End get methods*/

	/*Set methods*/
    public function setTime($time) {
        $this->time = $time;
    }

    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }

    public function setRoom($room){
        $this->room = $room;
    }
	
    public function setInstructor($instructor) {
        $this->instructor = $instructor;
    }

    public function setWeekday($weekday) {
        $this->weekday = $weekday;
    }
	/*End set methods*/
}