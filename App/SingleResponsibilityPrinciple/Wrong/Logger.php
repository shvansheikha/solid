<?php

class Logger{
    private $logs = [];

    public function add($log){
        $now = new DateTime();
        $date = $now->format("Y-m-d h:i:s.u");
        $this->logs[] = $date." : ".$log;
    }
    public function toString($dimiliter=", "){
        if(empty($this->logs)){
            return "No logs";
        }
        return implode($this->logs,$dimiliter);

    }
    public function reset(){
        $this->logger=[];
    }
    public function save($fileName){
        $fp = fopen($fileName,"w");
        fwrite($fp,$this->toString("\n"));
        fclose($fp);
    }

}