<?php

class wedding {

    protected $meeting;
    protected $today;
    protected $wedding;
    protected $intervalWedding ;
    protected $intervalMeeting;
    
    const CEREMONY=1;
    const LUNCH=2;
    const SUNDAY=4;
    

    public function __construct() {
        $this->meeting = new DateTime('2013-08-05 15:00');
        $this->today = new DateTime();
        $this->wedding = new DateTime('2016-06-04');
        $this->intervalWedding = $this->today->diff($this->wedding);
        $this->intervalMeeting = $this->meeting->diff($this->today);
    }
    public function getIntervalWedding ($format) {
        return $this->intervalWedding->format($format);
    }

    public function getIntervalMeeting ($format) {
        return $this->intervalMeeting->format($format);
    }
}

$wedding = new wedding();