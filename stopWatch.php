<?php
class stopWatch
{
    protected $startTime;
    protected $endTime;
    public function setStartTime()
    {
        $this->startTime = microtime(true);
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function setEndTime()
    {
        $this->endTime = microtime(true);
    }
    public function getEndTime(){
        return $this->endTime;
    }
    public function getTime(){
        return ($this->getEndTime()-$this->getStartTime())*1000;
    }
}